<?php

namespace Tests\Feature;

use App\Models\Inquiry;
use App\Models\Review;
use App\Models\TravelStat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        TravelStat::clearCache();
        Review::clearCache();
    }

    /**
     * Test guests are redirected to login when accessing dashboard.
     */
    public function test_guests_cannot_access_dashboard(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirect(route('admin.login'));
    }

    /**
     * Test authenticated admin can view dashboard with all cards and interactive widgets.
     */
    public function test_authenticated_admin_can_view_rich_dashboard(): void
    {
        // Create sample inquiry and review
        Inquiry::create([
            'name' => 'John Traveler',
            'email' => 'john@example.com',
            'phone_number' => '9876543210',
            'destinations' => 'Khaliya Top Trek',
            'date' => now()->addDays(5),
            'number_of_travellers' => 4,
            'message' => 'Excited for this winter trek.',
        ]);

        Review::create([
            'name' => 'Meera Patel',
            'destination' => 'Khaliya Top, Munsiyari',
            'review' => 'Stunning views of Panchachuli peaks and outstanding guide.',
            'rating' => 5,
            'is_active' => true,
        ]);

        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.dashboard'));

        $response->assertOk();
        $response->assertSee('Dashboard');
        $response->assertSee('Live overview of inquiries, travel statistics and reviews.');
        $response->assertSee('Welcome back 👋');
        $response->assertSee('Replay animation');
        $response->assertSee('Inquiries per day');
        $response->assertSee('Popular destinations');
        $response->assertSee('Latest inquiries');
        $response->assertSee('Travel statistics');
        $response->assertSee('Customer reviews');
        $response->assertSee('John Traveler');
        $response->assertSee('Khaliya Top Trek');
        $response->assertSee('Meera Patel');
    }
}
