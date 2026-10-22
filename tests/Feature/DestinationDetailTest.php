<?php

namespace Tests\Feature;

use Tests\TestCase;

class DestinationDetailTest extends TestCase
{
    /**
     * Test that all destinations cards on the listing page render View Details buttons.
     */
    public function test_destinations_listing_contains_view_details_buttons_and_authentic_adi_kailash_details(): void
    {
        $response = $this->get(route('destinations'));

        $response->assertOk();
        $response->assertSee('View Details');
        $response->assertSee('Inquire Now');
        $response->assertSee('inquire-now', false);
        $response->assertSee('data-dest="Char Dham Yatra"', false);
        $response->assertSee('data-dest="Khaliya Top Trek"', false);
        $response->assertDontSee('Enquire Now');
        $response->assertSee(route('destinations.show', 'adi-kailash-om-parvat'));
        $response->assertSee(route('destinations.show', 'char-dham-yatra'));
        $response->assertSee('Char Dham Yatra 2026');
        $response->assertSee('11D / 10N');
        $response->assertSee('Haridwar to Haridwar');
        $response->assertDontSee('10D / 9N');
        $response->assertDontSee('VIP Darshan Assistance');
        $response->assertSee(route('destinations.show', 'khaliya-top-trek'));

        // Authentic Adi Kailash details on the card
        $response->assertSee('14,750 ft Parvati Sarovar &amp; Gauri Kund', false);
        $response->assertSee('Dharchula &amp; Vyas Valley, Uttarakhand', false);
        $response->assertSee('8D / 7N');
        $response->assertSee('Inner Line Permits &amp; 4x4 Bolero Included', false);
        $response->assertSee('Sacred Kalapani &amp; Vyas Gufa Darshan', false);
    }

    /**
     * Test that the Adi Kailash detail page renders authentic information and breadcrumbs.
     */
    public function test_adi_kailash_detail_page_loads_with_authentic_data_and_breadcrumb(): void
    {
        $response = $this->get(route('destinations.show', 'adi-kailash-om-parvat'));

        $response->assertOk();

        // Breadcrumb
        $response->assertSee('Destinations');
        $response->assertSee('Adi Kailash &amp; Om Parvat Yatra', false);
        $response->assertSee(route('destinations'));

        // Authentic specifics
        $response->assertSee('14,750 ft');
        $response->assertSee('Vyas Valley');
        $response->assertSee('Dharchula');
        $response->assertSee('Parvati Sarovar');
        $response->assertSee('Jolingkong');
        $response->assertSee('Nabi');
        $response->assertSee('Kalapani');

        // Detailed tabs/sections
        $response->assertSee('Key Highlights &amp; Sacred Landmarks', false);
        $response->assertSee('Detailed Expedition Itinerary');
        $response->assertDontSee('Inclusions &amp; Exclusions', false);
        $response->assertSee('Important Guidelines &amp; Essentials', false);
        $response->assertSee('Enquire for this Journey');
    }

    /**
     * The four supplied destinations keep only the details that were provided.
     */
    public function test_supplied_destination_details_replace_previous_copy(): void
    {
        $listing = $this->get(route('destinations'));

        $listing->assertOk();
        $listing->assertSee('Balati Bend');
        $listing->assertSee('Summit about 3,500 m');
        $listing->assertSee('100 to 130 km round trip');
        $listing->assertSee('Kareri Village base camp');
        $listing->assertSee('Trek to Pandavkholi');
        $listing->assertDontSee('Switzerland of India');
        $listing->assertDontSee('Birthi Waterfalls');
        $listing->assertDontSee('9D / 8N');

        $khaliya = $this->get(route('destinations.show', 'khaliya-top-trek'));
        $khaliya->assertOk();
        $khaliya->assertSee('Balati Bend');
        $khaliya->assertSee('Zero Point at ~4,000 meters');
        $khaliya->assertSee('Forest Entry Fee');
        $khaliya->assertSee('Avoid: The peak monsoon season from July to August');
        $khaliya->assertDontSee('Kathgodam to Munsyari');
        $khaliya->assertDontSee('Birthi waterfall');
        $khaliya->assertDontSee('Inner Line Permit');

        $milam = $this->get(route('destinations.show', 'milam-glacier-trek'));
        $milam->assertOk();
        $milam->assertSee('Munsiyari to Lilam');
        $milam->assertSee('Hardeol, Trishuli, and Rishi Pahar');
        $milam->assertSee('100 to 130 kilometers round trip');
        $milam->assertDontSee('13,800 ft');
        $milam->assertDontSee('Nanda Devi temple');

        $kareri = $this->get(route('destinations.show', 'kareri-lake-trek'));
        $kareri->assertOk();
        $kareri->assertSee('Nyund Nallah');
        $kareri->assertSee('Reoti / Riyoti campsite');
        $kareri->assertSee('Shiva and Shakti temple');
        $kareri->assertSee('little to no mobile network');
        $kareri->assertDontSee('Minkiani Peak');
        $kareri->assertDontSee('Starlit');

        $munsyari = $this->get(route('destinations.show', 'munsyari-kausani'));
        $munsyari->assertOk();
        $munsyari->assertSee('Stay at Dhudholi');
        $munsyari->assertSee('Pandavkholi');
        $munsyari->assertSee('Rudradhari Waterfall');
        $munsyari->assertSee('Chauli Ki Jali');
        $munsyari->assertSee('Mukteshwar Zero Point');
        $munsyari->assertDontSee('Switzerland of India');
        $munsyari->assertDontSee('Binsar');
        $munsyari->assertDontSee('7,200 ft');
    }

    /**
     * The Dalhousie and Dharamshala page uses the supplied 8-day itinerary.
     */
    public function test_dalhousie_dharamshala_uses_the_supplied_itinerary(): void
    {
        $response = $this->get(route('destinations.show', 'dalhousie-dharamshala'));

        $response->assertOk();
        $response->assertSee('Dalhousie &amp; Dharamshala — Mountains, Lakes &amp; Adventure', false);
        $response->assertSee('HIMACHAL PRADESH TOUR');
        $response->assertSee('8 Days');
        $response->assertSee('Price on Request');
        $response->assertSee('Enquire Now');
        $response->assertSee('View Itinerary');
        $response->assertSee('Kangra Fort');
        $response->assertSee('St. John in the Wilderness Church');
        $response->assertSee('12 km one way');
        $response->assertSee('Dharamshala War Memorial');
        $response->assertSee('Panchpula Waterfall');
        $response->assertSee('St. Patrick&#039;s Church', false);
        $response->assertSee('Lakshminarayan Temple');
        $response->assertSee('Golden Temple, Amritsar');
        $response->assertSee('Needs confirmation');
        $response->assertSee('Enquire About This Trip');
        $response->assertSee('Lunch is listed only on Day 1');
        $response->assertDontSee('6,800 ft');
        $response->assertDontSee('Dainkund');
        $response->assertDontSee('Pathankot');
        $response->assertDontSee('5D / 4N');
        $response->assertDontSee('All-inclusive customizable itinerary');
        $response->assertDontSee('Inner Line Permit');
    }

    /**
     * Test that Char Dham uses the supplied 2026 yatra details.
     */
    public function test_char_dham_yatra_uses_the_supplied_2026_details(): void
    {
        $response = $this->get(route('destinations.show', 'char-dham-yatra'));

        $response->assertOk();
        $response->assertSee('Char Dham Yatra 2026');
        $response->assertSee('10 Nights / 11 Days');
        $response->assertSee('Haridwar to Haridwar');
        $response->assertSee('Limited seats available');
        $response->assertSee('Kedarnath');
        $response->assertSee('Badrinath');
        $response->assertSee('Yamunotri');
        $response->assertSee('Gangotri');
        $response->assertSee('Haridwar → Barkot → Yamunotri → Uttarkashi');
        $response->assertSee('Sonprayag → Kedarnath → Sonprayag');
        $response->assertSee('Joshimath → Badrinath → Pipalkoti → Haridwar');
        $response->assertSee('Gangnani Kund');
        $response->assertSee('Kashi Vishwanath Temple');
        $response->assertSee('Tehri Dam');
        $response->assertSee('Dhari Devi Temple');
        $response->assertSee('Guptkashi Temple');
        $response->assertSee('Gauri Kund');
        $response->assertSee('Okhimath');
        $response->assertSee('Narsingh Devta Temple');
        $response->assertSee('Panch Prayag');
        $response->assertSee('Stay (Hotel/Camps)');
        $response->assertSee('Darshan Assistance');
        $response->assertSee('Trusted Planning');
        $response->assertSee('A journey to connect with the divine.');
        $response->assertDontSee('10D / 9N');
        $response->assertDontSee('11,755 ft');
        $response->assertDontSee('Kempty Falls');
        $response->assertDontSee('VIP');
        $response->assertDontSee('helicopter');
        $response->assertDontSee('Tapt Kund');
        $response->assertDontSee('Chopta');
        $response->assertDontSee('Mana village');
        $response->assertDontSee('All-inclusive customizable itinerary');
        $response->assertDontSee('Inner Line Permit');
    }

    /**
     * Harihar Fort and Harishchandragad keep the supplied trek sheet and drop the old copy.
     */
    public function test_harihar_fort_uses_the_supplied_trek_sheet(): void
    {
        $listing = $this->get(route('destinations'));

        $listing->assertOk();
        $listing->assertSee('2D / 2N');
        $listing->assertSee('Nashik &amp; Ahmednagar, Maharashtra', false);
        $listing->assertSee('Vadodara to Vadodara');
        $listing->assertDontSee('Certified Sahyadri Leaders');
        $listing->assertDontSee('amphitheater');

        $response = $this->get(route('destinations.show', 'harihar-fort-trek'));

        $response->assertOk();
        $response->assertSee('2 Days / 2 Nights');
        $response->assertSee('Vadodara');
        $response->assertSee('Nirgudpada');
        $response->assertSee('3,676 ft');
        $response->assertSee('4,665 ft');
        $response->assertSee('Konkan Kada');
        $response->assertSee('Taramati Peak');
        $response->assertSee('Kedareshwar Cave');
        $response->assertSee('Harishchandreshwar Temple');
        $response->assertSee('1 breakfast');
        $response->assertSee('2 lunches');
        $response->assertSee('Forest entry charges (if applicable)');
        $response->assertSee('Mineral water bottles');
        $response->assertSee('Alcohol and smoking are strictly prohibited.');
        $response->assertSee('05:00 AM – 06:00 AM arrival at Vadodara.');
        $response->assertDontSee('Harshewadi');
        $response->assertDontSee('Mumbai / Pune');
        $response->assertDontSee('Yadava');
        $response->assertDontSee('8 – 20 Travellers');
        $response->assertDontSee('All-inclusive customizable itinerary');
        $response->assertDontSee('100% Inner Line Permit');
        $response->assertDontSee('Oxygen Support');
    }

    /**
     * Active destinations open detail pages and have View Details buttons.
     */
    public function test_active_destinations_open_detail_pages_and_have_no_coming_soon(): void
    {
        $listing = $this->get(route('destinations'));

        $listing->assertOk();
        $listing->assertDontSee('class="coming-soon-title"', false);
        $listing->assertSee('Girnar Hill Trek &amp; Junagadh Exploration', false);
        $listing->assertSee(route('destinations.show', 'girnar-pilgrimage-trek'), false);
        $listing->assertSee(route('destinations.show', 'mount-abu-eco-getaway'), false);
        $listing->assertSee(route('destinations.show', 'dang-forest-circuit'), false);
        $listing->assertSee(route('destinations.show', 'dediapada-wilderness-trek'), false);
        $listing->assertSee(route('destinations.show', 'gateway-to-malvan'), false);

        $this->get(route('destinations.show', 'girnar-pilgrimage-trek'))
            ->assertOk();

        $this->get(route('destinations.show', 'mount-abu-eco-getaway'))
            ->assertOk();

        $this->get(route('destinations.show', 'dang-forest-circuit'))
            ->assertOk();

        $this->get(route('destinations.show', 'dediapada-wilderness-trek'))
            ->assertOk();

        $this->get(route('destinations.show', 'gateway-to-malvan'))
            ->assertOk();
    }

    /**
     * Test that Mount Abu uses the authentic details from the brochure.
     */
    public function test_mount_abu_detail_page_loads_with_authentic_data_and_brochure_details(): void
    {
        $listing = $this->get(route('destinations'));
        $listing->assertOk();
        $listing->assertSee('3D / 2N');
        $listing->assertSee('Dilwara Jain Temples &amp; Nakki Lake Boating', false);
        $listing->assertSee('Guru Shikhar Sunrise (Highest Peak in Aravallis)');
        $listing->assertDontSee('Gaumukh temple');
        $listing->assertDontSee('Resort Party with Night DJ &amp; Bonfire', false);

        $response = $this->get(route('destinations.show', 'mount-abu-eco-getaway'));
        $response->assertOk();
        $response->assertSee('Gateway to Mount Abu — Eco Getaway &amp; Heritage Retreat', false);
        $response->assertSee('3D / 2N');
        $response->assertSee('3 Days / 2 Nights (Gateway to Mount Abu)');
        $response->assertSee('Guru Shikhar');
        $response->assertSee('5,650 ft');
        $response->assertSee('Dilwara Jain Temples');
        $response->assertSee('Nakki Lake');
        $response->assertSee('Toad Rock');
        $response->assertSee('Sunset Point');
        $response->assertSee('Peace Park');
        $response->assertSee('Achalgarh Fort');
        $response->assertSee('Achaleshwar Mahadev Temple');
        $response->assertSee('Trevor&#039;s Tank', false);
        $response->assertSee('Mount Abu Wildlife Sanctuary');
        $response->assertSee("What's Included &amp; Excluded", false);
        $response->assertSee('2 Nights’ Accommodation in Mount Abu');
        $response->assertSee('3 Breakfasts');
        $response->assertSee('2 Dinners');
        $response->assertSee('Cultural Etiquette &amp; Travel Tips', false);
        $response->assertSee('Responsible Eco-Tourism Reminders');
        $response->assertDontSee('Gaumukh temple');
        $response->assertDontSee('Resort party with Night DJ &amp; bonfire', false);
    }

    /**
     * Test that non-existent destination returns 404.
     */
    public function test_unknown_destination_returns_404(): void
    {
        $response = $this->get('/destinations/unknown-trek-slug');

        $response->assertNotFound();
    }

    /**
     * Test that gallery cards show "View in {Destination}" and render the 800x600 preview modal.
     */
    public function test_destination_detail_gallery_has_view_in_destination_and_preview_modal(): void
    {
        $response = $this->get(route('destinations.show', 'adi-kailash-om-parvat'));

        $response->assertOk();
        $response->assertSee('dest-gallery-preview-modal');
        $response->assertSee('dest-gallery-preview-dialog');
        $response->assertSee('View in Adi Kailash &amp; Om Parvat Yatra', false);
        $response->assertDontSee('View in Hero Darshan');
        $response->assertDontSee('Hero Darshan');
    }

    /**
     * Test that the maintenance cache-clear route and build asset fallback route work.
     */
    public function test_maintenance_clear_cache_and_build_asset_route(): void
    {
        $response = $this->get(route('maintenance.clear-cache', 'trekora-clear-2026'));
        $response->assertOk();
        $response->assertSee('Explore Trekora: All caches cleared successfully!');

        $manifestResponse = $this->get('/build/manifest.json');
        $manifestResponse->assertOk();
        $manifestResponse->assertHeader('Content-Type', 'application/json');
    }
}
