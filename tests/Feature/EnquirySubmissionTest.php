<?php

namespace Tests\Feature;

use App\Mail\InquiryReceived;
use App\Models\Enquiry;
use App\Models\Inquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EnquirySubmissionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * The contact section shows the enquiry fields and only verified contact details.
     */
    public function test_contact_section_lists_fields_and_verified_details(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('GET IN TOUCH');
        $response->assertSee('plan your next adventure.');
        $response->assertSee('Full Name');
        $response->assertSee('Enter your full name');
        $response->assertSee('you@example.com');
        $response->assertSee('Enter your phone number');
        $response->assertSee('Destination / Tour Package');
        $response->assertSee('Adi Kailash &amp; Om Parvat', false);
        $response->assertSee('Char Dham Yatra');
        $response->assertSee('Haridwar &amp; Rishikesh', false);
        $response->assertSee('Harihar Fort Trek');
        $response->assertSee('Not Sure Yet');
        $response->assertSee('Preferred Travel Date');
        $response->assertSee('Number of Travellers');
        $response->assertSee('Tell us about your preferred destination, travel dates, and special requirements.');
        $response->assertSee('Inquire Now');
        $response->assertSee('inquire-now', false);
        $response->assertSee('+91 8460922935');
        $response->assertSee('exploretrekora@gmail.com');
        $response->assertSee('Contact us for availability.');
        $response->assertSee('Vadodara, India');
        $response->assertSee('action="'.route('enquiries.store').'"', false);
        $response->assertSee('id="contact-enquiry-form"', false);
        $response->assertDontSee('555-0199');
        $response->assertDontSee('Ring Road');
        $response->assertDontSee('395002');
        $response->assertDontSee('Message sent successfully');
        $response->assertDontSee('Voyages of wonder');

        $this->assertCount(18, Enquiry::destinations());
    }

    /**
     * A valid enquiry is stored and the page does not claim an email was sent.
     */
    public function test_valid_enquiry_is_stored(): void
    {
        Mail::fake();

        $response = $this->from('/')->post(route('enquiries.store'), $this->enquiry());

        $response->assertRedirect('/#contact');
        $response->assertSessionHas('enquiry_status', 'received');
        $response->assertSessionHas('whatsapp_url');

        $this->assertDatabaseHas('inquire-tb', [
            'name' => 'Asha Patel',
            'email' => 'asha@example.com',
            'phone_number' => '+918460922935',
            'address' => null,
            'number_of_travellers' => 3,
            'destinations' => 'Girnar',
            'message' => 'We would like a family trip.',
        ]);

        Mail::assertSent(InquiryReceived::class, function (InquiryReceived $mail): bool {
            return $mail->hasTo('asha@example.com')
                && $mail->inquiry->name === 'Asha Patel';
        });
    }

    /**
     * An enquiry can be submitted via AJAX modal and returns JSON with a WhatsApp redirect URL.
     */
    public function test_enquiry_can_be_submitted_via_ajax_modal(): void
    {
        Mail::fake();

        $response = $this->postJson(route('enquiries.store'), [
            ...$this->enquiry(),
            'address' => 'Dharamshala, Himachal Pradesh',
        ]);

        $response->assertOk();
        $response->assertJson([
            'success' => true,
            'message' => 'Enquiry submitted successfully.',
        ]);
        $response->assertJsonStructure([
            'success',
            'message',
            'whatsapp_url',
        ]);

        $this->assertDatabaseHas('inquire-tb', [
            'name' => 'Asha Patel',
            'email' => 'asha@example.com',
            'phone_number' => '+918460922935',
            'address' => 'Dharamshala, Himachal Pradesh',
            'destinations' => 'Girnar',
        ]);

        Mail::assertSent(InquiryReceived::class);
    }

    /**
     * The generated WhatsApp URL includes the phone number and formatted inquiry details.
     */
    public function test_whatsapp_url_contains_all_inquiry_details(): void
    {
        $inquiry = new Inquiry([
            'name' => 'Rahul Sharma',
            'email' => 'rahul@example.com',
            'phone_number' => '+919876543210',
            'address' => 'Surat, Gujarat',
            'number_of_travellers' => 4,
            'destinations' => 'Adi Kailash & Om Parvat',
            'date' => '2026-11-15',
            'message' => 'We need an experienced guide.',
        ]);

        $url = $inquiry->whatsAppUrl();

        $this->assertStringStartsWith('https://wa.me/918460922935?text=', $url);

        $decodedQuery = urldecode((string) parse_url($url, PHP_URL_QUERY));
        $this->assertStringContainsString("Name: Rahul Sharma\nEmail: rahul@example.com", $decodedQuery);
        $this->assertStringContainsString('rahul@example.com', $decodedQuery);
        $this->assertStringContainsString('+919876543210', $decodedQuery);
        $this->assertStringContainsString('Surat, Gujarat', $decodedQuery);
        $this->assertStringContainsString('4', $decodedQuery);
        $this->assertStringContainsString('Adi Kailash & Om Parvat', $decodedQuery);
        $this->assertStringContainsString('15 Nov 2026', $decodedQuery);
        $this->assertStringContainsString('We need an experienced guide.', $decodedQuery);
    }

    /**
     * Invalid fields are rejected and nothing is stored.
     */
    public function test_invalid_enquiry_is_not_stored(): void
    {
        $response = $this->from('/')->post(route('enquiries.store'), [
            'full_name' => '',
            'email' => 'not-an-email',
            'phone' => '12345',
            'destination' => 'Paris',
            'travel_date' => now()->subDay()->toDateString(),
            'travellers' => 0,
            'message' => '',
        ]);

        $response->assertRedirect('/#contact');
        $response->assertSessionHasErrors([
            'full_name',
            'email',
            'phone',
            'destination',
            'travel_date',
            'travellers',
        ]);
        $response->assertSessionDoesntHaveErrors(['message', 'address']);
        $this->assertDatabaseCount('inquire-tb', 0);
    }

    /**
     * The thank-you email uses the site contact details and the public website link.
     */
    public function test_inquiry_email_links_to_the_public_website(): void
    {
        $mail = new InquiryReceived(new Inquiry([
            'name' => 'Asha Patel',
            'email' => 'asha@example.com',
            'phone_number' => '+918460922935',
            'number_of_travellers' => 3,
            'destinations' => 'Girnar',
            'date' => '2026-11-15',
            'message' => 'We would like a family trip.',
        ]));

        $mail->assertSeeInHtml('Thank you for your inquiry, Asha Patel');
        $mail->assertSeeInHtml('https://www.exploretrekora.com/');
        $mail->assertSeeInHtml('Browse our treks');
        $mail->assertSeeInHtml('+91 8460922935');
        $mail->assertSeeInHtml('exploretrekora@gmail.com');
        $mail->assertSeeInHtml('Girnar');
        $mail->assertSeeInHtml('15 Nov 2026');
        $mail->assertSeeInHtml('We would like a family trip.');
        $mail->assertSeeInText('Browse our treks: https://www.exploretrekora.com/');
        $mail->assertSeeInText('Destination: Girnar');
        $mail->assertSeeInText('Travel date: 15 Nov 2026');
    }

    /**
     * @return array<string, mixed>
     */
    private function enquiry(): array
    {
        return [
            'full_name' => 'Asha Patel',
            'email' => 'asha@example.com',
            'phone' => '+91 84609 22935',
            'destination' => 'Girnar',
            'travel_date' => now()->addDays(10)->toDateString(),
            'travellers' => 3,
            'message' => 'We would like a family trip.',
        ];
    }
}
