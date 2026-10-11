<?php

namespace App\Services;

class DestinationRepository
{
    /**
     * Get all destinations data keyed by slug.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            'adi-kailash-om-parvat' => [
                'slug' => 'adi-kailash-om-parvat',
                'title' => 'Adi Kailash & Om Parvat Yatra',
                'enquiry_key' => 'Adi Kailash & Om Parvat',
                'category' => 'Sacred Pilgrimage',
                'category_tag' => 'tag-sacred',
                'duration' => '8D / 7N',
                'duration_full' => '8 Days / 7 Nights (Option 2: Delhi 7N/8D · Option 3: Dharchula 4N/5D)',
                'location' => 'Pithoragarh, Dharchula & Vyas Valley, Uttarakhand',
                'location_short' => 'Dharchula, Pithoragarh',
                'altitude' => '14,750 ft',
                'altitude_full' => '14,750 ft (Parvati Sarovar & Gauri Kund)',
                'difficulty' => 'Moderate (4x4 Safari with Light High-Altitude Walks)',
                'best_season' => 'May – June & September – October',
                'starting_point' => 'Kathgodam / Pantnagar / Dharchula',
                'group_size' => '4 – 5 Persons per 4x4 Bolero',
                'image' => 'images/trips/adi-kailash-om-parvat/1.jpg',
                'gallery' => self::tripGallery('adi-kailash-om-parvat', 'Adi Kailash & Om Parvat Yatra'),
                'gallery_heading' => 'Sacred Yatra Gallery (5 Authentic Photographs)',
                'gallery_intro' => 'Original on-ground photography captured across Pithoragarh, Dharchula, and the Vyas Valley:',
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Journey through the sacred Vyas Valley to the revered abode of Lord Shiva, miraculous Om Parvat, and the tranquil holy waters of Parvati Sarovar.',
                'card_desc' => 'Venture to Adi Kailash (Abode of Shiva & Parvati), miraculous Om Parvat, Parvati Sarovar, and 22 sacred landmarks with dedicated 4x4 Bolero & full medical support.',
                'perks' => [
                    'Om Parvat, Adi Kailash & Parvati Sarovar',
                    '22 Sacred Sightseeing Places Included',
                    'Dedicated 4x4 Bolero (Only 4-5 Pax/Vehicle)',
                    'Oxygen Cylinder, Oxy-Meter & Medical Kit',
                ],
                'overview_paragraphs' => [
                    'Adi Kailash & Om Parvat Yatra is a sacred pilgrimage in the high Himalayas of Pithoragarh district, Kumaon, Uttarakhand. Adi Kailash is revered as one of the sacred Panch Kailash and the divine earthly abode of Lord Shiva and Goddess Parvati. Om Parvat is a strange and divine creation of nature near Mount Kailash & Adi Kailash, showcasing a naturally formed snow \'ॐ\' on its dark mountain face.',
                    'Earlier, pilgrims had to trek for more than 200 km to perform the Adi Kailash & Om Parvat Yatra. Now the Government has developed a new border road with BRO (Border Roads Organisation), reducing the optional trekking portion to just 2 to 7 km. Beyond Dharchula, rugged mountain roads are traversed in dedicated 4x4 Bolero campers with strictly 4 to 5 persons per vehicle for comfort.',
                    'The pilgrimage covers 22 sacred landmarks across Kumaon and Vyas Valley, including Parvati Sarovar & Shiv Temple, Gauri Kund, Parvati Mukut, Parvati Nabhi Parvat (Nabhidhang), Shesh Nag Parvat, Ved Vyas Gufa, Kali Mandir (Kalapani origin of Kali River), Jageshwar Dham (250+ temples), Golu Mandir (Temple of Justice), Kainchi Dham (Neem Karoli Baba Ashram), and Patal Bhuvaneshwar cave.',
                ],
                'places_seen_heading' => '22 Places We See in Adi Kailash & Om Parvat Yatra',
                'places_seen' => [
                    [
                        'name' => 'Adi Kailash',
                        'desc' => 'One of the Panch Kailash & Abode of Shiva & Parvati.',
                        'badge' => 'Panch Kailash',
                    ],
                    [
                        'name' => 'Om Parvat',
                        'desc' => 'A strange creation of Divine Nature near Shiva’s Place – Mount Kailash & Adi Kailash with naturally inscribed snow \'ॐ\'.',
                        'badge' => 'Divine Miracle',
                    ],
                    [
                        'name' => 'Parvati Sarovar & Shiv Temple',
                        'desc' => 'Located in Adi Kailash on the side of Parvati Sarovar. The idol of Shiv Parvati is emplaced in the temple in a quite decorative manner.',
                        'badge' => 'Holy Lake & Shrine',
                    ],
                    [
                        'name' => 'Gauri Kund',
                        'desc' => 'Offers mesmerizing reflection of the holy Adi Kailash Parvat at its foot; believed to be closely related to Mata Parvati as she used to bathe here.',
                        'badge' => 'Sacred Kund',
                    ],
                    [
                        'name' => 'Parvati Mukut',
                        'desc' => 'A long stone-like structure that stands together and forms the shape of a Mukut (crown) of Goddess Parvati.',
                        'badge' => 'Natural Crown',
                    ],
                    [
                        'name' => 'Parvati Nabhi Parvat',
                        'desc' => 'As the name suggests, this mountain is believed to be the belly / navel (Nabhi) of Mata Parvati, from which the name of Nabhidhang is derived.',
                        'badge' => 'Nabhidhang',
                    ],
                    [
                        'name' => 'Shesh Nag Parvat',
                        'desc' => 'Located on the way to Om Parvat; the mountain forms the shape of Nag (Serpent God of Snake always seen with Lord Shiva).',
                        'badge' => 'Sacred Serpent',
                    ],
                    [
                        'name' => 'Ved Vyas Gufa (Cave)',
                        'desc' => 'Where Vyas Muni (Maharishi Ved Vyas) dictated the epic Mahabharata to Lord Ganesha.',
                        'badge' => 'Historic Cave',
                    ],
                    [
                        'name' => 'Kali Mandir (Kalapani)',
                        'desc' => 'Sacred Kali Mandir from where the holy Kali River originates, located near Gunji in Vyas Valley.',
                        'badge' => 'River Origin',
                    ],
                    [
                        'name' => 'The Manokamana Temple',
                        'desc' => 'A wooden temple built in the Pagoda style of architecture in Nabi Village, dedicated to Lord Shiva.',
                        'badge' => 'Pagoda Temple',
                    ],
                    [
                        'name' => 'Bhim ki Kheti',
                        'desc' => 'Believed to be the place where Bhim used to grow crops during the Agyatvas of Pandavas during Mahabharata.',
                        'badge' => 'Mahabharata Site',
                    ],
                    [
                        'name' => 'Pandav Parvat & Pandav Fort',
                        'desc' => 'Sacred mountain and fort where locals believe the Pandavas stayed disguised during their Agyatvas.',
                        'badge' => 'Pandava Heritage',
                    ],
                    [
                        'name' => 'Kunti Parvat & Brahma Parvat',
                        'desc' => 'Sacred Himalayan peaks named after Mata Kunti (mother of five Pandavas) and Lord Brahma, located near Adi Kailash.',
                        'badge' => 'Divine Summits',
                    ],
                    [
                        'name' => 'Jageshwar Dham',
                        'desc' => 'Historical religious site consisting of more than 250 ancient stone temples, mostly dedicated to Lord Shiva.',
                        'badge' => '250+ Temples',
                    ],
                    [
                        'name' => 'Golu Mandir (Chitai)',
                        'desc' => 'A unique temple in India, popularly known as the Temple of Justice (Golu Devta).',
                        'badge' => 'Temple of Justice',
                    ],
                    [
                        'name' => 'Patal Bhuvaneshwar (Patal Bhuneshwar)',
                        'desc' => 'Mystical cave believed to open at Mt Kailash; pilgrims praying here receive blessings equal to Chota Char Dham; Pandav tapasya site.',
                        'badge' => 'Mystical Cave',
                    ],
                    [
                        'name' => 'Kainchi Dham',
                        'desc' => 'Neem Karoli Baba Ashram, a place of great spiritual significance and immense tranquility.',
                        'badge' => 'Neem Karoli Baba',
                    ],
                    [
                        'name' => 'Bhim Tal',
                        'desc' => 'Scenic mountain lake made by Bhim (one of the five Pandavas).',
                        'badge' => 'Sacred Lake',
                    ],
                    [
                        'name' => 'Napalchu Heritage Home Stay',
                        'desc' => 'A unique opportunity to interact with local Bhotia culture and live at their traditional homes in Napalchu, Gunji, Nabi & Kuti, stopping migration and building local employment.',
                        'badge' => 'Village Culture',
                    ],
                ],
                'support_system' => [
                    [
                        'title' => 'Oxygen Cylinder',
                        'desc' => 'Stationed at each staying place beyond Dharchula for high-altitude emergency safety.',
                        'icon' => '🩺',
                    ],
                    [
                        'title' => 'Oxygen Can',
                        'desc' => 'Portable oxygen canisters provided for high-altitude viewing walks.',
                        'icon' => '💨',
                    ],
                    [
                        'title' => 'Oxy-Meter',
                        'desc' => 'Daily pulse oximeter SpO2 monitoring for every yatri.',
                        'icon' => '💓',
                    ],
                    [
                        'title' => 'Walkie-Talkie',
                        'desc' => 'Dedicated radio walkie-talkies for convoy drivers and trek managers in remote areas.',
                        'icon' => '📻',
                    ],
                    [
                        'title' => 'Infrared Thermometer',
                        'desc' => 'Contactless temperature checks and regular vitals monitoring throughout the yatra.',
                        'icon' => '🌡️',
                    ],
                    [
                        'title' => 'Basic Medical Kit',
                        'desc' => 'Emergency first aid medical kit and 24x7 on-ground assistance.',
                        'icon' => '🩹',
                    ],
                ],
                'highlights' => [
                    [
                        'icon' => '🏔️',
                        'title' => 'Adi Kailash & Om Parvat Darshan',
                        'desc' => 'Darshan of holy Adi Kailash (Panch Kailash & Abode of Shiva & Parvati) and miraculous snow \'ॐ\' on Om Parvat.',
                    ],
                    [
                        'icon' => '🌊',
                        'title' => 'Parvati Sarovar & Gauri Kund',
                        'desc' => 'Sacred holy waters and ancient Shiv Parvati temple at 14,750 ft altitude with reflection of Adi Kailash.',
                    ],
                    [
                        'icon' => '🛕',
                        'title' => '22 Sacred Himalayan Landmarks',
                        'desc' => 'Kalapani Kali Mandir (origin of Kali River), Ved Vyas Gufa, Jageshwar Dham (250+ temples), and Chitai Golu Devta.',
                    ],
                    [
                        'icon' => '🚙',
                        'title' => 'Dedicated 4x4 Bolero & Full Safety',
                        'desc' => 'Strictly 4–5 persons per 4x4 Bolero with oxygen cylinders, pulse oximeters, and walkie-talkies.',
                    ],
                ],
                'itinerary' => [
                    [
                        'day' => 'Day 0',
                        'title' => 'Delhi to Kathgodam (280 KMs / 7 Hrs · 554 m)',
                        'desc' => 'Departure from Delhi by Train / Bus, Overnight Journey in Train / Bus. Next morning, arrive at Kathgodam railway station at around 6:00 AM. Train ticket of 3A / CC / Bus ticket fare included for both ways. (Meals: Nil)',
                    ],
                    [
                        'day' => 'Day 1',
                        'title' => 'Kathgodam to Pithoragarh (196 KMs / 7 Hrs)',
                        'desc' => 'Scenic mountain drive from Kathgodam to Pithoragarh. Sightseeing: Bhimtal, Neem Karoli Baba (Kainchi Dham), Jageshwar Temple (more than 250 temples dedicated to Shiva), and Golu Mandir (Temple of Justice). Night stay at Pithoragarh. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 2',
                        'title' => 'Pithoragarh to Dharchula (93 KMs / 3 Hrs)',
                        'desc' => 'Drive along the roaring Kali River gorge to Dharchula base. Verification of documents for Inner Line Permits (ILP), medical checkup briefing. Night stay at Dharchula. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 3',
                        'title' => 'Dharchula to Gunji / Napalchu (71 KMs / 2.30 Hrs)',
                        'desc' => 'Board dedicated 4x4 Bolero campers (only 4–5 persons per Bolero). Drive through the scenic Vyas Valley, crossing Lakhanpur, Malpa, and Chhialekh bugyal to Gunji / Napalchu. Sightseeing: Manokamna Temple (wooden Pagoda style temple dedicated to Shiva in Nabi Village). Night stay at Gunji / Napalchu. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 4',
                        'title' => 'Gunji/Napalchu – Om Parvat – Gunji/Napalchu (22 KMs / 1 Hr)',
                        'desc' => 'Early departure for Nabhidhang facing the sacred Om Parvat (snow \'ॐ\' formation). Sightseeing: Om Parvat, Parvati Nabhi Parvat, Kalapani, Sheshnag Parvat, and Ved Vyas Gufa. Night stay at Napalchu / Budhi / Gunji. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 5',
                        'title' => 'Gunji/Napalchu – Adi Kailash – Gunji/Napalchu (68 KMs / 3 Hrs)',
                        'desc' => 'Drive to Jolingkong base camp for awe-inspiring close-up darshan of Adi Kailash (Chhota Kailash). Sightseeing: Kunti Parvat, Brahma Parvat, Pandava Parvat, Pandav Fort, Parvati Mukut, Adi Kailash, Shiv Parvati Temple, Parvati Sarovar, Bhim ki Kheti & Gauri Kund (depends on time limit, health of pilgrim & weather condition). Night stay at Gunji / Napalchu. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 6',
                        'title' => 'Gunji/Napalchu – Dharchula – Didihat / Chaukori (158 – 211 KMs / 6 Hrs)',
                        'desc' => 'Descend through the Vyas Valley to Dharchula and proceed across Kumaon hills to Didihat / Chaukori with panoramic Himalayan vistas. Night stay at Didihat / Chaukori. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 7',
                        'title' => 'Didihat – Bhimtal / Kathgodam (189 KMs / 6.30 Hrs)',
                        'desc' => 'Scenic morning drive with sightseeing at Patal Bhuvaneshwar (Patal Bhuneshwar cave believed to open at Mt Kailash). Continue drive to Bhimtal. Night stay at Bhimtal. (Meals: B, L, D)',
                    ],
                    [
                        'day' => 'Day 8',
                        'title' => 'Bhimtal / Kathgodam – Delhi drop',
                        'desc' => 'Morning breakfast and onward transfer / return journey drop to Delhi. (Meals: B)',
                    ],
                ],
                'dharchula_itinerary' => [
                    'title' => 'Option 3: Dharchula to Dharchula (4N / 5D)',
                    'days' => [
                        'Day 1: Dharchula arrival, Night Stay at Dharchula (Meals: L, D)',
                        'Day 2: Dharchula – Gunji / Napalchu (71 KMs / 2.30 Hrs): Night Stay at Gunji / Napalchu, Sightseeing: Manokamna Temple (Meals: B, L, D)',
                        'Day 3: Gunji – Om Parvat – Gunji / Napalchu (22 KMs / 1 Hr): Night Stay at Napalchu / Gunji, Sightseeing: Om Parvat, Parvati Nabhi Parvat, Kalapani, Sheshnag Parvat, Ved Vyas Gufa (Meals: B, L, D)',
                        'Day 4: Gunji / Napalchu – Adi Kailash – Gunji / Napalchu (68 KMs / 3 Hrs): Night Stay at Gunji / Napalchu, Sightseeing: Kunti Parvat, Brahma Parvat, Pandava Parvat, Parvati Mukut, Adi Kailash, Shiv Parvati Temple, Parvati Sarovar, Bhim Ki Kheti & Gauri Kund (Meals: B, L, D)',
                        'Day 5: Gunji / Napalchu – Dharchula Drop (71 KMs / 2.30 Hrs) (Meals: B, L)',
                    ],
                ],
                'important_points' => [
                    'Adventure Segment: Adi Kailash Yatra comes in the adventure segment so it is not smooth like regular pleasure tour packages. Roads after Dharchula are rough and covered by dedicated 4x4 Bolero.',
                    'Vehicle Policy: To ensure comfort, strictly 4 to 5 persons sit in 1 Bolero.',
                    'Road & Trekking: Earlier pilgrims had to trek more than 200 KMs; now Government and BRO have developed new roads bringing down optional trekking to just 2 to 7 KMs.',
                    'Meals & Kitchen: Permanent kitchen set up at each staying place providing pure vegetarian meals.',
                    'Safety & Medical Support: Walkie-Talkies, Oxygen Cylinders, Oxy-meters, Back Up & Rescue Plan, 24x7 On Ground Support.',
                    'Hawan Pujan: Provision of Hawan Puja and Puja Samagri during the Yatra.',
                    'Physical Fitness: Happens in high altitude area; one must ensure physical fitness and undergo proper medical checkup before applying.',
                    'Lipulekh Pass Opportunity: If permission for Lipulekh Pass starts, pilgrims can have darshan of Mount Kailash from a distance of approx. 90 km.',
                ],
                'essentials' => [
                    'Valid Government Photo ID (Aadhaar Card, Voter ID or Passport) & passport-sized photographs',
                    'Medical fitness certificate from a registered physician',
                    'Warm woolen thermal layers, down jacket, windproof outer jacket, and woolen caps/gloves',
                    'Comfortable waterproof trekking shoes with sturdy grip & 4-5 pairs of woolen socks',
                    'Personal medications, UV protection sunglasses, and high-SPF sunblock',
                ],
            ],

            'char-dham-yatra' => [
                'slug' => 'char-dham-yatra',
                'title' => 'Char Dham Yatra 2026',
                'enquiry_key' => 'Char Dham Yatra',
                'category' => 'Sacred Pilgrimage',
                'category_tag' => 'tag-sacred',
                'duration' => '11D / 10N',
                'duration_full' => '10 Nights / 11 Days',
                'location' => 'Haridwar, Uttarakhand',
                'location_short' => 'Haridwar to Haridwar',
                'starting_point' => 'Haridwar to Haridwar',
                'image' => 'images/dest-himalayas.jpg',
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'tagline' => 'Not just a trip. A journey to connect with the divine.',
                'card_desc' => 'Char Dham Yatra 2026 covers Kedarnath, Badrinath, Yamunotri, and Gangotri. The yatra runs for 10 nights and 11 days, from Haridwar to Haridwar. Seats are limited.',
                'perks' => [
                    'Kedarnath, Badrinath, Yamunotri and Gangotri',
                    '10 Nights / 11 Days, Haridwar to Haridwar',
                    'Stay, meals, transportation and darshan assistance',
                    'Limited seats available',
                ],
                'overview_paragraphs' => [
                    'Char Dham Yatra 2026 visits Kedarnath, Badrinath, Yamunotri, and Gangotri.',
                    'The yatra is 10 nights and 11 days. It starts at Haridwar and ends at Haridwar. Limited seats available.',
                    'Not just a trip. A journey to connect with the divine.',
                ],
                'highlights_heading' => 'Kedarnath, Badrinath, Yamunotri and Gangotri',
                'highlights' => [
                    ['icon' => '🛕', 'title' => 'Kedarnath', 'desc' => 'One of the four dhams on this yatra.'],
                    ['icon' => '🛕', 'title' => 'Badrinath', 'desc' => 'One of the four dhams on this yatra.'],
                    ['icon' => '🛕', 'title' => 'Yamunotri', 'desc' => 'One of the four dhams on this yatra.'],
                    ['icon' => '🛕', 'title' => 'Gangotri', 'desc' => 'One of the four dhams on this yatra.'],
                ],
                'itinerary_eyebrow' => 'YATRA ROUTE',
                'itinerary_heading' => 'Haridwar to Haridwar',
                'itinerary' => [
                    [
                        'day' => 'Route',
                        'title' => 'Char Dham Yatra 2026',
                        'points' => [
                            'Haridwar → Barkot → Yamunotri → Uttarkashi',
                            'Gangotri → Guptkashi → Rudraprayag',
                            'Sonprayag → Kedarnath → Sonprayag',
                            'Joshimath → Badrinath → Pipalkoti → Haridwar',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'heading' => 'Sightseeing (13+ Places)',
                        'items' => [
                            'Gangnani Kund',
                            'Kashi Vishwanath Temple',
                            'Tehri Dam',
                            'Dhari Devi Temple',
                            'Guptkashi Temple',
                            'Gauri Kund',
                            'Okhimath',
                            'Narsingh Devta Temple',
                            'Panch Prayag',
                        ],
                    ],
                    [
                        'heading' => 'Included on this yatra',
                        'items' => [
                            'Stay (Hotel/Camps)',
                            'Meals',
                            'Transportation',
                            'Local Guide support',
                            'Darshan Assistance',
                            'Customised Experience',
                            'Comfortable Travel',
                            'Trusted Planning',
                        ],
                    ],
                ],
            ],

            'khaliya-top-trek' => [
                'slug' => 'khaliya-top-trek',
                'title' => 'Khaliya Top Trek',
                'enquiry_key' => 'Khaliya Top Trek',
                'category' => 'Himalayan Trek',
                'category_tag' => 'tag-trek',
                'duration' => '1–2 Days',
                'duration_full' => '1 to 2 days for the trek, or a 4-day trip from Kathgodam/Haldwani',
                'location' => 'Munsiyari, Kumaon region, Uttarakhand',
                'location_short' => 'Munsiyari, Uttarakhand',
                'altitude' => 'Summit ~3,500 m',
                'difficulty' => 'Easy to moderate',
                'best_season' => 'March–June, September–November, and December–February',
                'starting_point' => 'Balati Bend',
                'image' => 'images/trips/khaliya-top-trek/1.jpg',
                'gallery' => self::tripGallery('khaliya-top-trek', 'Khaliya Top Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'tagline' => 'The Khaliya Top Trek is an easy-to-moderate Himalayan trek located near Munsiyari in the Pithoragarh district of Uttarakhand, India.',
                'card_desc' => 'An easy-to-moderate Himalayan trek near Munsiyari in the Pithoragarh district of Uttarakhand.',
                'perks' => [
                    'Start at Balati Bend, about 8 km from Munsiyari',
                    'About 6 km one way, 8 to 12 km round trip',
                    'Easy to moderate, suitable for beginners and families',
                ],
                'overview_paragraphs' => [
                    'The Khaliya Top Trek is an easy-to-moderate Himalayan trek located near Munsiyari in the Pithoragarh district of Uttarakhand, India.',
                ],
                'highlights_heading' => 'Key Trek Specifications',
                'highlights' => [
                    ['icon' => '📍', 'title' => 'Location', 'desc' => 'Munsiyari, Kumaon region, Uttarakhand.'],
                    ['icon' => '🚩', 'title' => 'Starting Point', 'desc' => 'Balati Bend (approx. 8 km from Munsiyari).'],
                    ['icon' => '🥾', 'title' => 'Trek Distance', 'desc' => 'About 6 km one-way from the base to the summit/Zero Point (8 to 12 km round trip).'],
                    ['icon' => '🏔️', 'title' => 'Altitude', 'desc' => 'Base camp at ~3,246 meters (10,650 ft); Khaliya Top summit at ~3,500 meters (11,500 ft); Zero Point at ~4,000 meters (13,123 ft).'],
                    ['icon' => '⚖️', 'title' => 'Difficulty', 'desc' => 'Easy to moderate, suitable for beginners and families.'],
                    ['icon' => '🗓️', 'title' => 'Duration', 'desc' => '1 to 2 days for the trek itself, or a 4-day trip starting from Kathgodam/Haldwani.'],
                ],
                'itinerary' => [],
                'sections' => [
                    [
                        'heading' => 'Route & Landscape',
                        'items' => [
                            'Trail: Stone-paved paths winding through dense forests of oak, rhododendron, pine, and cedar, opening up into vast alpine meadows (bugyals).',
                            'Views: 360-degree panoramas of major Himalayan peaks including the Panchachuli range, Nanda Devi, Nanda Kot, Rajrambha, and Hardeol.',
                        ],
                    ],
                    [
                        'heading' => 'Best Time to Visit',
                        'items' => [
                            'March to June: Clear weather, pleasant temperatures, and blooming wildflowers in the meadows.',
                            'September to November: Crisp air and the best visibility for snow-capped mountain views.',
                            'December to February: Ideal for snow trekking and winter landscapes (though trails can be slippery with black ice).',
                            'Avoid: The peak monsoon season from July to August due to heavy rains and landslide risks.',
                        ],
                    ],
                    [
                        'heading' => 'Permits & Logistics',
                        'items' => [
                            'Forest Entry Fee: Around ₹20 to ₹50 per person (plus vehicle parking fees of ₹50–₹100).',
                            'Stays: GVMN/KMVN rest houses, local homestays in Munsiyari, or tents at the Bhujani/Khaliya base camps.',
                            'Gear: Walking sticks, boots, and warm layers can be rented or arranged locally in Munsiyari. Local guides are recommended.',
                        ],
                    ],
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'milam-glacier-trek' => [
                'slug' => 'milam-glacier-trek',
                'title' => 'Milam Glacier Trek',
                'enquiry_key' => 'Milam Glacier Trek',
                'category' => 'Himalayan Trek',
                'category_tag' => 'tag-trek',
                'duration' => '9–12 Days',
                'duration_full' => '9 to 12 days',
                'location' => 'Kumaon Himalayas, Pithoragarh district, Uttarakhand',
                'location_short' => 'Pithoragarh, Uttarakhand',
                'altitude' => '~4,242–5,000 m',
                'difficulty' => 'Moderate to Difficult',
                'best_season' => 'May to June and September to October',
                'starting_point' => 'Munsiyari',
                'image' => 'images/trips/milam-glacier-trek/1.jpg',
                'gallery' => self::tripGallery('milam-glacier-trek', 'Milam Glacier Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'tagline' => 'A remote, 9-to-12-day high-altitude trek in Uttarakhand\'s Johar Valley that covers around 100 to 130 kilometers round trip.',
                'card_desc' => 'A remote 9-to-12-day trek in the Johar Valley, covering around 100 to 130 km round trip.',
                'perks' => [
                    'Base camp at Munsiyari',
                    'Highest point about 4,242 m to 5,000 m',
                    'Moderate to difficult',
                ],
                'overview_paragraphs' => [
                    'The Milam Glacier Trek is a remote, 9-to-12-day high-altitude trek in Uttarakhand\'s Johar Valley that covers around 100 to 130 kilometers round trip.',
                ],
                'highlights_heading' => 'Fast Facts',
                'highlights' => [
                    ['icon' => '📍', 'title' => 'Location', 'desc' => 'Kumaon Himalayas, Pithoragarh district, Uttarakhand.'],
                    ['icon' => '🚩', 'title' => 'Base Camp', 'desc' => 'Munsiyari.'],
                    ['icon' => '🏔️', 'title' => 'Highest Altitude', 'desc' => '~4,242 meters (glacier snout) up to 5,000 meters.'],
                    ['icon' => '⚖️', 'title' => 'Difficulty', 'desc' => 'Moderate to Difficult.'],
                    ['icon' => '🗓️', 'title' => 'Best Season', 'desc' => 'May to June and September to October.'],
                ],
                'itinerary_eyebrow' => 'TREK ROUTE',
                'itinerary_heading' => 'Trek Route & Key Stops',
                'itinerary' => [
                    ['day' => '1', 'title' => 'Munsiyari to Lilam', 'desc' => 'The traditional starting point following the Gori Ganga river.'],
                    ['day' => '2', 'title' => 'Lilam to Bugdiar (Bagudyar)', 'desc' => 'A steep climb through dense forests and rugged valley trails.'],
                    ['day' => '3', 'title' => 'Bugdiar to Railkot & Martoli', 'desc' => 'Journey deeper into the historic Johar Valley, passing abandoned stone houses and ancient trade route remnants.'],
                    ['day' => '4', 'title' => 'Martoli to Milam Village', 'desc' => 'Pass through Burphu village before arriving at Milam, the last major inhabited settlement.'],
                    ['day' => '5', 'title' => 'Milam Village to Milam Glacier', 'desc' => 'A 5 km final push to the glacier snout with panoramic views of peaks like Hardeol, Trishuli, and Rishi Pahar.'],
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'kareri-lake-trek' => [
                'slug' => 'kareri-lake-trek',
                'title' => 'Kareri Lake Trek',
                'enquiry_key' => 'Kareri Lake Trek',
                'category' => 'Himalayan Trek',
                'category_tag' => 'tag-trek',
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night, or 3 Days / 2 Nights depending on pace',
                'location' => 'Near Dharamshala / McLeodganj, Himachal Pradesh',
                'location_short' => 'Dharamshala, Himachal Pradesh',
                'altitude' => '~9,613–9,700 ft',
                'difficulty' => 'Easy to Moderate',
                'best_season' => 'May–June and September–November; December–February for snow',
                'starting_point' => 'Kareri Village',
                'image' => 'images/trips/kareri-lake-trek/1.jpg',
                'gallery' => self::tripGallery('kareri-lake-trek', 'Kareri Lake Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'tagline' => 'An easy-to-moderate high-altitude trail in the Dhauladhar range of Kangra district, Himachal Pradesh.',
                'card_desc' => 'An easy-to-moderate high-altitude trail in the Dhauladhar range of Kangra district, Himachal Pradesh.',
                'perks' => [
                    'Base camp at Kareri Village',
                    'About 20 to 26 km round trip',
                    'Maximum altitude about 9,613 to 9,700 ft',
                ],
                'overview_paragraphs' => [
                    'The Kareri Lake Trek is an easy-to-moderate high-altitude trail in the Dhauladhar range of Kangra district, Himachal Pradesh.',
                ],
                'highlights_heading' => 'Quick Facts',
                'highlights' => [
                    ['icon' => '📍', 'title' => 'Location', 'desc' => 'Near Dharamshala / McLeodganj, Himachal Pradesh.'],
                    ['icon' => '🚩', 'title' => 'Base Camp', 'desc' => 'Kareri Village (Nolli Bridge / Ghera area).'],
                    ['icon' => '🏔️', 'title' => 'Maximum Altitude', 'desc' => '~9,613 ft to 9,700 ft (approx. 2,930 – 2,950 meters).'],
                    ['icon' => '🥾', 'title' => 'Trek Distance', 'desc' => 'About 20 to 26 km total (round trip).'],
                    ['icon' => '🗓️', 'title' => 'Duration', 'desc' => '2 Days / 1 Night (or 3 Days / 2 Nights depending on your pace).'],
                    ['icon' => '⚖️', 'title' => 'Difficulty', 'desc' => 'Easy to Moderate.'],
                    ['icon' => '🌤️', 'title' => 'Best Time to Visit', 'desc' => 'May to June and September to November for clear views, or December to February for snow and a frozen lake.'],
                ],
                'itinerary_heading' => 'Standard Itinerary (2 Days / 1 Night)',
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Dharamshala to Kareri Village & Trek to Riyoti / Campsite', 'desc' => 'Drive from Dharamshala to Kareri Village (approx. 25–30 km, about 1.5 to 2 hours). Start the trek from Kareri Village/Nolli Bridge, walking alongside the gushing Nyund Nallah through pine, oak, and rhododendron forests. Reach the Reoti / Riyoti campsite (around 8,038 ft) by afternoon/evening. Stay overnight in tents.'],
                    ['day' => 'Day 2', 'title' => 'Riyoti to Kareri Lake & Return to Village', 'desc' => 'Trek from Riyoti up to Kareri Lake (~9,613 ft) passing through boulder trails and visiting the hilltop Shiva and Shakti temple overlooking the water. Explore the glacial lake, take in the views of the Dhauladhar peaks, and descend back down to Kareri Village. Drive back to Dharamshala by evening.'],
                ],
                'sections' => [
                    [
                        'heading' => 'Essential Tips',
                        'items' => [
                            'Mobile Network: Expect little to no mobile network connectivity once you start the trek from Kareri Village.',
                            'What to Carry: Sturdy trekking shoes, layers for cold nights (temperatures can drop significantly), a reusable water bottle (you can refill along the stream, use purification tablets/filter), and a basic first-aid kit.',
                            'Guided vs. DIY: The trail is fairly straightforward for regular hikers (DIY-friendly), though local guides and organized camps are widely available out of Dharamshala and McLeodganj.',
                        ],
                    ],
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'dalhousie-dharamshala' => [
                'slug' => 'dalhousie-dharamshala',
                'title' => 'Dalhousie & Dharamshala Tour',
                'hero_heading' => 'Dalhousie & Dharamshala — Mountains, Lakes & Adventure',
                'enquiry_key' => 'Dalhousie & Dharamshala',
                'category' => 'HIMACHAL PRADESH TOUR',
                'category_tag' => 'tag-nature',
                'duration' => '8 Days',
                'duration_full' => '8 Days',
                'location' => 'Dharamshala, McLeod Ganj, Kareri Village, Kareri Lake, Dalhousie, Khajjiar, Chandigarh, and Amritsar',
                'location_short' => 'Himachal Pradesh',
                'image' => 'images/trips/dalhousie-dharamshala/3.jpg',
                'gallery' => [
                    [
                        'src' => 'images/trips/dalhousie-dharamshala/3.jpg',
                        'title' => 'Dharamshala monastery',
                        'caption' => 'Tibetan monastery with prayer flags from the Dharamshala portion of this trip.',
                    ],
                    [
                        'src' => 'images/trips/dalhousie-dharamshala/1.jpg',
                        'title' => 'Church interior',
                        'caption' => 'Church interior from the Dalhousie and Dharamshala trip. The photograph does not name the church.',
                    ],
                    [
                        'src' => 'images/trips/dalhousie-dharamshala/5.jpg',
                        'title' => 'Dalhousie',
                        'caption' => 'Prayer flags in Dalhousie. A sign in this photograph names Dalhousie.',
                    ],
                    [
                        'src' => 'images/trips/kareri-lake-trek/5.jpg',
                        'title' => 'Kareri Lake trek trail',
                        'caption' => 'Snowy mountain trail from the Kareri Lake trek.',
                    ],
                    [
                        'src' => 'images/trips/kareri-lake-trek/4.jpg',
                        'title' => 'Camping on the Kareri trek',
                        'caption' => 'Camp meal beside tents on the Kareri trek.',
                    ],
                ],
                'gallery_heading' => 'Dalhousie & Dharamshala Photographs',
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Price on Request',
                'show_generic_claims' => false,
                'hero_actions' => true,
                'tagline' => 'Explore the charm of Himachal Pradesh with scenic mountain landscapes, cultural landmarks, peaceful hill towns, and an unforgettable Kareri Lake trekking experience. Discover Dharamshala, enjoy Dalhousie and Khajjiar, and create memorable moments along the way.',
                'card_desc' => 'An 8-day Himachal Pradesh journey through Dharamshala, a Kareri Lake trek and camp, Dalhousie, Khajjiar, and a return via Chandigarh towards Surat.',
                'perks' => [
                    'Dharamshala and McLeod Ganj sightseeing',
                    'Kareri Lake trek, 12 km one way',
                    'Dalhousie and Khajjiar',
                ],
                'overview_paragraphs' => [
                    'Discover the beautiful landscapes of Himachal Pradesh through a multi-day journey featuring historic forts, temples, waterfalls, mountain trekking, camping, tea gardens, scenic lakes, hill stations, and outdoor activities.',
                    'The itinerary combines Dharamshala sightseeing, a Kareri Lake trekking and camping experience, Dalhousie sightseeing, a Khajjiar excursion, and a return journey via Chandigarh towards Surat.',
                    'Main places on this journey: Dharamshala, McLeod Ganj, Kareri Village, Kareri Lake, Dalhousie, Khajjiar, Chandigarh, and Amritsar.',
                ],
                'highlights_heading' => 'Sightseeing and Destination Highlights',
                'highlights' => [],
                'itinerary_heading' => '8-Day Itinerary',
                'itinerary' => [
                    [
                        'day' => 'Day 1',
                        'title' => 'Arrival and Dharamshala Sightseeing',
                        'points' => [
                            'Pickup and travel to Daulatpur Chowk.',
                            'Lunch.',
                            'Visit Kangra Fort.',
                            'Visit McLeod Ganj.',
                            'Night stay in Dharamshala.',
                            'Bonfire and DJ.',
                        ],
                    ],
                    [
                        'day' => 'Day 2',
                        'title' => 'Dharamshala Local Sightseeing',
                        'points' => [
                            'Breakfast.',
                            'Visit Bhagsunag Temple.',
                            'Visit Bhagsunag Waterfall.',
                            'Visit St. Johan Church, as named in the source itinerary.',
                            'Visit Dalai Lama Temple.',
                            'Visit Norbulingka Institute.',
                            'Visit HPCA Stadium.',
                            'Dinner and night stay in Dharamshala.',
                            'DJ and bonfire.',
                        ],
                    ],
                    [
                        'day' => 'Day 3',
                        'title' => 'Kareri Lake Trek and Camping',
                        'points' => [
                            'Breakfast.',
                            'Depart for Kareri Village in the morning.',
                            'Kareri Lake Trek.',
                            'Trek distance stated in the source itinerary: 12 km one way.',
                            'Dinner.',
                            'Camping at Kareri.',
                            'DJ and bonfire.',
                        ],
                    ],
                    [
                        'day' => 'Day 4',
                        'title' => 'Return to Dharamshala',
                        'points' => [
                            'Breakfast at Kareri.',
                            'Descend from Kareri.',
                            'Travel back to Dharamshala.',
                            'Dinner.',
                            'Overnight rest in Dharamshala.',
                        ],
                    ],
                    [
                        'day' => 'Day 5',
                        'title' => 'Activities and Transfer to Dalhousie',
                        'points' => [
                            'Breakfast.',
                            'Paragliding.',
                            'Visit War Memorial Sanctuary, as named in the source itinerary.',
                            'Visit a tea garden.',
                            'Depart for Dalhousie.',
                            'Dinner and night stay in Dalhousie.',
                            'Bonfire and DJ.',
                        ],
                    ],
                    [
                        'day' => 'Day 6',
                        'title' => 'Dalhousie Sightseeing',
                        'points' => [
                            'Breakfast.',
                            'Visit St. Francis Church.',
                            'Visit St. Patrick\'s Church.',
                            'Visit Panchachuli Waterfall, as named in the source itinerary.',
                            'Visit Kalatop Wildlife Sanctuary.',
                            'Visit Chamera Lake.',
                            'Return to the hotel in Dalhousie.',
                            'Dinner.',
                            'Bonfire and DJ.',
                        ],
                    ],
                    [
                        'day' => 'Day 7',
                        'title' => 'Khajjiar Excursion',
                        'points' => [
                            'Breakfast.',
                            'Visit Khajjiar, described in the source itinerary as the “Mini Switzerland of India.”',
                            'Activities listed in the source itinerary include horse riding and zipline.',
                            'Visit Lakshminarayan Temple if time permits.',
                            'Return to the hotel.',
                            'Dinner and overnight stay.',
                            'DJ and bonfire.',
                        ],
                    ],
                    [
                        'day' => 'Day 8',
                        'title' => 'Chandigarh and Return Journey',
                        'points' => [
                            'Breakfast.',
                            'Depart for Chandigarh.',
                            'Pong Dam.',
                            'Golden Temple, Amritsar.',
                            'Dinner in Chandigarh.',
                            'Catch the train towards Surat.',
                        ],
                        'note' => 'Needs confirmation: the source itinerary lists Pong Dam and the Golden Temple, Amritsar, on Day 8, but it does not give the route, timing, or logistics. Those stops are shown as listed and have not been verified.',
                    ],
                ],
                'sections' => [
                    [
                        'heading' => 'Dharamshala and Surroundings',
                        'items' => [
                            'Kangra Fort',
                            'McLeod Ganj',
                            'Bhagsunag Temple',
                            'Bhagsunag Waterfall',
                            'Dalai Lama Temple',
                            'Norbulingka Institute',
                            'HPCA Stadium',
                            'Kareri Village',
                            'Kareri Lake',
                        ],
                    ],
                    [
                        'heading' => 'Dalhousie and Surroundings',
                        'items' => [
                            'St. Francis Church',
                            'St. Patrick\'s Church',
                            'Panchachuli Waterfall',
                            'Kalatop Wildlife Sanctuary',
                            'Chamera Lake',
                            'Khajjiar',
                            'Lakshminarayan Temple',
                        ],
                    ],
                    [
                        'heading' => 'Other Listed Destinations',
                        'items' => [
                            'Daulatpur Chowk',
                            'Chandigarh',
                            'Pong Dam',
                            'Golden Temple, Amritsar',
                        ],
                    ],
                    [
                        'heading' => 'Experiences Along the Journey',
                        'paragraphs' => [
                            'From mountain trekking and camping to scenic sightseeing and outdoor adventures, experience a variety of activities throughout your Himachal Pradesh journey.',
                            'These activities are listed in the source itinerary. The itinerary does not say that every activity is included in the package price. Inclusions and any extra charges still need to be confirmed.',
                        ],
                        'items' => [
                            'Kareri Lake trekking',
                            'Camping at Kareri',
                            'Bonfire',
                            'DJ',
                            'Paragliding',
                            'Horse riding',
                            'Zipline',
                            'Sightseeing',
                            'Tea garden visit',
                            'Temple and cultural visits',
                            'Lake and wildlife sanctuary visits',
                        ],
                    ],
                    [
                        'heading' => 'Meals and Accommodation Schedule',
                        'paragraphs' => [
                            'Lunch is listed only on Day 1. Lunch is not stated for the other days. Hotel and campsite names are not stated.',
                        ],
                        'items' => [
                            'Day 1: Lunch. Night stay in Dharamshala. Bonfire and DJ.',
                            'Day 2: Breakfast. Dinner. Night stay in Dharamshala. DJ and bonfire.',
                            'Day 3: Breakfast. Dinner. Camping at Kareri. DJ and bonfire.',
                            'Day 4: Breakfast at Kareri. Dinner. Night stay in Dharamshala.',
                            'Day 5: Breakfast. Dinner. Night stay in Dalhousie. Bonfire and DJ.',
                            'Day 6: Breakfast. Dinner. Hotel stay in Dalhousie. Bonfire and DJ.',
                            'Day 7: Breakfast. Dinner. Hotel night stay. DJ and bonfire.',
                            'Day 8: Breakfast. Dinner in Chandigarh. Train journey towards Surat.',
                        ],
                    ],
                ],
                'enquiry_prompt' => [
                    'heading' => 'Ready to Explore Himachal Pradesh?',
                    'description' => 'Interested in this Dalhousie and Dharamshala journey? Contact Explore Trekora to discuss travel dates, group size, package pricing, accommodation, and activity availability.',
                    'button' => 'Enquire About This Trip',
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'harihar-fort-trek' => [
                'slug' => 'harihar-fort-trek',
                'title' => 'Harihar Fort & Harishchandragad',
                'enquiry_key' => 'Harihar Fort Trek',
                'category' => 'Western Ghats',
                'category_tag' => 'tag-ghats',
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night',
                'location' => 'Sahyadri, Maharashtra',
                'location_short' => 'Sahyadri, Maharashtra',
                'altitude' => '3,676 ft',
                'altitude_full' => '3,676 ft (Harihar Fort Summit)',
                'difficulty' => 'Moderate with Thrilling Rock Steps',
                'best_season' => 'June – February (Monsoon & Winter)',
                'starting_point' => 'Mumbai / Pune / Nashik',
                'group_size' => '8 – 20 Travellers',
                'image' => 'images/trips/harihar-fort-trek/1.jpg',
                'gallery' => self::tripGallery('harihar-fort-trek', 'Harihar Fort & Harishchandragad'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Conquer the iconic 80° rock-cut vertical steps of Harihar Fort and witness the dramatic cliff overhang of Konkan Kada.',
                'card_desc' => 'Conquer the iconic 80° rock-cut steps of Harihar Fort and witness the dramatic amphitheater cliff of Konkan Kada.',
                'perks' => [
                    '80° Vertical Rock-Cut Staircase Thrill',
                    'Konkan Kada Amphitheater Cliff Overhang',
                    'Certified Sahyadri Mountain Leaders',
                    'Panoramic 360° Western Ghats Vistas',
                ],
                'overview_paragraphs' => [
                    'Harihar Fort in the Trimbakeshwar range of Maharashtra is globally famous for its near-vertical 80° rock-cut stairs carved directly into the triangular rock scarp during the Seuna (Yadava) dynasty.',
                ],
                'highlights' => [
                    ['icon' => '🧗', 'title' => 'Iconic Vertical Stairway', 'desc' => 'Handholds and footsteps carved into shear basalt cliff.'],
                    ['icon' => '🏰', 'title' => 'Historic Maratha Fort Architecture', 'desc' => 'Water cisterns, storage rooms, and panoramic hill fort gates.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Mumbai / Pune to Base Village (Harshewadi) & Harihar Trek', 'desc' => 'Climb the iconic 80° steps, explore the summit plateau, return to camp.'],
                    ['day' => 'Day 2', 'title' => 'Harishchandragad / Konkan Kada Exploration & Return', 'desc' => 'Visit Kedareshwar cave temple and Konkan Kada cliff before return.'],
                ],
                'inclusions' => ['Certified trek leads and safety equipment', 'Trek meals and tent stay', 'Local transfers from Nashik/Kasara'],
                'exclusions' => ['Personal insurance', 'Extra refreshments'],
                'essentials' => ['Grippy trekking shoes', 'Raincoat (monsoon)', 'Hydration pack'],
            ],

            'girnar-pilgrimage-trek' => [
                'slug' => 'girnar-pilgrimage-trek',
                'title' => 'Girnar Pilgrimage Trek',
                'enquiry_key' => 'Girnar',
                'category' => 'Sacred Pilgrimage',
                'category_tag' => 'tag-sacred',
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night',
                'location' => 'Junagadh, Gujarat',
                'location_short' => 'Junagadh, Gujarat',
                'altitude' => '3,666 ft',
                'altitude_full' => '3,666 ft (Gorakhnath Peak, Highest in Gujarat)',
                'difficulty' => 'Challenging (10,000 Stone Steps / Ropeway Option)',
                'best_season' => 'October – March',
                'starting_point' => 'Junagadh / Rajkot / Ahmedabad',
                'group_size' => '4 – 15 Travellers',
                'image' => 'images/trips/girnar-pilgrimage-trek/1.jpg',
                'gallery' => self::tripGallery('girnar-pilgrimage-trek', 'Girnar Pilgrimage Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Ascend the sacred mountain of Saurashtra with early dawn vistas, spiritual serenity, and well-supported trail stops.',
                'card_desc' => 'Ascend the sacred mountain of Saurashtra with early dawn vistas, spiritual serenity, and well-supported trail stops.',
                'perks' => [
                    '10,000 Sacred Stone Steps Ascent',
                    'Ambaji, Neminath & Dattatreya Temples',
                    'Sunrise Summit at Gujarat’s Highest Peak',
                    'Optional Asia’s Longest Ropeway Facility',
                ],
                'overview_paragraphs' => [
                    'Mount Girnar in Junagadh is the highest mountain peak in Gujarat and a deeply revered spiritual pilgrimage for both Hindu and Jain devotees.',
                ],
                'highlights' => [
                    ['icon' => '🛕', 'title' => 'Lord Dattatreya Paduka', 'desc' => 'Sacred footprints at the highest peak.'],
                    ['icon' => '🚡', 'title' => 'Girnar Ropeway', 'desc' => 'Modern passenger ropeway to Ambaji temple plateau.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Arrival in Junagadh & Uparkot Fort', 'desc' => 'Visit historic Buddhist caves and check in to hotel.'],
                    ['day' => 'Day 2', 'title' => 'Girnar Summit Climb & Darshan', 'desc' => 'Night/early dawn climb of 10,000 steps, temple pooja, return.'],
                ],
                'inclusions' => ['Local guide assistance', 'Hotel stay in Junagadh', 'Local transfers'],
                'exclusions' => ['Ropeway tickets', 'Doli / palanquin charges'],
                'essentials' => ['Trek pole / walking stick', 'Electrolyte powder', 'Comfortable running shoes'],
            ],

            'mount-abu-eco-getaway' => [
                'slug' => 'mount-abu-eco-getaway',
                'title' => 'Mount Abu Eco Getaway',
                'enquiry_key' => 'Mount Abu',
                'category' => 'Hill Station',
                'category_tag' => 'tag-nature',
                'duration' => '3D / 2N',
                'duration_full' => '3 Days / 2 Nights',
                'location' => 'Aravalli Range, Rajasthan',
                'location_short' => 'Aravalli Range, Rajasthan',
                'altitude' => '5,650 ft',
                'altitude_full' => '5,650 ft (Guru Shikhar Peak)',
                'difficulty' => 'Easy / Leisure',
                'best_season' => 'All Year (Monsoon & Winter Best)',
                'starting_point' => 'Abu Road / Udaipur / Ahmedabad',
                'group_size' => '2 – 10 Travellers',
                'image' => 'images/trips/mount-abu-eco-getaway/1.jpg',
                'gallery' => self::tripGallery('mount-abu-eco-getaway', 'Mount Abu Eco Getaway'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Rajasthan’s only hill station offering cool mountain breezes, Guru Shikhar nature walks, and peaceful lake retreats.',
                'card_desc' => 'Rajasthan’s only hill station offering cool mountain breezes, Guru Shikhar nature walks, and peaceful lake retreats.',
                'perks' => [
                    'Guru Shikhar Highest Peak in Aravallis',
                    'Nakki Lake Boat Cruise at Sunset',
                    'Intricate Dilwara Marble Temples',
                    'Eco-Cottage Stays Surrounded by Forests',
                ],
                'overview_paragraphs' => [
                    'Mount Abu is an oasis in the rocky Aravalli range of Rajasthan. Surrounded by dense wildlife sanctuaries, waterfalls, and peaceful lakes, it offers an escape from desert heat with rich cultural treasures like Dilwara.',
                ],
                'highlights' => [
                    ['icon' => '⛵', 'title' => 'Nakki Lake Boating', 'desc' => 'Serene lake surrounded by rock formations.'],
                    ['icon' => '🏛️', 'title' => 'Dilwara Temples', 'desc' => 'World-renowned marble stone filigree craftsmanship.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Abu Road to Mount Abu & Nakki Lake', 'desc' => 'Check-in, boating, sunset point.'],
                    ['day' => 'Day 2', 'title' => 'Guru Shikhar & Dilwara Tour', 'desc' => 'Visit highest peak and marble temple architecture.'],
                    ['day' => 'Day 3', 'title' => 'Trevor’s Tank Nature Walk & Departure', 'desc' => 'Crocodile sanctuary nature walk and drop to Abu Road.'],
                ],
                'inclusions' => ['Accommodation in eco-resort', 'Breakfast & dinner', 'Sightseeing vehicle'],
                'exclusions' => ['Boating tickets', 'Personal shopping'],
                'essentials' => ['Walking shoes', 'Light sweater'],
            ],

            'munsyari-kausani' => [
                'slug' => 'munsyari-kausani',
                'title' => 'Munsyari & Kausani',
                'enquiry_key' => 'Munsyari & Kausani',
                'category' => 'Himalayan Trek',
                'category_tag' => 'tag-trek',
                'duration' => '6 Days',
                'duration_full' => '6 Days',
                'location' => 'Kathgodam, Ranikhet, Kausani and Mukteshwar',
                'location_short' => 'Kathgodam to Mukteshwar',
                'starting_point' => 'Kathgodam',
                'image' => 'images/trips/munsyari-kausani/1.jpg',
                'gallery' => self::tripGallery('munsyari-kausani', 'Munsyari & Kausani'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'tagline' => 'Pickup from Kathgodam, then Ranikhet, Dhudholi, Someshwar, Kausani, and Mukteshwar.',
                'card_desc' => 'Pickup from Kathgodam, then Ranikhet, a trek to Pandavkholi, Someshwar, Kausani, and Mukteshwar.',
                'perks' => [
                    'Trek to Pandavkholi',
                    'Rudradhari Waterfall, tea garden, and shawl factory',
                    'Mukteshwar zero point',
                ],
                'overview_paragraphs' => [
                    'Pickup from Kathgodam and travel via Ranikhet to a stay at Dhudholi. The route continues with a trek to Pandavkholi, Someshwar, Kausani, and Mukteshwar.',
                ],
                'highlights' => [],
                'itinerary_heading' => '6-Day Route',
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Pickup Kathgodam, en route to Ranikhet', 'desc' => 'Kaichi Dham, Bhimtal, Jhula Devi Temple, Chopatiya Garden, War Museum, Golf Ground, Kalika Temple, and Heda Khan Temple. Stay at Dhudholi.'],
                    ['day' => 'Day 2', 'title' => 'Trek to Pandavkholi', 'desc' => 'Night stay at the mountain.'],
                    ['day' => 'Day 3', 'title' => 'Someshwar', 'desc' => 'Someshwar check-in and freshen up. Hidden waterfall.'],
                    ['day' => 'Day 4', 'title' => 'Rudradhari Waterfall, tea garden, and shawl factory', 'desc' => 'Stay at Kausani.'],
                    ['day' => 'Day 5', 'title' => 'En route to Mukteshwar', 'desc' => 'Chitay Golu Temple, Kasar Devi, and Katarmal Sun Temple. Stay at Mukteshwar.'],
                    ['day' => 'Day 6', 'title' => 'Mukteshwar', 'desc' => 'Mukteshwar Mahadev Temple, Choli ki Jaali, and Mukteshwar zero point.'],
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'dang-forest-circuit' => [
                'slug' => 'dang-forest-circuit',
                'title' => 'Dang Forest Circuit',
                'enquiry_key' => 'Dang',
                'category' => 'Forest Trail',
                'category_tag' => 'tag-nature',
                'duration' => '3D / 2N',
                'duration_full' => '3 Days / 2 Nights',
                'location' => 'Saputara & Dang, Gujarat',
                'location_short' => 'Saputara & Dang, Gujarat',
                'altitude' => '3,280 ft',
                'altitude_full' => '3,280 ft (Saputara Plateau)',
                'difficulty' => 'Easy / Nature Trail',
                'best_season' => 'July – February (Monsoon Greenery Best)',
                'starting_point' => 'Surat / Valsad / Mumbai',
                'group_size' => '4 – 15 Travellers',
                'image' => 'images/trips/dang-forest-circuit/1.jpg',
                'gallery' => self::tripGallery('dang-forest-circuit', 'Dang Forest Circuit'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'A lush rainforest getaway filled with roaring monsoon waterfalls, bamboo groves, tribal cuisine, and riverside camping.',
                'card_desc' => 'A lush rainforest getaway filled with roaring monsoon waterfalls, bamboo groves, tribal cuisine, and riverside camping.',
                'perks' => [
                    'Roaring Gira Waterfalls Monsoon Wonder',
                    'Dense Teak & Bamboo Rainforest Trails',
                    'Authentic Dangi Tribal Homestays & Bamboo Craft',
                    'Saputara Hill Station Lake & Sunset Points',
                ],
                'overview_paragraphs' => [
                    'The Dang forest is the green heart of Gujarat, celebrated for dense teak forests, rushing monsoon rivers, and rich indigenous Dangi tribal traditions.',
                ],
                'highlights' => [
                    ['icon' => '💧', 'title' => 'Gira Waterfalls', 'desc' => 'Magnificent waterfall dropping into Ambika river.'],
                    ['icon' => '🏕️', 'title' => 'Mahal Eco Campsite', 'desc' => 'Riverside camping inside Purna Wildlife Sanctuary.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Surat to Saputara & Lake Boating', 'desc' => 'Arrive in Saputara, visit sunset point and tribal museum.'],
                    ['day' => 'Day 2', 'title' => 'Gira Waterfalls & Waghai Botanical Garden', 'desc' => 'Explore waterfalls, bamboo craft workshops, and forest trail.'],
                    ['day' => 'Day 3', 'title' => 'Don Hill Station & Return', 'desc' => 'Visit offbeat Don village waterfall and return to Surat.'],
                ],
                'inclusions' => ['Accommodation in eco-campsite/resort', 'Authentic regional meals', 'Transport from Surat'],
                'exclusions' => ['Personal expenses', 'Boating charges'],
                'essentials' => ['Trekking sandals/shoes', 'Rain jacket (monsoon)'],
            ],

            'dediapada-wilderness-trek' => [
                'slug' => 'dediapada-wilderness-trek',
                'title' => 'Dediapada Wilderness Trek',
                'enquiry_key' => 'Dediapada',
                'category' => 'Wilderness Trail',
                'category_tag' => 'tag-ghats',
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night',
                'location' => 'Shoolpaneshwar, Gujarat',
                'location_short' => 'Shoolpaneshwar, Gujarat',
                'altitude' => '2,200 ft',
                'altitude_full' => '2,200 ft (Canyon Trails)',
                'difficulty' => 'Moderate (River Trekking & Canyoning)',
                'best_season' => 'August – February',
                'starting_point' => 'Vadodara / Bharuch / Surat',
                'group_size' => '6 – 16 Travellers',
                'image' => 'images/trips/dediapada-wilderness-trek/1.jpg',
                'gallery' => self::tripGallery('dediapada-wilderness-trek', 'Dediapada Wilderness Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Offbeat river trails, natural plunge pools, and hidden waterfalls nestled in the heart of Shoolpaneshwar Wildlife Sanctuary.',
                'card_desc' => 'Offbeat river trails, natural plunge pools, and hidden waterfalls nestled in the heart of Shoolpaneshwar Wildlife Sanctuary.',
                'perks' => [
                    'Hidden Rock Canyon Plunge Pools',
                    'Shoolpaneshwar Wildlife Sanctuary Trails',
                    'Riverbed Walking & Natural Jacuzzi',
                    'Authentic Forest Camp & Bonfire Night',
                ],
                'overview_paragraphs' => [
                    'Dediapada in Narmada district is Gujarat’s best-kept secret for adventurous hikers, offering offbeat river trails, hidden turquoise pools, and virgin canyon waterfalls inside Shoolpaneshwar Wildlife Sanctuary.',
                ],
                'highlights' => [
                    ['icon' => '🏊', 'title' => 'Natural Plunge Pools', 'desc' => 'Swim in crystal-clear natural water pools carved in basalt rock.'],
                    ['icon' => '🌿', 'title' => 'Shoolpaneshwar Forest', 'desc' => 'Rich sanctuary home to leopards, sloth bears, and exotic birds.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Vadodara/Surat to Dediapada & Waterfall Trek', 'desc' => 'River bed trekking, canyon jumping, evening forest camp.'],
                    ['day' => 'Day 2', 'title' => 'Kokam Waterfall & Return', 'desc' => 'Morning hike to hidden waterfall and plunge pool; return journey.'],
                ],
                'inclusions' => ['Forest permissions & local guide', 'Camp stay & all meals', 'Safety lifejackets'],
                'exclusions' => ['Personal transport to base (carpooling available)'],
                'essentials' => ['Quick-dry clothes', 'Water shoes with grip'],
            ],
        ];
    }

    /**
     * Five trip photographs for a destination gallery.
     *
     * @return list<array{src: string, title: string, caption: string}>
     */
    private static function tripGallery(string $slug, string $title): array
    {
        $photos = [];

        for ($photoNumber = 1; $photoNumber <= 5; $photoNumber++) {
            $photos[] = [
                'src' => "images/trips/{$slug}/{$photoNumber}.jpg",
                'title' => $title,
                'caption' => '',
            ];
        }

        return $photos;
    }

    /**
     * Tour package groups shown on the home page.
     *
     * Cards without a destination page keep enquiry as the next step.
     *
     * @return list<array{id: string, title: string, cards: list<array{title: string, description: string, image: string|null, alt: string, location: string, duration: string|null, badge: string, badge_tag: string, slug: string|null, enquiry: string|null}>}>
     */
    public static function packageGroups(): array
    {
        return [
            [
                'id' => 'pkg-cultural',
                'title' => 'Cultural',
                'cards' => [
                    [
                        'title' => 'Adi Kailash & Om Parvat',
                        'description' => 'Sacred Vedic pilgrimage through Vyas Valley near the Indo-Tibet border. Witness the divine naturally formed snow \'ॐ\' on Om Parvat, holy Parvati Sarovar (14,750 ft), and revered Adi Kailash.',
                        'image' => 'images/trips/adi-kailash-om-parvat/1.jpg',
                        'alt' => 'Adi Kailash and Om Parvat Yatra in Uttarakhand',
                        'location' => 'Dharchula & Vyas Valley, Uttarakhand',
                        'duration' => '8D / 7N',
                        'badge' => 'Sacred Pilgrimage',
                        'badge_tag' => 'tag-sacred',
                        'slug' => 'adi-kailash-om-parvat',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Char Dham',
                        'description' => 'Char Dham Yatra 2026 covers Kedarnath, Badrinath, Yamunotri, and Gangotri. 10 nights and 11 days, from Haridwar to Haridwar. Seats are limited.',
                        'image' => 'images/dest-himalayas.jpg',
                        'alt' => 'Himalayan landscape used on the Char Dham Yatra card',
                        'location' => 'Haridwar to Haridwar',
                        'duration' => '11D / 10N',
                        'badge' => 'Sacred Pilgrimage',
                        'badge_tag' => 'tag-sacred',
                        'slug' => 'char-dham-yatra',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Haridwar & Rishikesh',
                        'description' => 'A cultural stop on the enquiry list. The day-wise itinerary, stays, and pricing still need to be confirmed.',
                        'image' => null,
                        'alt' => '',
                        'location' => 'Uttarakhand',
                        'duration' => null,
                        'badge' => 'Cultural',
                        'badge_tag' => 'tag-sacred',
                        'slug' => null,
                        'enquiry' => 'Haridwar & Rishikesh',
                    ],
                    [
                        'title' => 'Girnar',
                        'description' => 'Ascend the sacred mountain of Saurashtra with early dawn vistas, spiritual serenity, and well-supported trail stops.',
                        'image' => 'images/trips/girnar-pilgrimage-trek/1.jpg',
                        'alt' => 'Girnar mountain in Junagadh',
                        'location' => 'Junagadh, Gujarat',
                        'duration' => '2D / 1N',
                        'badge' => 'Sacred Pilgrimage',
                        'badge_tag' => 'tag-sacred',
                        'slug' => 'girnar-pilgrimage-trek',
                        'enquiry' => null,
                    ],
                ],
            ],
            [
                'id' => 'pkg-honeymoon',
                'title' => 'Honeymoon',
                'cards' => [
                    [
                        'title' => 'Himachal',
                        'description' => 'Himachal Pradesh honeymoon enquiry. Dates, stays, and pricing are confirmed when you enquire.',
                        'image' => 'images/state-himachal.jpg',
                        'alt' => 'Hill town and snow peaks in Himachal Pradesh',
                        'location' => 'Himachal Pradesh',
                        'duration' => null,
                        'badge' => 'Honeymoon',
                        'badge_tag' => 'tag-nature',
                        'slug' => null,
                        'enquiry' => 'Himachal Pradesh',
                    ],
                    [
                        'title' => 'Uttarakhand',
                        'description' => 'Uttarakhand honeymoon enquiry. Dates, stays, and pricing are confirmed when you enquire.',
                        'image' => 'images/state-uttarakhand.jpg',
                        'alt' => 'Snow peaks above the clouds in Uttarakhand',
                        'location' => 'Uttarakhand',
                        'duration' => null,
                        'badge' => 'Honeymoon',
                        'badge_tag' => 'tag-nature',
                        'slug' => null,
                        'enquiry' => 'Uttarakhand',
                    ],
                    [
                        'title' => 'Maharashtra Hill station',
                        'description' => 'Maharashtra hill station enquiry. The hill station, stays, and pricing are confirmed when you enquire.',
                        'image' => 'images/trips/harihar-fort-trek/5.jpg',
                        'alt' => 'Misty hills and a lake from the Maharashtra hill trip',
                        'location' => 'Maharashtra',
                        'duration' => null,
                        'badge' => 'Honeymoon',
                        'badge_tag' => 'tag-nature',
                        'slug' => null,
                        'enquiry' => 'Maharashtra Hill Stations',
                    ],
                ],
            ],
            [
                'id' => 'pkg-adventure',
                'title' => 'Adventure',
                'cards' => [
                    [
                        'title' => 'Milam Glacier Trek',
                        'description' => 'A remote 9-to-12-day trek in the Johar Valley, covering around 100 to 130 km round trip.',
                        'image' => 'images/trips/milam-glacier-trek/1.jpg',
                        'alt' => 'Milam Glacier Trek',
                        'location' => 'Pithoragarh, Uttarakhand',
                        'duration' => '9–12 Days',
                        'badge' => 'Himalayan Trek',
                        'badge_tag' => 'tag-trek',
                        'slug' => 'milam-glacier-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Kareri Lake Trek',
                        'description' => 'An easy-to-moderate high-altitude trail in the Dhauladhar range of Kangra district, Himachal Pradesh.',
                        'image' => 'images/trips/kareri-lake-trek/1.jpg',
                        'alt' => 'Kareri Lake Trek in Himachal Pradesh',
                        'location' => 'Dharamshala, Himachal Pradesh',
                        'duration' => '2D / 1N',
                        'badge' => 'Himalayan Trek',
                        'badge_tag' => 'tag-trek',
                        'slug' => 'kareri-lake-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Khaliya Top Trek',
                        'description' => 'An easy-to-moderate Himalayan trek near Munsiyari in the Pithoragarh district of Uttarakhand.',
                        'image' => 'images/trips/khaliya-top-trek/1.jpg',
                        'alt' => 'Khaliya Top Trek near Munsiyari',
                        'location' => 'Munsiyari, Uttarakhand',
                        'duration' => '1–2 Days',
                        'badge' => 'Himalayan Trek',
                        'badge_tag' => 'tag-trek',
                        'slug' => 'khaliya-top-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Harishchandragad',
                        'description' => 'Shown from the existing Harihar Fort and Harishchandragad trip, including Konkan Kada. This card opens that same trip page.',
                        'image' => 'images/trips/harihar-fort-trek/3.jpg',
                        'alt' => 'Stone temple from the Harihar Fort and Harishchandragad trip',
                        'location' => 'Sahyadri, Maharashtra',
                        'duration' => '2D / 1N',
                        'badge' => 'Western Ghats',
                        'badge_tag' => 'tag-ghats',
                        'slug' => 'harihar-fort-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Harihar Fort',
                        'description' => 'Shown from the existing Harihar Fort and Harishchandragad trip, including the rock-cut steps. This card opens that same trip page.',
                        'image' => 'images/trips/harihar-fort-trek/5.jpg',
                        'alt' => 'Misty hills from the Harihar Fort and Harishchandragad trip',
                        'location' => 'Sahyadri, Maharashtra',
                        'duration' => '2D / 1N',
                        'badge' => 'Western Ghats',
                        'badge_tag' => 'tag-ghats',
                        'slug' => 'harihar-fort-trek',
                        'enquiry' => null,
                    ],
                ],
            ],
            [
                'id' => 'pkg-family',
                'title' => 'Family',
                'cards' => [
                    [
                        'title' => 'Munsyari & Kausani',
                        'description' => 'Pickup from Kathgodam, then Ranikhet, a trek to Pandavkholi, Someshwar, Kausani, and Mukteshwar.',
                        'image' => 'images/trips/munsyari-kausani/1.jpg',
                        'alt' => 'Munsyari and Kausani',
                        'location' => 'Kathgodam to Mukteshwar',
                        'duration' => '6 Days',
                        'badge' => 'Family',
                        'badge_tag' => 'tag-trek',
                        'slug' => 'munsyari-kausani',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Dalhousie & Dharamshala',
                        'description' => 'An 8-day Himachal Pradesh journey through Dharamshala, a Kareri Lake trek and camp, Dalhousie, Khajjiar, and a return via Chandigarh towards Surat.',
                        'image' => 'images/trips/dalhousie-dharamshala/3.jpg',
                        'alt' => 'Tibetan monastery with prayer flags from the Dharamshala trip',
                        'location' => 'Himachal Pradesh',
                        'duration' => '8 Days',
                        'badge' => 'Family',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'dalhousie-dharamshala',
                        'enquiry' => null,
                    ],
                ],
            ],
            [
                'id' => 'pkg-weekend',
                'title' => 'Weekend',
                'cards' => [
                    [
                        'title' => 'Mount Abu',
                        'description' => 'Rajasthan’s only hill station offering cool mountain breezes, Guru Shikhar nature walks, and peaceful lake retreats.',
                        'image' => 'images/trips/mount-abu-eco-getaway/1.jpg',
                        'alt' => 'Mount Abu in Rajasthan',
                        'location' => 'Aravalli Range, Rajasthan',
                        'duration' => '3D / 2N',
                        'badge' => 'Hill Station',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'mount-abu-eco-getaway',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Dang',
                        'description' => 'A lush rainforest getaway filled with roaring monsoon waterfalls, bamboo groves, tribal cuisine, and riverside camping.',
                        'image' => 'images/trips/dang-forest-circuit/1.jpg',
                        'alt' => 'Dang forest and waterfalls',
                        'location' => 'Saputara & Dang, Gujarat',
                        'duration' => '3D / 2N',
                        'badge' => 'Forest Trail',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'dang-forest-circuit',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Dediapada',
                        'description' => 'Offbeat river trails, natural plunge pools, and hidden waterfalls nestled in the heart of Shoolpaneshwar Wildlife Sanctuary.',
                        'image' => 'images/trips/dediapada-wilderness-trek/1.jpg',
                        'alt' => 'Dediapada wilderness trek',
                        'location' => 'Shoolpaneshwar, Gujarat',
                        'duration' => '2D / 1N',
                        'badge' => 'Wilderness Trail',
                        'badge_tag' => 'tag-ghats',
                        'slug' => 'dediapada-wilderness-trek',
                        'enquiry' => null,
                    ],
                ],
            ],
        ];
    }

    /**
     * Destination slugs that appear on the tour packages page.
     *
     * @return list<string>
     */
    public static function packageSlugs(): array
    {
        $slugs = [];

        foreach (self::packageGroups() as $group) {
            foreach ($group['cards'] as $card) {
                if (is_string($card['slug']) && $card['slug'] !== '') {
                    $slugs[] = $card['slug'];
                }
            }
        }

        return array_values(array_unique($slugs));
    }

    /**
     * Find a destination by slug.
     *
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    /**
     * Homepage trip finder choices, matched to destination cards.
     *
     * Traveler fit follows the existing trip type: family and easy hill trips for families,
     * treks for solo adventurers, and every listed trip for couples and adult groups.
     *
     * @return array<string, array{label: string, fits: list<string>}>
     */
    public static function tripFinder(): array
    {
        return [
            'adi-kailash-om-parvat' => [
                'label' => 'Adikailash & Om Parvat Yatra',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'char-dham-yatra' => [
                'label' => 'Chardham Yatra',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'munsyari-kausani' => [
                'label' => 'Munsyari & Kausani',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'milam-glacier-trek' => [
                'label' => 'Milam Glacier Trek',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'khaliya-top-trek' => [
                'label' => 'Khaliya Top Trek',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'dalhousie-dharamshala' => [
                'label' => 'Dalhousie & Dharamshala',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'kareri-lake-trek' => [
                'label' => 'Kareri Lake Trek',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'harihar-fort-trek' => [
                'label' => 'Hariharfort & Harishchandragadh',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'girnar-pilgrimage-trek' => [
                'label' => 'Girnar',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'mount-abu-eco-getaway' => [
                'label' => 'Mount Abu',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'dang-forest-circuit' => [
                'label' => 'Dang',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'dediapada-wilderness-trek' => [
                'label' => 'Dediyapada',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
        ];
    }

    /**
     * Resolve a Find trips search to the destination card and the trips that fit the group.
     *
     * @return array{slug: string, title: string, label: string, travelers: string, travel_date_label: ?string, visible_slugs: list<string>}|null
     */
    public static function resolveTripSearch(string $slug, string $travelers, string $travelDate): ?array
    {
        $finder = self::tripFinder();

        if (! isset($finder[$slug])) {
            return null;
        }

        $knownTravelers = ['2 adults', '1 solo adventurer', '4 adults group', 'Family (2 adults + 2 kids)'];
        $travelers = in_array($travelers, $knownTravelers, true) ? $travelers : '';

        $visibleSlugs = [];

        foreach ($finder as $candidate => $meta) {
            if ($candidate === $slug || $travelers === '' || in_array($travelers, $meta['fits'], true)) {
                $visibleSlugs[] = $candidate;
            }
        }

        $dateLabel = null;
        $parsedDate = \DateTimeImmutable::createFromFormat('!Y-m-d', $travelDate);

        if ($parsedDate instanceof \DateTimeImmutable && $parsedDate->format('Y-m-d') === $travelDate) {
            $dateLabel = $parsedDate->format('M j, Y');
        }

        $destination = self::find($slug);

        return [
            'slug' => $slug,
            'title' => is_array($destination) ? (string) $destination['title'] : $finder[$slug]['label'],
            'label' => $finder[$slug]['label'],
            'travelers' => $travelers,
            'travel_date_label' => $dateLabel,
            'visible_slugs' => $visibleSlugs,
        ];
    }

    /**
     * Extra card classes for a resolved trip search.
     */
    public static function cardSearchState(?array $tripSearch, string $slug): string
    {
        if ($tripSearch === null) {
            return '';
        }

        $classes = [];

        if ($tripSearch['slug'] === $slug) {
            $classes[] = 'is-best-match';
        }

        if (! in_array($slug, $tripSearch['visible_slugs'], true)) {
            $classes[] = 'is-trip-hidden';
        }

        return $classes === [] ? '' : ' '.implode(' ', $classes);
    }
}
