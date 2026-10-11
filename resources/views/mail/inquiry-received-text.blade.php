Thank you for your inquiry, {{ $name }}

We have received your message and we are glad you are thinking of the mountains with us. Whether this is your first trek or your tenth, our team will help you choose the right route, season and pace.

One of our trek experts will contact you within 24 hours with details, pricing and answers to your questions.

@if (filled($destination) || filled($travelDate) || filled($travellers) || filled($phoneNumber) || filled($inquiryMessage))
Your enquiry
@if (filled($destination))
Destination: {{ $destination }}
@endif
@if (filled($travelDate))
Travel date: {{ $travelDate }}
@endif
@if (filled($travellers))
Travellers: {{ $travellers }}
@endif
@if (filled($phoneNumber))
Phone: {{ $phoneNumber }}
@endif
@if (filled($inquiryMessage))
Message: {{ $inquiryMessage }}
@endif

@endif
What happens next
1. Our team reviews your inquiry.
2. We call or message you with route options that fit your dates.
3. You get a clear itinerary and cost, with no pressure to book.

Reach us directly
Mobile / WhatsApp: {{ $phone }}
Email: {{ $email }}
Website: {{ $website }}

Browse our treks: {{ $website }}

Warm regards,
Team Explore Trekora

You are receiving this email because you submitted an inquiry on exploretrekora.com.
