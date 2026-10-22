<?php

namespace Tests\Feature;

use App\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminReviewTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Review::clearCache();
    }

    /**
     * Test that unauthenticated guests cannot access the reviews management routes.
     */
    public function test_guests_cannot_access_review_routes(): void
    {
        $review = Review::create([
            'name' => 'Test Traveler',
            'destination' => 'Spiti Valley',
            'review' => 'Unbelievable landscapes and well curated trip itinerary.',
            'rating' => 5,
            'is_active' => true,
        ]);

        $this->get(route('admin.reviews.index'))->assertRedirect(route('admin.login'));
        $this->get(route('admin.reviews.create'))->assertRedirect(route('admin.login'));
        $this->post(route('admin.reviews.store'), [
            'name' => 'New Traveler',
            'destination' => 'Ladakh',
            'review' => 'Superb journey.',
        ])->assertRedirect(route('admin.login'));
        $this->get(route('admin.reviews.edit', $review))->assertRedirect(route('admin.login'));
        $this->put(route('admin.reviews.update', $review), [
            'name' => 'Updated Name',
            'destination' => 'Ladakh',
            'review' => 'Superb journey.',
        ])->assertRedirect(route('admin.login'));
        $this->delete(route('admin.reviews.destroy', $review))->assertRedirect(route('admin.login'));
    }

    /**
     * Test that an authenticated admin can view the reviews index page with list of reviews.
     */
    public function test_authenticated_admin_can_view_reviews_index(): void
    {
        $review = Review::create([
            'name' => 'Kavita Joshi',
            'destination' => 'Chopta Tungnath',
            'review' => 'Breathtaking sunrise from Tungnath Temple peak!',
            'rating' => 5,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.reviews.index'));

        $response->assertOk();
        $response->assertSee('Customer Reviews');
        $response->assertSee('Kavita Joshi');
        $response->assertSee('Chopta Tungnath');
        $response->assertSee('Breathtaking sunrise from Tungnath');
        $response->assertSee(route('admin.reviews.create'));
    }

    /**
     * Test that admin can search reviews by author name or destination.
     */
    public function test_admin_can_search_reviews(): void
    {
        Review::create([
            'name' => 'Harsh Vardhan',
            'destination' => 'Hampta Pass',
            'review' => 'Green valleys transforming into desert spiti mountains.',
            'rating' => 5,
        ]);

        Review::create([
            'name' => 'Meera Nair',
            'destination' => 'Munnar Hills',
            'review' => 'Rolling tea plantations and misty morning hikes.',
            'rating' => 5,
        ]);

        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.reviews.index', ['search' => 'Hampta']));

        $response->assertOk();
        $response->assertSee('Harsh Vardhan');
        $response->assertDontSee('Meera Nair');
    }

    /**
     * Test that admin can access the create form.
     */
    public function test_admin_can_view_create_review_page(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.reviews.create'));

        $response->assertOk();
        $response->assertSee('Add New Review');
        $response->assertSee('Reviewer Name');
        $response->assertSee('Destination / Trip Name');
        $response->assertSee('name="destination"', false);
        $response->assertSee('-- Select Destination / Trip --');
        $response->assertSee('Khaliya Top, Munsiyari');
        $response->assertSee('Adi Kailash &amp; Om Parvat Yatra', false);
        $response->assertSee('Review / Customer Story');
    }

    /**
     * Test that admin can store a new customer review.
     */
    public function test_admin_can_create_new_review(): void
    {
        $payload = [
            'name' => 'Rohan Sen',
            'destination' => 'Roopkund Trek',
            'review' => 'A challenging yet extraordinarily rewarding high-altitude expedition organized with precision.',
            'rating' => 5,
            'image' => 'images/story-3.jpg',
            'sort_order' => 1,
            'is_active' => '1',
        ];

        $response = $this->withSession(['admin_authenticated' => true])
            ->post(route('admin.reviews.store'), $payload);

        $response->assertRedirect(route('admin.reviews.index'));
        $response->assertSessionHas('success', 'Review added successfully and published to website.');

        $this->assertDatabaseHas('reviews', [
            'name' => 'Rohan Sen',
            'destination' => 'Roopkund Trek',
            'review' => 'A challenging yet extraordinarily rewarding high-altitude expedition organized with precision.',
            'rating' => 5,
            'is_active' => true,
        ]);
    }

    /**
     * Test that admin can view and update an existing review.
     */
    public function test_admin_can_edit_and_update_review(): void
    {
        $review = Review::create([
            'name' => 'Initial Name',
            'destination' => 'Old Destination',
            'review' => 'Initial review feedback from customer.',
            'rating' => 4,
            'is_active' => true,
        ]);

        // Edit form view
        $editResponse = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.reviews.edit', $review));

        $editResponse->assertOk();
        $editResponse->assertSee("Edit Review #{$review->id}");
        $editResponse->assertSee('Initial Name');
        $editResponse->assertSee('Old Destination');

        // Update action
        $updateResponse = $this->withSession(['admin_authenticated' => true])
            ->put(route('admin.reviews.update', $review), [
                'name' => 'Updated Traveler Name',
                'destination' => 'Kedarkantha Summit',
                'review' => 'Snow covered pine trees and a magical summit sunrise!',
                'rating' => 5,
                'sort_order' => 2,
                'is_active' => '1',
            ]);

        $updateResponse->assertRedirect(route('admin.reviews.index'));
        $updateResponse->assertSessionHas('success', 'Review updated successfully.');

        $this->assertDatabaseHas('reviews', [
            'id' => $review->id,
            'name' => 'Updated Traveler Name',
            'destination' => 'Kedarkantha Summit',
            'review' => 'Snow covered pine trees and a magical summit sunrise!',
            'rating' => 5,
        ]);
    }

    /**
     * Test that admin can delete a review.
     */
    public function test_admin_can_delete_review(): void
    {
        $review = Review::create([
            'name' => 'Reviewer To Delete',
            'destination' => 'Nowhere',
            'review' => 'This review will be deleted soon.',
            'rating' => 3,
        ]);

        $response = $this->withSession(['admin_authenticated' => true])
            ->delete(route('admin.reviews.destroy', $review));

        $response->assertRedirect(route('admin.reviews.index'));
        $response->assertSessionHas('success', 'Review deleted successfully.');

        $this->assertDatabaseMissing('reviews', [
            'id' => $review->id,
        ]);
    }

    /**
     * Test validation rules on review creation and updates.
     */
    public function test_validation_fails_when_required_fields_are_missing(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])
            ->from(route('admin.reviews.create'))
            ->post(route('admin.reviews.store'), [
                'name' => '',
                'destination' => '',
                'review' => '',
                'rating' => 10, // out of range
            ]);

        $response->assertRedirect(route('admin.reviews.create'));
        $response->assertSessionHasErrors(['name', 'destination', 'review', 'rating']);
    }

    /**
     * Test that active reviews created by admin reflect dynamically on the public home page.
     */
    public function test_active_reviews_are_displayed_on_public_homepage(): void
    {
        // Clear any previous records
        Review::query()->delete();
        Review::clearCache();

        $activeReview = Review::create([
            'name' => 'Nisha Singhal',
            'destination' => 'Tirthan Valley Exploration',
            'review' => 'Trout fishing, pristine pine forests and cozy wooden chalets made this unforgettable.',
            'rating' => 5,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $inactiveReview = Review::create([
            'name' => 'Hidden Ghost User',
            'destination' => 'Secret Cave',
            'review' => 'This review should not appear on the website.',
            'rating' => 1,
            'sort_order' => 2,
            'is_active' => false,
        ]);

        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Nisha Singhal');
        $response->assertSee('Tirthan Valley Exploration');
        $response->assertSee('Trout fishing, pristine pine forests');
        $response->assertDontSee('Hidden Ghost User');
        $response->assertDontSee('Secret Cave');
    }

    /**
     * Test that sidebar and bottom navigation in admin panel link to the Reviews tab.
     */
    public function test_sidebar_contains_reviews_navigation_tab(): void
    {
        $response = $this->withSession(['admin_authenticated' => true])
            ->get(route('admin.dashboard'));

        $response->assertOk();
        $response->assertSee(route('admin.reviews.index'));
        $response->assertSee('Reviews');
    }
}
