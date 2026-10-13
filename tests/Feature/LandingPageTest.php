<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /**
     * Test that the landing page loads successfully with all core components.
     */
    public function test_landing_page_loads_with_brand_and_components(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Explore');
        $response->assertSee('Trekora');
        $response->assertSee('images/explore-trekora.png');
        $response->assertSee('images/explore-trekora-favicon-32.png', false);
        $response->assertSee('images/explore-trekora-favicon-192.png', false);
        $response->assertSee('favicon.ico', false);
        $response->assertSee('Your journey to');
        $response->assertSee('Popular destinations');
        $response->assertSee('Ticket booking');
        $response->assertSee('© 2026 Explore Trekora');
        $response->assertSee('Popular Destinations');
        $response->assertSee(route('destinations.show', 'adi-kailash-om-parvat', absolute: false), false);
        $response->assertSee(route('destinations.show', 'munsyari-kausani', absolute: false), false);
        $response->assertSee(route('destinations.show', 'dalhousie-dharamshala', absolute: false), false);
        $response->assertSee('Mount Abu · Coming Soon', false);
        $response->assertDontSee(route('destinations.show', 'mount-abu-eco-getaway', absolute: false), false);
        $response->assertSee(route('destinations.show', 'khaliya-top-trek', absolute: false), false);
    }

    /**
     * Test that the navbar contains the requested options and dropdown items.
     */
    public function test_navbar_contains_expected_menu_and_dropdown_options(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Main top-level navbar items
        $response->assertSee('Home');
        $response->assertSee('Destinations');
        $response->assertSee('Tour Packages');
        $response->assertSee('Travel Guides');
        $response->assertSee('About Us');
        $response->assertSee('Explore Destinations');
        $response->assertSee('class="start-exploring"', false);
        $response->assertSee('Explore all destinations');
        $response->assertSee('All tour packages');
        $response->assertSee('class="drawer-section-cta"', false);
        $response->assertDontSee('sublink-desc', false);
        $response->assertDontSee('sublink-icon', false);

        // Destinations dropdown items
        $response->assertSee('Adikailash &amp; Om Parvat Yatra', false);
        $response->assertSee('Munsyari &amp; Kausani', false);
        $response->assertSee('Milam Glacier Trek');
        $response->assertSee('Khaliya Top Trek');
        $response->assertSee('Dalhousie &amp; Dharamshala', false);
        $response->assertSee('Kareri Lake Trek');
        $response->assertSee('Hariharfort &amp; Harishchandragadh', false);
        $response->assertSee('Girnar');
        $response->assertSee('Mount Abu');
        $response->assertSee('Dang');
        $response->assertSee('Dediyapada');
        $response->assertSee('Chardham Yatra');
        $response->assertSee(route('destinations.show', 'adi-kailash-om-parvat'), false);
        $response->assertSee(route('destinations.show', 'char-dham-yatra'), false);
        $response->assertSee(route('destinations.show', 'khaliya-top-trek'), false);
        $response->assertSee('Girnar · Coming Soon', false);
        $response->assertSee('Dang · Coming Soon', false);
        $response->assertSee('Dediyapada · Coming Soon', false);
        $response->assertDontSee(route('destinations.show', 'mount-abu-eco-getaway'), false);
        $response->assertDontSee(route('destinations.show', 'dediapada-wilderness-trek'), false);
        $response->assertDontSee(route('tour-packages.show', 'girnar-pilgrimage-trek'), false);

        // Tour Packages dropdown items open the package page at that group.
        $response->assertSee('Cultural Tours');
        $response->assertSee('Honeymoon Packages');
        $response->assertSee('Adventure Tours');
        $response->assertSee('Family Tours');
        $response->assertSee('Weekend Getaways');
        $response->assertSee(route('tour-packages').'#pkg-cultural', false);
        $response->assertSee(route('tour-packages').'#pkg-honeymoon', false);
        $response->assertSee(route('tour-packages').'#pkg-adventure', false);
        $response->assertSee(route('tour-packages').'#pkg-family', false);
        $response->assertSee(route('tour-packages').'#pkg-weekend', false);
        $response->assertSee('href="'.route('tour-packages').'"', false);
    }

    /**
     * Test that named routes for primary navigation exist and redirect to corresponding sections.
     */
    public function test_navigation_named_routes_redirect_to_sections(): void
    {
        $this->get(route('destinations'))->assertOk();
        $this->get(route('tour-packages'))->assertOk();
        $this->get(route('travel-guides'))->assertOk()->assertSee('About Our Tour Guides')->assertDontSee('Coming Soon');
        $this->get(route('about-us'))->assertOk();
        $this->get(route('terms'))->assertOk();
        $this->get(route('copyright'))->assertOk();
    }

    /**
     * Test that the Copyright Policy page uses the supplied legal text.
     */
    public function test_copyright_page_shows_the_supplied_policy(): void
    {
        $response = $this->get(route('copyright'));

        $response->assertOk();
        $response->assertSee('Copyright');
        $response->assertSee('Copyright Policy');
        $response->assertSee('Last updated: January 20th, 2016');
        $response->assertSee('Explore Trekora Adventure Tours Pvt. Ltd.');
        $response->assertSee('1. Ownership of Explore Trekora Content');
        $response->assertSee('2.1 Original Content Requirement');
        $response->assertSee('2.3 Media Ownership (Strict Enforcement)');
        $response->assertSee('6.1 For Copyright Claimants');
        $response->assertSee('7. Enforcement Rights');
        $response->assertSee('6 months after the tour goes live');

        $this->get('/')->assertSee(route('copyright', absolute: false), false);
    }

    /**
     * Test that Find trips opens the selected destination's detail page.
     */
    public function test_find_trips_opens_the_destination_detail_page(): void
    {
        $home = $this->get('/');

        $home->assertOk();
        $home->assertSee('action="'.route('destinations').'"', false);
        $home->assertSee('value="adi-kailash-om-parvat"', false);
        $home->assertDontSee("alert('Searching handpicked itineraries");

        $search = $this->get(route('destinations', [
            'destination' => 'adi-kailash-om-parvat',
            'travelers' => '2 adults',
            'travel_date' => '2026-10-17',
        ]));

        $search->assertRedirect(route('destinations.show', [
            'slug' => 'adi-kailash-om-parvat',
            'travel_date' => '2026-10-17',
            'travelers' => '2 adults',
        ]));

        $detail = $this->get(route('destinations.show', [
            'slug' => 'adi-kailash-om-parvat',
            'travelers' => '2 adults',
            'travel_date' => '2026-10-17',
        ]));

        $detail->assertOk();
        $detail->assertSee('Adi Kailash &amp; Om Parvat Yatra', false);
        $detail->assertSee('2026-10-17', false);
        $detail->assertDontSee('Best match for');

        $home->assertDontSee('From City');
        $home->assertDontSee('>Canada<', false);
        $home->assertSee('name="destination"', false);
        $home->assertSee('https://www.facebook.com/profile.php?id=61591155821513', false);
        $home->assertSee('https://www.instagram.com/explore_trekora?utm_source=ig_web_button_share_sheet&amp;rpxt=ZDNlZDc0MzIxNw==', false);
    }

    /**
     * Test that the Terms & Conditions page uses the supplied legal text.
     */
    public function test_terms_page_shows_the_supplied_terms(): void
    {
        $response = $this->get(route('terms'));

        $response->assertOk();
        $response->assertSee('Legal Terms');
        $response->assertSee('Terms &amp; Conditions', false);
        $response->assertSee('Last updated: April 16, 2025');
        $response->assertSee('Explore Trekora Travel Solutions Pvt Ltd');
        $response->assertSee('53 Take Off Private Limited');
        $response->assertSee('1. DEFINITIONS');
        $response->assertSee('PART A: DIRECT EXPERIENCE / ACTIVITY BOOKINGS');
        $response->assertSee('PART B: OPERATED TOUR PACKAGES');
        $response->assertSee('Courts in Jaipur, Rajasthan have exclusive jurisdiction.');
        $response->assertSee('Courts in Dubai, UAE have exclusive jurisdiction for Explore Trekora FZCO bookings');
        $response->assertSee('ACKNOWLEDGMENT');
        $response->assertDontSee('October 20, 2024');

        $this->get('/')->assertSee(route('terms', absolute: false), false);
    }

    /**
     * Test that the About Us page loads and displays all required sections.
     */
    public function test_about_us_page_loads_and_displays_all_sections(): void
    {
        $response = $this->get(route('about-us'));

        $response->assertOk();

        // 1. Hero
        $response->assertSee('More than a journey.');
        $response->assertSee('A story worth remembering.');
        $response->assertSee('About Us');

        // 2. Who We Are
        $response->assertSee('Who We Are');
        $response->assertSee('Meaningful travel experiences and destination discovery.');

        // 3. Our Vision
        $response->assertSee('OUR VISION');
        $response->assertSee('Our Vision Is to Redefine the Way You Travel.');

        // 4. Our Mission
        $response->assertSee('OUR MISSION');
        $response->assertSee('Making Journeys Meaningful &amp; Easier to Discover.', false);

        // 5. What We Offer
        $response->assertSee('What We Offer');
        $response->assertSee('Adventure &amp; Trekking', false);
        $response->assertSee('Cultural &amp; Pilgrimage Tours', false);
        $response->assertSee('Honeymoon Getaways');
        $response->assertSee('Family Holiday Packages');
        $response->assertSee('Weekend Nature Escapes');

        // 6. Travel Philosophy
        $response->assertSee('Our Travel Philosophy');
        $response->assertSee('Curiosity');
        $response->assertSee('Culture');
        $response->assertSee('Nature');
        $response->assertSee('Lasting Memories');

        // 7. Why Explore Trekora?
        $response->assertSee('Why Explore Trekora?');
        $response->assertSee('Thoughtfully Curated Trails');
        $response->assertSee('Authentic Local Insights');
        $response->assertSee('Safety &amp; Preparation Focus', false);
        $response->assertSee('Transparent &amp; Caring Support', false);

        // 8. Final CTA
        $response->assertSee('The world is waiting.');
        $response->assertSee('Where will you go?');
        $response->assertSee(route('destinations'));
        $response->assertSee(route('tour-packages'));
    }

    /**
     * Test that the All Destinations page loads and displays destinations.
     */
    public function test_all_destinations_page_loads_and_displays_destinations(): void
    {
        $response = $this->get(route('destinations'));

        $response->assertOk();
        $response->assertSee('All Destinations &amp; Trails', false);
        $response->assertSee('Adi Kailash &amp; Om Parvat', false);
        $response->assertSee('Char Dham Yatra');
        $response->assertSee('Khaliya Top Trek');
        $response->assertSee('Milam Glacier Trek');
        $response->assertSee('Kareri Lake Trek');
        $response->assertSee('Harihar Fort');
        $response->assertSee('Girnar');
        $response->assertSee('Mount Abu');
        $response->assertSee('id="dest-inquire-modal"', false);
        $response->assertSee('Enquire now');
        $response->assertSee('Submit now');
    }

    /**
     * Test that the Explore India cards replace the old country list and link to destinations.
     */
    public function test_explore_india_section_lists_indian_states(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Explore India');
        $response->assertSee('Find your kind of escape.');
        $response->assertSee('From sacred Himalayan journeys to peaceful hill stations, discover experiences made for every kind of traveller.');
        $response->assertSee('Uttarakhand');
        $response->assertSee('Himachal Pradesh');
        $response->assertSee('Gujarat');
        $response->assertSee('Rajasthan');
        $response->assertSee('Himalayan Escapes');
        $response->assertSee('Mountain Holidays');
        $response->assertSee('Culture &amp; Pilgrimage', false);
        $response->assertSee('Weekend Escapes');
        $response->assertSee('state-uttarakhand.jpg');
        $response->assertSee('state-himachal.jpg');
        $response->assertSee('state-gujarat.jpg');
        $response->assertSee('state-rajasthan.jpg');
        $response->assertDontSee('Available countries');
        $response->assertDontSee('Urban escapes, city-hopping adventures');
        $response->assertDontSee('Fast visa assistance');
        $response->assertDontSee('country-canada.jpg');
    }

    /**
     * Test that the Popular Destinations section showcases the six Indian destinations.
     */
    public function test_popular_destinations_section_contains_six_indian_destinations(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Popular destinations');
        $response->assertSee("Discover India's wild beauty and hidden gems.", false);
        $response->assertSee('From sacred Himalayan journeys and breathtaking mountain treks to peaceful hill stations');

        // Card 1
        $response->assertSee('CULTURAL TOURS');
        $response->assertSee('Adi Kailash &amp; Om Parvat', false);
        $response->assertSee('images/trips/adi-kailash-om-parvat/1.jpg');

        // Card 2
        $response->assertSee('FAMILY GETAWAYS');
        $response->assertSee('Munsyari &amp; Kausani', false);
        $response->assertSee('images/trips/munsyari-kausani/1.jpg');

        // Card 3
        $response->assertSee('ADVENTURE TREKS');
        $response->assertSee('Khaliya Top Trek');
        $response->assertSee('images/trips/khaliya-top-trek/1.jpg');

        // Card 4
        $response->assertSee('Milam Glacier Trek');
        $response->assertSee('images/trips/milam-glacier-trek/1.jpg');

        // Card 5
        $response->assertSee('WEEKEND GETAWAYS');
        $response->assertSee('Mount Abu');
        $response->assertSee('images/trips/mount-abu-eco-getaway/1.jpg');

        // Card 6
        $response->assertSee('HIMACHAL PRADESH TOUR');
        $response->assertSee('Dalhousie &amp; Dharamshala', false);
        $response->assertSee('images/trips/dalhousie-dharamshala/3.jpg');

        // Bottom CTA
        $response->assertSee('Explore All Destinations');

        // Verify foreign destinations are removed
        $response->assertDontSee('Maldives escape');
        $response->assertDontSee('Paris weekend');
        $response->assertDontSee('Andaman islands');
        $response->assertDontSee('dest-maldives.jpg');
        $response->assertDontSee('dest-europe.jpg');
        $response->assertDontSee('dest-paris.jpg');
        $response->assertDontSee('dest-andaman.jpg');
    }

    /**
     * Tour package groups live on the tour packages page, not the home page.
     */
    public function test_tour_packages_page_groups_the_requested_cards(): void
    {
        $home = $this->get('/');
        $home->assertOk();
        $home->assertDontSee('id="pkg-cultural"', false);
        $home->assertDontSee('class="pkg-title"', false);

        $response = $this->get(route('tour-packages'));

        $response->assertOk();
        $response->assertSee('Explore all packages.');
        $response->assertSee('id="pkg-cultural"', false);
        $response->assertSee('id="pkg-honeymoon"', false);
        $response->assertSee('id="pkg-adventure"', false);
        $response->assertSee('id="pkg-family"', false);
        $response->assertSee('id="pkg-weekend"', false);
        $response->assertSee('class="pkg-title"', false);
        $response->assertDontSee('Haridwar &amp; Rishikesh', false);
        $response->assertSee('Maharashtra Hill station');
        $response->assertSee('Harishchandragad');
        $response->assertSee('Harihar Fort');
        $response->assertDontSee('destination=Haridwar', false);
        $response->assertSee('#contact', false);
        $response->assertSee('Girnar Hill Trek &amp; Junagadh Exploration', false);
        $response->assertSee(route('tour-packages.show', 'girnar-pilgrimage-trek', absolute: false), false);
        $response->assertSee(route('tour-packages.show', 'gateway-to-malvan', absolute: false), false);
        $response->assertSee(route('tour-packages.show', 'harihar-fort-trek', absolute: false), false);
        $response->assertSee('class="nav-drop-btn active"', false);
        $response->assertSee(route('destinations.show', 'girnar-pilgrimage-trek', absolute: false), false);

        $detail = $this->get(route('tour-packages.show', 'girnar-pilgrimage-trek'));
        $detail->assertOk();
    }

    /**
     * Test that the scroll route lists every destination the plane reveals.
     */
    public function test_route_flight_lists_thirteen_destinations(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('id="route-path"', false);
        $response->assertSee('id="route-flight"', false);
        $response->assertSee('id="itinerary-ready"', false);
        $response->assertSee('id="route-stops"', false);
        $response->assertSee('Adikailash &amp; Om Parvat Yatra', false);
        $response->assertSee('Chardham Yatra');
        $response->assertSee('Munsyari &amp; Kausani', false);
        $response->assertSee('Milam Glacier Trek');
        $response->assertSee('Khaliya Top Trek');
        $response->assertSee('Dalhousie &amp; Dharamshala', false);
        $response->assertSee('Kareri Lake Trek');
        $response->assertSee('Hariharfort &amp; Harishchandragadh', false);
        $response->assertSee('Girnar');
        $response->assertSee('Mount Abu');
        $response->assertSee('Dang');
        $response->assertSee('Dediyapada');
        $response->assertSee('Gateway to Malvan');
    }

    /**
     * Test that the FAQ component renders all five requested questions and accordion attributes.
     */
    public function test_faq_component_renders_five_trekora_questions(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Ask question');
        $response->assertSee('Answers before you pack');
        $response->assertSee('id="faq-accordion"', false);
        $response->assertSee('name="trekora-faq"', false);

        // 5 questions
        $response->assertSee('What is included in an Explore Trekora package?');
        $response->assertSee('How can I book a tour package?');
        $response->assertSee('Can I customize my travel itinerary?');
        $response->assertSee('Are your trekking packages suitable for beginners?');
        $response->assertSee('What should I carry for my trip?');

        // Sample answers
        $response->assertSee('Our tour packages may include accommodation, transportation, sightseeing');
        $response->assertSee('Explore our destinations, choose your preferred tour package');
        $response->assertSee('We can discuss itinerary preferences based on your chosen destination');
        $response->assertSee('Some treks may be suitable for beginners');
        $response->assertSee('Pack comfortable clothing, suitable footwear, personal essentials');
    }

    /**
     * Test that the stories/reviews section renders with 10 rotating photos and Indian trek reviews.
     */
    public function test_stories_section_renders_ten_rotating_photos_and_reviews(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('id="stories"', false);
        $response->assertSee('story-main-img');
        $response->assertSee('story-1.jpg');
        $response->assertSee('Story 1');
        $response->assertSee('Story 10');

        // Check that 10 story images exist on disk
        for ($i = 1; $i <= 10; $i++) {
            $this->assertFileExists(public_path("images/story-{$i}.jpg"));
        }
    }

    /**
     * Test that the process steps changed while the success story card stayed intact.
     */
    public function test_how_it_works_steps_keep_the_success_story_card(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('HOW IT WORKS');
        $response->assertSee('Your journey, made simple.');
        $response->assertSee('Choose Your Destination');
        $response->assertSee('Explore our cultural tours, Himalayan treks, family holidays and weekend getaways.');
        $response->assertSee('Plan Your Trip');
        $response->assertSee('Choose your preferred travel dates and discuss your itinerary, group size and trip requirements with our team.');
        $response->assertSee('Enjoy the Journey');
        $response->assertSee('Get ready to discover beautiful landscapes, local culture and unforgettable travel experiences.');
        $response->assertSee('process-lake.jpg');
        $response->assertSee('Success story');
        $response->assertSee('2+ years of trips travelers trust');
        $response->assertSee('4');
        $response->assertSee('40+');
        $response->assertSee('100+');
        $response->assertSee('Team members');
        $response->assertSee('Trips completed');
        $response->assertSee('Verified reviews');
        $response->assertDontSee('25 years of trips');
        $response->assertDontSee('Industry awards');
        $response->assertDontSee('Where wanderlust meets reality');
        $response->assertDontSee('Expert planning');
        $response->assertDontSee('Smooth entry');
        $response->assertDontSee('Passport &amp; flight support', false);
    }

    /**
     * Test that Discover Our Story links to about-us and Explore India cards link to specific packages.
     */
    public function test_discover_our_story_and_explore_package_cards_link_properly(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee(route('about-us'));
        $response->assertSee(route('destinations').'#dest-girnar-pilgrimage-trek', false);
        $response->assertSee(route('destinations').'#dest-mount-abu-eco-getaway', false);
        $response->assertDontSee(route('tour-packages.show', 'girnar-pilgrimage-trek'), false);
        $response->assertDontSee(route('tour-packages.show', 'mount-abu-eco-getaway'), false);
        $response->assertSee(route('tour-packages.show', 'dalhousie-dharamshala'));
        $response->assertSee(route('tour-packages.show', 'adi-kailash-om-parvat'));
    }
}
