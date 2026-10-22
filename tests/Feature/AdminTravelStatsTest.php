<?php

namespace Tests\Feature;

use App\Models\TravelStat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTravelStatsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        TravelStat::clearCache();
    }

    /**
     * Test that unauthenticated guests cannot access the travel statistics tab.
     */
    public function test_guests_cannot_access_travel_stats_page(): void
    {
        $response = $this->get(route('admin.travel-stats'));

        $response->assertRedirect(route('admin.login'));
    }

    /**
     * Test that unauthenticated guests cannot post updates to travel statistics.
     */
    public function test_guests_cannot_update_travel_stats(): void
    {
        $response = $this->post(route('admin.travel-stats.update'), [
            'happy_travelers' => 500,
            'average_rating' => 4.9,
            'years_of_experience' => 3,
            'team_members' => 6,
            'trips_completed' => 50,
            'verified_reviews' => 150,
        ]);

        $response->assertRedirect(route('admin.login'));
    }

    /**
     * Test that authenticated admins can view the travel statistics tab.
     */
    public function test_authenticated_admin_can_view_travel_stats_page(): void
    {
        $stat = TravelStat::current();

        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.travel-stats'));

        $response->assertOk();
        $response->assertSee('Travel Statistics');
        $response->assertSee('Happy Travelers');
        $response->assertSee('Average Rating');
        $response->assertSee('Years of Experience');
        $response->assertSee('Team Members');
        $response->assertSee('Trips Completed');
        $response->assertSee('Verified Reviews');
        $response->assertSee((string) $stat->happy_travelers);
        $response->assertSee(number_format($stat->average_rating, 1));
        $response->assertSee((string) $stat->years_of_experience);
    }

    /**
     * Test that admin can update all 6 travel statistics successfully.
     */
    public function test_admin_can_update_travel_stats_successfully(): void
    {
        $payload = [
            'happy_travelers' => 320,
            'average_rating' => 4.8,
            'years_of_experience' => 5,
            'team_members' => 8,
            'trips_completed' => 65,
            'verified_reviews' => 180,
        ];

        $response = $this->withSession(['admin_authenticated' => true])
            ->post(route('admin.travel-stats.update'), $payload);

        $response->assertRedirect(route('admin.travel-stats'));
        $response->assertSessionHas('success', 'Travel statistics updated successfully.');

        $this->assertDatabaseHas('travel_stats', [
            'happy_travelers' => 320,
            'average_rating' => 4.8,
            'years_of_experience' => 5,
            'team_members' => 8,
            'trips_completed' => 65,
            'verified_reviews' => 180,
        ]);

        $fresh = TravelStat::current();
        $this->assertSame(320, $fresh->happy_travelers);
        $this->assertSame(4.8, (float) $fresh->average_rating);
        $this->assertSame(5, $fresh->years_of_experience);
    }

    /**
     * Test validation rules reject invalid and out-of-bounds input.
     */
    public function test_validation_rejects_out_of_bounds_and_invalid_values(): void
    {
        // Rating > 5.0 and negative happy travelers
        $response = $this->withSession(['admin_authenticated' => true])
            ->from(route('admin.travel-stats'))
            ->post(route('admin.travel-stats.update'), [
                'happy_travelers' => -5,
                'average_rating' => 5.5,
                'years_of_experience' => 150,
                'team_members' => -2,
                'trips_completed' => -10,
                'verified_reviews' => -50,
            ]);

        $response->assertRedirect(route('admin.travel-stats'));
        $response->assertSessionHasErrors([
            'happy_travelers',
            'average_rating',
            'years_of_experience',
            'team_members',
            'trips_completed',
            'verified_reviews',
        ]);
    }

    /**
     * Test validation rejects non-numeric and missing values.
     */
    public function test_validation_rejects_non_numeric_and_missing_values(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])
            ->from(route('admin.travel-stats'))
            ->post(route('admin.travel-stats.update'), [
                'happy_travelers' => 'abc',
                'average_rating' => 'excellent',
            ]);

        $response->assertRedirect(route('admin.travel-stats'));
        $response->assertSessionHasErrors([
            'happy_travelers',
            'average_rating',
            'years_of_experience',
            'team_members',
            'trips_completed',
            'verified_reviews',
        ]);
    }

    /**
     * Test that updating years_of_experience synchronizes both the Experience Badge
     * and the Success Story heading on the frontend.
     */
    public function test_years_of_experience_synchronizes_both_badge_and_success_story_heading(): void
    {
        // Update experience to 6
        $this->withSession(['admin_authenticated' => true])
            ->post(route('admin.travel-stats.update'), [
                'happy_travelers' => 290,
                'average_rating' => 4.9,
                'years_of_experience' => 6,
                'team_members' => 4,
                'trips_completed' => 40,
                'verified_reviews' => 100,
            ]);

        // Visit frontend landing page
        $response = $this->get(route('home'));

        $response->assertOk();
        // Location 1: Experience badge
        $response->assertSee('<b>6+</b>', false);
        $response->assertSee('Years of<br>experience', false);
        // Location 2: Success story heading
        $response->assertSee('<h3>6+ years of trips travelers trust</h3>', false);
        $response->assertDontSee('<h3>2+ years of trips travelers trust</h3>', false);
    }

    /**
     * Test that all six updated statistics appear on the public frontend website.
     */
    public function test_frontend_displays_all_updated_statistics(): void
    {
        $this->withSession(['admin_authenticated' => true])
            ->post(route('admin.travel-stats.update'), [
                'happy_travelers' => 380,
                'average_rating' => 4.7,
                'years_of_experience' => 7,
                'team_members' => 9,
                'trips_completed' => 75,
                'verified_reviews' => 240,
            ]);

        $response = $this->get(route('home'));

        $response->assertOk();
        // Happy Travelers (avatar bubble and bold count)
        $response->assertSee('380+');
        $response->assertSee('Happy travelers');
        // Average Rating
        $response->assertSee('4.7 / 5');
        $response->assertSee('4.7 rating');
        // Years of experience (badge & heading)
        $response->assertSee('7+ years of trips travelers trust');
        $response->assertSee('<b>7+</b>', false);
        // Team members, trips completed, verified reviews
        $response->assertSee('data-target="9"', false);
        $response->assertSee('data-target="75"', false);
        $response->assertSee('75+');
        $response->assertSee('data-target="240"', false);
        $response->assertSee('240+');
    }

    /**
     * Test that the admin sidebar and bottom navigation include the Travel Statistics tab.
     */
    public function test_sidebar_and_bottom_nav_contain_travel_statistics_tab(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.dashboard'));

        $response->assertOk();
        $response->assertSee(route('admin.travel-stats'));
        $response->assertSee('Travel Statistics');
    }
}
