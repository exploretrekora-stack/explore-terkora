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
                'gallery' => [
                    [
                        'src' => 'images/trips/adi-kailash-om-parvat/1.jpg',
                        'title' => 'Adi Kailash & Om Parvat Darshan',
                        'caption' => 'Reverent prayers offered facing the sacred snow-clad peaks in the tranquil Vyas Valley near the Indo-Tibet border.',
                    ],
                    [
                        'src' => 'images/trips/adi-kailash-om-parvat/2.jpg',
                        'title' => 'Meditation in High Himalayas',
                        'caption' => 'Peaceful spiritual dhyan amidst pristine mountain peaks and pure Himalayan energy.',
                    ],
                    [
                        'src' => 'images/trips/adi-kailash-om-parvat/3.jpg',
                        'title' => 'Vyas Valley Landscape',
                        'caption' => 'Breathtaking terrain and rugged roads traversed by 4x4 Bolero on the sacred pilgrimage.',
                    ],
                    [
                        'src' => 'images/trips/adi-kailash-om-parvat/4.jpg',
                        'title' => 'Parvati Sarovar & Sacred Waters',
                        'caption' => 'Holy lake situated at 14,750 ft reflecting divine Himalayan summits.',
                    ],
                    [
                        'src' => 'images/trips/adi-kailash-om-parvat/5.jpg',
                        'title' => 'Sacred Bells & Pilgrimage Heritage',
                        'caption' => 'Traditional temple bells and spiritual devotion echoing through the Kumaon Himalayas.',
                    ],
                ],
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
                'category' => 'Trekking & Camping',
                'category_tag' => 'tag-ghats',
                'duration' => '2D / 2N',
                'duration_full' => '2 Days / 2 Nights',
                'location' => 'Nashik & Ahmednagar District, Maharashtra',
                'location_short' => 'Nashik & Ahmednagar, Maharashtra',
                'altitude' => '3,676 ft / 4,665 ft',
                'altitude_full' => 'Harihar Fort approx. 3,676 ft; Harishchandragad approx. 4,665 ft',
                'difficulty' => 'Moderate to Difficult',
                'starting_point' => 'Vadodara',
                'image' => 'images/trips/harihar-fort-trek/1.jpg',
                'gallery' => self::tripGallery('harihar-fort-trek', 'Harihar Fort & Harishchandragad'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'show_generic_claims' => false,
                'hero_actions' => true,
                'tagline' => 'A trekking and camping expedition from Vadodara to Vadodara, with Harihar Fort and Harishchandragad.',
                'card_desc' => 'A 2-day / 2-night trek from Vadodara covering Harihar Fort and Harishchandragad, including Konkan Kada.',
                'perks' => [
                    '80° rock-cut staircase of Harihar Fort',
                    'Konkan Kada viewpoint',
                    'Vadodara to Vadodara',
                ],
                'overview_paragraphs' => [
                    'Harihar Fort & Harishchandragad Trek is a 2-day / 2-night trekking and camping expedition from Vadodara to Vadodara. Difficulty is moderate to difficult. The forts are in Nashik and Ahmednagar district, Maharashtra. It is suited to adventure enthusiasts, trekkers, and nature lovers.',
                    'The schedule leaves Vadodara on Friday night at 10:00 PM and arrives back in Vadodara between 5:00 AM and 6:00 AM after the return journey.',
                ],
                'highlights_heading' => 'Trip Highlights',
                'highlights' => [
                    ['icon' => '🧗', 'title' => 'Harihar Fort staircase', 'desc' => 'Climb the famous 80° rock-cut staircase of Harihar Fort.'],
                    ['icon' => '🏔️', 'title' => 'Sahyadri ranges', 'desc' => 'Witness views of the Sahyadri ranges.'],
                    ['icon' => '🏰', 'title' => 'Harishchandragad Fort', 'desc' => 'Explore the historical Harishchandragad Fort.'],
                    ['icon' => '👀', 'title' => 'Konkan Kada', 'desc' => 'Visit the Konkan Kada viewpoint.'],
                    ['icon' => '🏕️', 'title' => 'Overnight travel and camping', 'desc' => 'Overnight travel and a camping experience.'],
                    ['icon' => '🌲', 'title' => 'Forest trails', 'desc' => 'Trek through dense forests and mountain trails.'],
                ],
                'itinerary_heading' => 'Harihar Fort & Harishchandragad Itinerary',
                'itinerary' => [
                    [
                        'day' => 'Day 0',
                        'title' => 'Departure from Vadodara',
                        'points' => [
                            'Friday night, 10:00 PM departure from Vadodara by private vehicle.',
                            'Overnight journey.',
                        ],
                    ],
                    [
                        'day' => 'Day 1',
                        'title' => 'Harihar Fort Trek, then Harishchandragad base',
                        'desc' => 'Trek duration 2.5–3 hours. Difficulty: moderate. Altitude: approx. 3,676 ft.',
                        'points' => [
                            '06:00 AM: Arrive at Nirgudpada base village, freshen up, and have breakfast.',
                            '07:00 AM: Trek briefing, introduction of trek leaders, and safety instructions.',
                            '10:00 AM: Reach Harihar Fort top for photography, exploration, and rest.',
                            '11:30 AM: Start descending.',
                            '01:30 PM: Reach the base village.',
                            '02:00 PM: Lunch.',
                            '03:00 PM: Proceed towards the Harishchandragad base village.',
                            '07:00 PM: Arrive at the base village campsite or stay and check in. Overnight stay.',
                            '08:00 PM: Dinner.',
                            '09:00 PM: Bonfire and group interactions. Bonfire if conditions permit.',
                        ],
                    ],
                    [
                        'day' => 'Day 2',
                        'title' => 'Harishchandragad Trek and return journey to Vadodara',
                        'desc' => 'Trek duration 4–5 hours. Difficulty: moderate to difficult. Altitude: approx. 4,665 ft.',
                        'points' => [
                            '05:00 AM: Wake-up call.',
                            '05:30 AM: Tea and refreshments.',
                            '06:00 AM: Begin the trek.',
                            'En route: ancient cave structures, Kedareshwar Cave, Taramati Peak, the temple complex, and scenic forest trails.',
                            '11:00 AM: Reach Harishchandragad top. Visit Konkan Kada, Taramati Peak, Kedareshwar Cave, and Harishchandreshwar Temple.',
                            '01:00 PM: Packed lunch.',
                            '02:00 PM: Start descending.',
                            '05:00 PM: Reach the base village and freshen up.',
                            '06:30 PM: Return journey to Vadodara. Overnight journey.',
                        ],
                    ],
                    [
                        'day' => 'Day 3',
                        'title' => 'Arrival at Vadodara',
                        'points' => [
                            '05:00 AM – 06:00 AM arrival at Vadodara.',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'heading' => 'Cost Includes',
                        'items' => [
                            'Vadodara to Vadodara transportation',
                            '1 breakfast',
                            '2 lunches',
                            '1 dinner',
                            'Trek leader and coordinator',
                            'Basic first aid support',
                            'Campsite / homestay accommodation',
                            'Forest entry charges (if applicable)',
                        ],
                    ],
                    [
                        'heading' => 'Cost Excludes',
                        'items' => [
                            'Any personal expenses',
                            'Mineral water bottles',
                            'Travel insurance',
                            'Emergency evacuation expenses',
                            'Anything not mentioned in the inclusions',
                        ],
                    ],
                    [
                        'heading' => 'Things to Carry',
                        'paragraphs' => [
                            'Mandatory:',
                        ],
                        'items' => [
                            'Trekking shoes with good grip',
                            'Backpack (30–40L)',
                            '2 litres of water',
                            'Torch or headlamp',
                            'Rain protection',
                            'Personal medicines',
                            'Energy bars or snacks',
                            'Extra pair of clothes',
                            'Cap and sunglasses',
                            'Power bank',
                        ],
                    ],
                    [
                        'heading' => 'Safety Guidelines',
                        'items' => [
                            'Follow trek leader instructions at all times.',
                            'Avoid littering.',
                            'Alcohol and smoking are strictly prohibited.',
                            'Carry personal medications.',
                            'Respect local culture and environment.',
                            'Trek as a group and avoid wandering alone.',
                        ],
                    ],
                    [
                        'heading' => 'Why Choose Us',
                        'items' => [
                            'Experienced trek leaders',
                            'Safety-focused operations',
                            'Well-planned itinerary',
                            'Quality service',
                            'Adventure with responsible tourism',
                            'Memorable group experience',
                        ],
                    ],
                ],
                'inclusions' => [],
                'exclusions' => [],
                'essentials' => [],
            ],

            'girnar-pilgrimage-trek' => [
                'slug' => 'girnar-pilgrimage-trek',
                'title' => 'Girnar Hill Trek & Junagadh Exploration',
                'enquiry_key' => 'Girnar',
                'category' => 'Sacred Pilgrimage',
                'category_tag' => 'tag-sacred',
                'duration' => '3D / 3N',
                'duration_full' => '3 Days | 3 Nights (Surat / Vadodara / Ahmedabad)',
                'location' => 'Junagadh, Gujarat',
                'location_short' => 'Junagadh, Gujarat',
                'altitude' => '3,665 ft',
                'altitude_full' => '3,665 ft (1,117 m · Guru Dattatreya Peak)',
                'difficulty' => 'Moderate (Roughly 9,999 to 10,000 Stone Steps)',
                'best_season' => 'October – March',
                'starting_point' => 'Surat / Vadodara / Ahmedabad',
                'group_size' => '4 – 15 Travellers',
                'image' => 'images/trips/girnar-pilgrimage-trek/1.jpg',
                'gallery' => self::tripGallery('girnar-pilgrimage-trek', 'Girnar Hill Trek & Junagadh Exploration'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'A perfect blend of Adventure, Spirituality, Nature, and Heritage in the Heart of Junagadh.',
                'card_desc' => 'Ascend roughly 10,000 stone steps to sacred Guru Dattatreya Peak, explore ancient Uparkot Fort, Bhavnath Mahadev Temple, and Willingdon Dam.',
                'perks' => [
                    'Girnar Summit Trek via Old Stairs & 10,000 Steps',
                    'Guru Dattatreya Peak & Maa Amba Temple Darshan',
                    'Uparkot Fort (Navghan Kuvo, Adi Kadi Vav & Buddhist Caves)',
                    'Willingdon Dam Sunset & Bhavnath Mahadev Temple',
                ],
                'overview_paragraphs' => [
                    'Girnar Hill Trek & Junagadh Exploration offers a perfect blend of adventure, spirituality, nature, and heritage in the heart of Junagadh. Mount Girnar is Gujarat’s highest and most revered peak, welcoming yatris and trekkers on a transformative climb of roughly 9,999 to 10,000 stone steps.',
                    'The sacred ascent traverses Jatashankar Mahadev Temple, Hanuman Dhara, Bharat Van, Maa Amba Temple, and reaches the holy summit of Guru Dattatreya Peak at 3,665 ft (1,117 m). Trekkers descend via the scenic New Steps route with a serene visit to the historic Neminath Jain Temple complex.',
                    'Beyond the summit, the journey explores Junagadh’s rich architectural heritage with visits to ancient Uparkot Fort (Navghan Kuvo, Adi Kadi Vav, Buddhist Caves), sunset walks at Willingdon Dam, Bhavnath Mahadev Temple, and sacred Damodar Kund with comfortable private vehicle travel.',
                ],
                'highlights' => [
                    ['icon' => '⛰️', 'title' => 'Guru Dattatreya Peak (3,665 ft)', 'desc' => 'Summit achievement at Gujarat’s highest point with sacred Dattatreya Padukas darshan.'],
                    ['icon' => '🛕', 'title' => 'Maa Amba & Jatashankar Temples', 'desc' => 'Spiritual darshan at ancient shrines along the historic 10,000 steps trail.'],
                    ['icon' => '🏰', 'title' => 'Uparkot Fort & Buddhist Caves', 'desc' => 'Explore 2,300-year-old fort structures, Navghan Kuvo, and ancient Adi Kadi Vav.'],
                    ['icon' => '🌅', 'title' => 'Willingdon Dam Sunset & Damodar Kund', 'desc' => 'Tranquil evening nature walk at Willingdon Dam and holy darshan at Damodar Kund.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 0', 'title' => 'Overnight Departure', 'desc' => '09:00 PM reporting at departure point. 10:00 PM departure for Junagadh by private vehicle from Surat/Vadodara/Ahmedabad with group interaction and overnight journey.'],
                    ['day' => 'Day 1', 'title' => 'Arrival & Heritage Exploration', 'desc' => '07:00 AM arrive in Junagadh, freshen up and breakfast. 09:30 AM explore Uparkot Fort (Navghan Kuvo, Adi Kadi Vav, Buddhist Caves). 01:00 PM hotel check-in and rest. 03:30 PM visit Willingdon Dam for nature walk, photography and sunset views. 06:00 PM Bhavnath Mahadev Temple darshan. 07:30 PM dinner and trek briefing. Overnight stay in Junagadh.'],
                    ['day' => 'Day 2', 'title' => 'Girnar Summit Trek (10,000 Steps)', 'desc' => '05:00 AM wake up call. 06:00 AM start trek via Old Stairs. 07:00 AM Jatashankar Mahadev Temple (500 steps). 08:30 AM Hanuman Dhara (~3,200 steps). 09:00 AM Bharat Van nature trail. 11:00 AM Maa Amba Temple (5,000 steps). 01:00 PM Guru Dattatreya Peak (10,000 steps summit) for darshan, celebration and rest. 01:45 PM start descent via New Steps. 03:30 PM visit sacred Neminath Jain Temple complex. 07:00 PM return to hotel base, relax and freshen up. 08:30 PM dinner, experience sharing session and overnight stay.'],
                    ['day' => 'Day 3', 'title' => 'Spiritual Exploration & Departure', 'desc' => '06:00 AM wake up call. 07:00 AM Bhavnath Mahadev Temple darshan. 08:00 AM tea and refreshments. 09:00 AM Damodar Kund darshan, followed by optional local market visit and souvenir shopping. 10:00 AM departure for return journey with beautiful memories of Girnar.'],
                ],
                'inclusions' => [
                    'Transportation by private vehicle',
                    '2 Nights’ Accommodation in Junagadh',
                    '2 Breakfasts & 2 Dinners',
                    'Refreshments during the tour',
                    'Trek Coordination & Experienced Trek Leader',
                    'Basic First Aid Support',
                    'Local Guidance & Group Photography Assistance',
                ],
                'exclusions' => [
                    'Lunch',
                    'Personal Expenses',
                    'Entry Fees (if applicable)',
                    'Any emergency transportation',
                    'Any cost arising due to natural calamities',
                    'Travel Insurance',
                ],
                'essentials' => [
                    'Trekking Shoes with good grip',
                    'Water Bottle (2 Litres)',
                    'Small Backpack',
                    'Cap & Sunglasses',
                    'Energy Bars / Snacks',
                    'Personal Medicines',
                    'Poncho / Raincoat (Monsoon)',
                    'Torch / Headlamp',
                    'Extra Pair of Clothes',
                ],
            ],

            'mount-abu-eco-getaway' => [
                'slug' => 'mount-abu-eco-getaway',
                'title' => 'Mount Abu',
                'hero_heading' => 'Gateway to Mount Abu — Eco Getaway & Heritage Retreat',
                'enquiry_key' => 'Mount Abu',
                'category' => 'Hill Station & Eco Retreat',
                'category_tag' => 'tag-nature',
                'duration' => '3D / 2N',
                'duration_full' => '3 Days / 2 Nights (Gateway to Mount Abu)',
                'location' => 'Aravalli Range, Sirohi, Rajasthan',
                'location_short' => 'Mount Abu, Rajasthan',
                'altitude' => '4,000 ft (Summit: 5,650 ft)',
                'altitude_full' => '4,000 ft (Guru Shikhar Summit: 5,650 ft / 1,722 m)',
                'difficulty' => 'Easy to Moderate / Leisure (Nature Trails & Sightseeing)',
                'best_season' => 'October – February (Pleasant Sightseeing) & April – June (Summer Escape)',
                'starting_point' => 'Abu Road / Ahmedabad / Surat / Vadodara',
                'group_size' => '2 – 15 Travellers',
                'image' => 'images/trips/mount-abu-eco-getaway/1.jpg',
                'gallery' => [
                    [
                        'src' => 'images/trips/mount-abu-eco-getaway/1.jpg',
                        'title' => 'Nakki Lake & Boating',
                        'caption' => 'Scenic boating amidst the ancient Aravalli Hills in Rajasthan’s only hill station.',
                    ],
                    [
                        'src' => 'images/trips/mount-abu-eco-getaway/2.jpg',
                        'title' => 'Guru Shikhar Sunrise (5,650 ft)',
                        'caption' => 'Panoramic sunrise vistas from the highest summit in Rajasthan and the Aravalli Range.',
                    ],
                    [
                        'src' => 'images/trips/mount-abu-eco-getaway/3.jpg',
                        'title' => 'Dilwara Jain Temples',
                        'caption' => 'Renowned 11th–13th century marble architecture celebrated for exquisite carvings.',
                    ],
                    [
                        'src' => 'images/trips/mount-abu-eco-getaway/4.jpg',
                        'title' => 'Trevor’s Tank & Eco Trails',
                        'caption' => 'Tranquil eco-tourism haven surrounded by verdant forests, birdlife, and nature trails.',
                    ],
                    [
                        'src' => 'images/trips/mount-abu-eco-getaway/5.jpg',
                        'title' => 'Sunset Point & Aravalli Vistas',
                        'caption' => 'Mesmerizing evening sunset illuminating the rolling hills of Mount Abu.',
                    ],
                ],
                'gallery_heading' => 'Mount Abu Eco Getaway Photographs',
                'gallery_intro' => 'Authentic photography captured across Nakki Lake, Guru Shikhar, Peace Park, and the Aravalli Hills:',
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'A refreshing mountain retreat combining Guru Shikhar sunrise, Dilwara Jain Temples, Nakki Lake boating, Trevor’s Tank eco-tourism, and Mount Abu Wildlife Sanctuary.',
                'card_desc' => 'Curated 3-day eco-retreat in Rajasthan’s only hill station featuring Dilwara Temples, Nakki Lake boating, Guru Shikhar sunrise, Trevor’s Tank, and Mount Abu Wildlife Sanctuary.',
                'perks' => [
                    'Dilwara Jain Temples & Nakki Lake Boating',
                    'Guru Shikhar Sunrise (Highest Peak in Aravallis)',
                    'Achalgarh Fort & Tranquil Peace Park',
                    'Trevor\'s Tank & Mount Abu Wildlife Sanctuary',
                ],
                'overview_paragraphs' => [
                    'Mount Abu is Rajasthan’s only hill station, nestled amidst the ancient Aravalli Range and celebrated for its timeless blend of nature, heritage, adventure, and tranquility. Designed as a complete mountain retreat, this Mount Abu Eco Getaway by Explore Trekora combines the finest elements of nature, cultural discovery, and mindful travel.',
                    'The experience takes travelers through the scenic heights of Guru Shikhar (the highest peak in Rajasthan and the Aravalli Range), the peaceful meditation gardens of Peace Park, the eco-rich wildlife haven of Trevor’s Tank, and the iconic lakeside waters of Nakki Lake and Toad Rock.',
                    'Along the way, our team curates enriching experiences that bring travelers closer to the timeless heritage of the world-renowned Dilwara Jain Temples and Achalgarh Fort, while exploring the biodiversity of the Mount Abu Wildlife Sanctuary. Balancing exploration, relaxation, photography, and eco-tourism, this journey offers a rejuvenating escape into the cool climate and verdant hills of Mount Abu.',
                ],
                'highlights_heading' => 'Key Highlights & Eco-Tourism Attractions',
                'highlights' => [
                    [
                        'icon' => '⛰️',
                        'title' => 'Guru Shikhar Sunrise (5,650 ft)',
                        'desc' => 'Breathtaking sunrise views from the highest point in Rajasthan and the entire Aravalli Range.',
                    ],
                    [
                        'icon' => '🛕',
                        'title' => 'Dilwara Jain Temples',
                        'desc' => 'Magnificent 11th–13th century temples world-famous for extraordinary marble craftsmanship and spiritual serenity.',
                    ],
                    [
                        'icon' => '⛵',
                        'title' => 'Nakki Lake & Toad Rock',
                        'desc' => 'Scenic boating amidst the Aravalli Hills and exploration of Mount Abu’s iconic natural toad-shaped rock formation.',
                    ],
                    [
                        'icon' => '🌅',
                        'title' => 'Sunset Point',
                        'desc' => 'Witness a mesmerizing sunset casting golden hues over the rugged mountain horizon.',
                    ],
                    [
                        'icon' => '🧘',
                        'title' => 'Peace Park Meditation Gardens',
                        'desc' => 'An oasis of serenity surrounded by lush greenery, rock gardens, and tranquil meditation spaces.',
                    ],
                    [
                        'icon' => '🏰',
                        'title' => 'Achalgarh Fort & Achaleshwar Mahadev',
                        'desc' => 'Ancient hill fortress with sweeping vistas and the revered historic Achaleshwar Mahadev Temple.',
                    ],
                    [
                        'icon' => '🌿',
                        'title' => 'Trevor’s Tank Eco-Tourism Haven',
                        'desc' => 'Tranquil eco-tourism destination set amidst lush forest, renowned for wildlife spotting, birdwatching, and nature walks.',
                    ],
                    [
                        'icon' => '🦌',
                        'title' => 'Mount Abu Wildlife Sanctuary',
                        'desc' => 'Discover the region\'s rich biodiversity, scenic nature trails, indigenous flora, and wildlife.',
                    ],
                ],
                'itinerary_eyebrow' => '3-DAY EXPEDITION ROUTE',
                'itinerary_heading' => 'Detailed 3-Day Eco-Retreat Itinerary',
                'itinerary' => [
                    [
                        'day' => 'Day 1',
                        'title' => 'Arrival • Heritage & Lakeside Exploration',
                        'desc' => '09:00 AM arrival at Mount Abu and hotel check-in. 09:30 AM freshen up & breakfast. 11:00 AM visit the magnificent Dilwara Jain Temples, renowned for their exquisite marble carvings and spiritual significance. 01:30 PM free time for lunch. 03:00 PM explore Nakki Lake and enjoy boating amidst the scenic Aravalli Hills. 04:30 PM visit Toad Rock, one of Mount Abu\'s most iconic natural rock formations. 05:45 PM witness a mesmerizing sunset at Sunset Point. 07:00 PM explore the local market and enjoy leisure time. 08:30 PM dinner. 10:00 PM overnight stay at Mount Abu.',
                        'points' => [
                            '09:00 AM – Arrival at Mount Abu and Hotel Check-in',
                            '09:30 AM – Freshen Up & Breakfast',
                            '11:00 AM – Visit the magnificent Dilwara Jain Temples (exquisite marble carvings & spiritual heritage)',
                            '01:30 PM – Free Time for Lunch',
                            '03:00 PM – Explore Nakki Lake and enjoy boating amidst the scenic Aravalli Hills',
                            '04:30 PM – Visit Toad Rock, Mount Abu\'s iconic natural rock formation',
                            '05:45 PM – Witness a mesmerizing sunset at Sunset Point',
                            '07:00 PM – Explore the local market and enjoy leisure time',
                            '08:30 PM – Dinner',
                            '10:00 PM – Overnight Stay at Mount Abu',
                        ],
                    ],
                    [
                        'day' => 'Day 2',
                        'title' => 'Eco-Tourism & Mountain Experiences',
                        'desc' => '06:45 AM reach Guru Shikhar, the highest peak in the Aravalli Range (5,650 ft / 1,722 m) and enjoy a breathtaking sunrise view. 09:00 AM breakfast. 10:30 AM explore Peace Park, an oasis of serenity surrounded by lush greenery and meditation gardens. 12:00 PM visit historic Achalgarh Fort and Achaleshwar Mahadev Temple. 01:30 PM free time for lunch. 03:30 PM explore Trevor\'s Tank, a tranquil eco-tourism destination known for its wildlife and scenic beauty. 05:00 PM nature walk & photography session. 06:30 PM return to hotel. 07:30 PM group activities & leisure time. 09:00 PM dinner & overnight stay at Mount Abu.',
                        'points' => [
                            '06:45 AM – Reach Guru Shikhar, the highest peak in the Aravalli Range & enjoy sunrise view',
                            '09:00 AM – Breakfast',
                            '10:30 AM – Explore Peace Park (oasis of serenity, lush greenery & meditation gardens)',
                            '12:00 PM – Visit Achalgarh Fort and Achaleshwar Mahadev Temple',
                            '01:30 PM – Free Time for Lunch',
                            '03:30 PM – Explore Trevor\'s Tank (tranquil eco-tourism destination known for wildlife & scenic beauty)',
                            '05:00 PM – Nature Walk & Photography Session',
                            '06:30 PM – Return to Hotel',
                            '07:30 PM – Group Activities & Leisure Time',
                            '09:00 PM – Dinner & Overnight Stay at Mount Abu',
                        ],
                    ],
                    [
                        'day' => 'Day 3',
                        'title' => 'Wildlife Exploration & Departure',
                        'desc' => '07:00 AM breakfast. 08:00 AM check-out from hotel. 08:30 AM explore Mount Abu Wildlife Sanctuary and discover the region\'s rich biodiversity. 10:30 AM nature trail, scenic photography session & free time for local shopping / souvenir collection. 12:30 PM begin return journey carrying cherished mountain memories.',
                        'points' => [
                            '07:00 AM – Breakfast',
                            '08:00 AM – Check-Out from Hotel',
                            '08:30 AM – Explore Mount Abu Wildlife Sanctuary and discover the region\'s rich biodiversity',
                            '10:30 AM – Nature Trail and Scenic Photography Session & Free Time for Local Shopping / Souvenirs',
                            '12:30 PM – Return Journey with Cherished Memories',
                        ],
                    ],
                ],
                'sections' => [
                    [
                        'heading' => 'Cultural Etiquette & Travel Tips',
                        'paragraphs' => [
                            'Respect local customs and maintain appropriate attire while visiting temples and religious sites. Both men and women should wear modest clothing that covers shoulders and knees.',
                        ],
                        'items' => [
                            'Temple Attire: Modest clothing covering shoulders and knees is mandatory at Dilwara Temples and Achaleshwar Mahadev Temple.',
                            'Footwear: Carry comfortable walking shoes as several attractions involve walking, stairs, and uneven terrain.',
                            'Warm Layers: Keep a light jacket or shawl handy, as mornings and evenings can be pleasantly cool in the hills.',
                            'Hydration: Stay hydrated and carry a reusable water bottle during sightseeing.',
                            'Sun Protection: Use sunscreen, sunglasses, and a cap/hat for protection during daytime exploration.',
                        ],
                    ],
                    [
                        'heading' => 'Responsible Eco-Tourism Reminders',
                        'paragraphs' => [
                            'Keep Mount Abu Paradise Pristine: Follow designated trails and avoid littering to help preserve Mount Abu\'s natural beauty and eco-sensitive environment.',
                            'Help us maintain the cleanliness and serenity of Mount Abu by practicing responsible and eco-friendly tourism.',
                        ],
                        'items' => [
                            'Follow designated trails and do not stray into protected forest areas.',
                            'Strictly avoid littering; carry all waste back to designated disposal bins.',
                            'Respect wildlife at Trevor\'s Tank and the Wildlife Sanctuary by keeping noise levels low.',
                            'Avoid single-use plastics wherever possible and keep Rajasthan’s only hill station pristine.',
                        ],
                    ],
                    [
                        'heading' => 'Required Travel Documents',
                        'items' => [
                            'Valid Government-issued Identity Proof (Aadhaar Card, Voter ID, Driving Licence, or Passport)',
                            'Age Proof documentation for children/seniors where applicable',
                            'Nationality Proof for all travelers',
                        ],
                    ],
                ],
                'inclusions' => [
                    'Transportation',
                    '2 Nights’ Accommodation in Mount Abu',
                    '3 Breakfasts',
                    '2 Dinners',
                    'Refreshments during the tour',
                    'Experienced Trek Leader / Tour Coordinator',
                    'Basic First Aid Support',
                    'Local Guidance',
                    'Group Photography Assistance',
                ],
                'exclusions' => [
                    'Personal Expenses',
                    'Entry Fees (if applicable)',
                    'Any emergency transportation',
                    'Any Cost Arising Due to Natural Calamities',
                    'Travel insurance',
                    'Any other sport or adventure activities',
                ],
                'essentials' => [
                    'Comfortable Walking / Trekking Shoes',
                    'Small Backpack (Daypack)',
                    'Light Jacket / Sweater / Shawl (cool mornings & evenings)',
                    'Sunglasses & Cap / Hat',
                    'Sunscreen & UV Protection',
                    'Personal Medicines & First Aid',
                    'Reusable Water Bottle',
                    'Power Bank & Camera',
                    'Valid Government Photo ID (Aadhaar / Voter ID / Passport)',
                ],
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
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night (Weekend Plan)',
                'location' => 'Dang District, Gujarat',
                'location_short' => 'Dang, Gujarat',
                'altitude' => '2,500 ft',
                'altitude_full' => '2,500 ft (Dang Forest)',
                'difficulty' => 'Easy to Moderate (Nature Walk & Fort Trek)',
                'best_season' => 'July – February (Monsoon Greenery Best)',
                'starting_point' => 'Surat / Valsad / Navsari',
                'group_size' => '4 – 20 Travellers',
                'image' => 'images/trips/dang-forest-circuit/1.jpg',
                'gallery' => self::tripGallery('dang-forest-circuit', 'Dang Forest Circuit'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'An exciting 2-day weekend plan exploring historic Songadh Fort, hidden waterfalls, deep forest night stay, and evening DJ & bonfire.',
                'card_desc' => '2-day weekend plan exploring Songadh Fort, hidden Dang waterfalls, overnight stay in the middle of the forest, and night DJ + bonfire.',
                'perks' => [
                    'Historic Songadh Fort Exploration',
                    'Hidden Waterfall in Deep Dang Forest',
                    'Overnight Stay in the Middle of the Forest',
                    'Night DJ Party & Cozy Bonfire Evening',
                ],
                'overview_paragraphs' => [
                    'Dang is the lush green forest heart of Gujarat, celebrated for dense teak forests, rushing monsoon rivers, and untouched natural beauty.',
                    'This dedicated 2-day weekend plan takes you to historic Songadh Fort and pristine hidden waterfalls tucked inside the deep forest.',
                    'Experience an unforgettable night stay in the middle of the forest, complete with an energetic evening of Night DJ music, dancing, and a cozy bonfire under the starlit sky.',
                ],
                'highlights' => [
                    ['icon' => '🏰', 'title' => 'Songadh Fort Exploration', 'desc' => 'Trek up the historic hilltop fort with panoramic vistas over South Gujarat.'],
                    ['icon' => '💧', 'title' => 'Hidden Forest Waterfall', 'desc' => 'Discover secluded cascading waterfalls tucked inside the verdant forest canopy.'],
                    ['icon' => '🏕️', 'title' => 'Night Stay in Middle of the Forest', 'desc' => 'Immerse yourself in nature with an authentic overnight forest campsite/resort stay.'],
                    ['icon' => '🔥', 'title' => 'Night DJ + Bonfire', 'desc' => 'Celebrate the forest evening with music, dancing, and a cozy bonfire gathering.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Songadh Fort, Hidden Waterfall & Forest Night Stay with DJ + Bonfire', 'desc' => 'Departure from base and travel towards Dang. Visit and explore the historic Songadh Fort. Proceed deep into the forest to discover a pristine hidden waterfall and enjoy refreshing nature time. Check in to the forest stay in the middle of the jungle. Evening celebration featuring Night DJ, group dancing, and a warm bonfire with dinner. Overnight stay in the forest.'],
                    ['day' => 'Day 2', 'title' => 'Morning Jungle Trail, Local Sightseeing & Return', 'desc' => 'Wake up to the birdsong and fresh forest breeze. Enjoy morning breakfast, take a relaxing walk along jungle trails, and begin the return journey with great memories.'],
                ],
                'inclusions' => [
                    'Forest accommodation (stay in the middle of the forest)',
                    'Breakfast & dinner',
                    'Transport from designated pickup points',
                    'Night DJ & bonfire arrangement',
                    'Trek leader & local guidance',
                ],
                'exclusions' => [
                    'Lunch & personal snacks',
                    'Personal expenses',
                ],
                'essentials' => [
                    'Comfortable trekking / walking footwear',
                    'Extra pair of clothes (for waterfall)',
                    'Water bottle and personal medicines',
                    'Raincoat / poncho during monsoon',
                ],
            ],

            'dediapada-wilderness-trek' => [
                'slug' => 'dediapada-wilderness-trek',
                'title' => 'Dediyapada Wilderness Trek',
                'enquiry_key' => 'Dediyapada',
                'category' => 'Wilderness Trail',
                'category_tag' => 'tag-ghats',
                'duration' => '2D / 1N',
                'duration_full' => '2 Days / 1 Night (Weekend Plan)',
                'location' => 'Dediyapada, Narmada, Gujarat',
                'location_short' => 'Dediyapada, Gujarat',
                'altitude' => '2,200 ft',
                'altitude_full' => '2,200 ft (Canyon & Forest Trails)',
                'difficulty' => 'Moderate (Hiking & Trekking Trails)',
                'best_season' => 'July – February (Monsoon & Winter Best)',
                'starting_point' => 'Vadodara / Bharuch / Surat',
                'group_size' => '4 – 20 Travellers',
                'image' => 'images/trips/dediapada-wilderness-trek/1.jpg',
                'gallery' => self::tripGallery('dediapada-wilderness-trek', 'Dediyapada Wilderness Trek'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Scenic weekend plan exploring mountain roads, hidden gems, hiking and trekking with friends and family, and night stay camping.',
                'card_desc' => 'Weekend plan in Dediyapada: scenic mountain road drive, hidden gems, hiking and trekking with friends and family, and night stay camping.',
                'perks' => [
                    'Scenic Mountain Road Drive & Vistas',
                    'Explore Hidden Gems of Dediyapada',
                    'Hiking & Trekking for Friends & Family',
                    'Immersive Night Stay Camping in Nature',
                ],
                'overview_paragraphs' => [
                    'Dediyapada in the Narmada region is celebrated for scenic mountain roads, dense forests, and pristine wilderness trails.',
                    'This weekend plan is crafted for friends and families looking to reconnect with nature through hiking, trekking, and exploring unspoiled hidden gems.',
                    'Complete your adventure with an authentic night stay camping under the stars, enjoying crisp outdoor air and memorable camp bonding.',
                ],
                'highlights' => [
                    ['icon' => '🛣️', 'title' => 'Scenic Mountain Roads', 'desc' => 'Enjoy the breathtaking drive through winding mountain roads and lush valleys.'],
                    ['icon' => '💎', 'title' => 'Explore Hidden Gems', 'desc' => 'Discover secluded waterfalls, rock canyons, and secret natural spots in Dediyapada.'],
                    ['icon' => '🥾', 'title' => 'Hiking & Trekking Trails', 'desc' => 'Exciting trails suited for both adventurous trekkers and groups of friends/families.'],
                    ['icon' => '⛺', 'title' => 'Night Stay Camping', 'desc' => 'Experience outdoor camping with tents, campfire, and stargazing in the wild.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Mountain Road Drive, Hidden Gems Trek & Night Stay Camping', 'desc' => 'Depart from pickup points and soak in the beauty of scenic winding mountain roads leading to Dediyapada. Start trekking and hiking to explore secret waterfalls and hidden gems. Spend time enjoying nature with friends and family. Reach campsite, set up tents, and enjoy night stay camping under the open sky with dinner and campfire.'],
                    ['day' => 'Day 2', 'title' => 'Morning Hike, Riverside Leisure & Departure', 'desc' => 'Wake up to the sounds of nature. Enjoy morning tea and breakfast at camp. Take a short morning hike or relax by natural streams before packing up for the return journey.'],
                ],
                'inclusions' => [
                    'Camping tents & night stay setup',
                    'All meals (breakfast, dinner & tea)',
                    'Trek leader and local guidance',
                    'Forest permissions and route guidance',
                ],
                'exclusions' => [
                    'Personal transport to base (or optional group vehicle)',
                    'Personal expenses & snacks',
                ],
                'essentials' => [
                    'Comfortable trekking shoes with good grip',
                    'Extra pair of clothes and towel',
                    'Personal water bottle and medicines',
                    'Torch / headlamp for night camping',
                ],
            ],

            'gateway-to-malvan' => [
                'slug' => 'gateway-to-malvan',
                'title' => 'Gateway to Malvan',
                'enquiry_key' => 'Malvan',
                'category' => 'Coastal & Sea Fort',
                'category_tag' => 'tag-nature',
                'duration' => '3D / 2N',
                'duration_full' => '3 Days / 2 Nights (Coastal & Marine Adventure)',
                'location' => 'Malvan, Sindhudurg, Maharashtra',
                'location_short' => 'Malvan, Maharashtra',
                'altitude' => 'Sea Level',
                'altitude_full' => 'Sea Level (Konkan Coastline)',
                'difficulty' => 'Easy to Moderate (Watersports & Fort Walk)',
                'best_season' => 'October to February (Water sports) & July to September (Konkan monsoons)',
                'starting_point' => 'Malvan / Kudal / Mumbai / Pune',
                'group_size' => '4 – 15 Travellers',
                'image' => 'images/trips/gateway-to-malvan/1.jpg',
                'gallery' => self::tripGallery('gateway-to-malvan', 'Gateway to Malvan'),
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'Picturesque coastal town in Sindhudurg renowned for turquoise waters, historic Maratha sea forts, vibrant coral life, and rich seafood culture.',
                'card_desc' => 'Experience scuba diving, thrilling watersports at Chivla Beach, historic Sindhudurg Fort, Nivati Lighthouse boat trip, kayaking, and authentic Malvani thalis.',
                'perks' => [
                    'Scuba Diving & Coral Life at Marine Sanctuary',
                    '17th-Century Sindhudurg Sea Fort & Shivaji Maharaj Statue',
                    'Watersports at Chivla Beach (Parasailing, Jet Ski, Banana Ride, Snorkeling)',
                    'Nivati Lighthouse Boat Trip, Khavane Kayaking & Bhogawe Beach',
                    'Authentic Malvani Thalis, Solkadhi & Shirvale Rus',
                ],
                'overview_paragraphs' => [
                    'Malvan is a picturesque coastal town and taluka in the Sindhudurg district of Maharashtra’s Konkan region, renowned for its turquoise waters, historic Maratha sea forts, vibrant coral life, and rich seafood culture.',
                    'Malvan strikes the perfect balance between exhilarating marine adventure and slow-paced coastal relaxation, offering travelers a deeply rewarding escape into Maharashtra’s vibrant Konkan culture. The journey centers on checking off bucket-list experiences—from scuba diving among the pristine coral reefs of the Malvan Marine Sanctuary to catching thrilling high-speed water sports at Chivla Beach.',
                    'Beyond the water, the trip uncovers rich regional heritage through the towering sea walls of the 17th-century Sindhudurg Fort, while immersing your senses in the bold, fiery depths of authentic Malvani thalis and Solkadhi. Ultimately, this getaway delivers a complete sensory exploration, leaving you with unforgettable coastal views, a deep appreciation for Maratha history, and a suitcase packed with local cashews and fragrant Konkani spices.',
                ],
                'highlights' => [
                    ['icon' => '🤿', 'title' => 'Scuba Diving & Snorkeling', 'desc' => 'Explore the vibrant coral life and marine biodiversity of the Malvan Marine Sanctuary.'],
                    ['icon' => '🏰', 'title' => 'Historic Sindhudurg Sea Fort', 'desc' => '17th-century sea fortress built by Chhatrapati Shivaji Maharaj with towering ocean-bound walls.'],
                    ['icon' => '🚤', 'title' => 'Watersports at Chivla Beach', 'desc' => 'High-speed thrilling Jet Ski rides, Banana rides, and Parasailing over turquoise Konkan waters.'],
                    ['icon' => '🛶', 'title' => 'Nivati Lighthouse & Khavane Kayaking', 'desc' => '2.5 to 3-hour boat trip to Nivati Lighthouse, kayaking at Khavane, and relaxation at Bhogawe Beach.'],
                    ['icon' => '🍛', 'title' => 'Authentic Malvani Cuisine', 'desc' => 'Savor fiery Malvani fish thalis, refreshing Solkadhi, Shirvale Rus, and local Falooda.'],
                    ['icon' => '🛕', 'title' => 'Suvarna Ganpati & Shivaji Maharaj Statue', 'desc' => 'Pay respects at the revered golden Ganpati temple and Chhatrapati Shivaji Maharaj statue.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Morning Arrival, Nivati Lighthouse, Kayaking & Bhogawe Beach', 'desc' => 'Morning arrival at Malvan. 09:00 AM breakfast featuring traditional Shirvale Rus. 09:45 AM visit the sacred Suvarna Ganpati Temple. 11:00 AM scenic 30 km ride to Shriramwadi, Nivati for the Nivati Lighthouse boat trip (2.5 to 3 hours with refreshments at lighthouse). 02:00 PM post-boat trip authentic Konkani lunch. 03:30 PM proceed to Khavane Kayak point for 45 minutes of scenic kayaking. 04:30 PM to 06:30 PM relax at Bhogawe Beach or try optional paramotoring. 07:30 PM hotel check-in and freshen up. 08:30 PM dinner and explore the vibrant local market. Overnight stay in Malvan.'],
                    ['day' => 'Day 2', 'title' => 'Watersports at Chivla Beach & Historic Sindhudurg Fort', 'desc' => '08:00 AM breakfast. 09:00 AM to 12:00 PM high-energy watersports activities at Chivla Beach including Snorkeling, Scuba Diving, Jet Ski ride, Banana ride, and Parasailing. 12:00 PM return to hotel and freshen up. 12:30 PM to 01:30 PM traditional Malvani lunch. 01:00 PM visit Chhatrapati Shivaji Maharaj Statue. 02:00 PM boat ride and guided tour of historic Sindhudurg Fort. 04:00 PM explore local markets, shop for Konkani cashews and spices, and sample local Falooda. Evening dinner and relaxing overnight stay.'],
                    ['day' => 'Day 3', 'title' => 'Coastal Leisure, Souvenirs & Departure', 'desc' => '08:00 AM morning breakfast. Enjoy a relaxed walk along the serene shoreline or pick up last-minute local delicacies. Pack unforgettable coastal memories of Sindhudurg and begin the return journey.'],
                ],
                'inclusions' => [
                    'Transportation',
                    '2 Nights’ Accommodation',
                    '2 Breakfasts & 2 Dinners',
                    'Refreshments',
                    'Govt. Boat fee for Fort',
                    'Experienced Trek Leader',
                    'Basic First Aid Support',
                    'Local Guidance & Group Photography Assistance',
                ],
                'exclusions' => [
                    'Lunch',
                    'Personal Expenses',
                    'Entry Fees (if applicable)',
                    'Any emergency transportation',
                    'Any Cost Arising Due to Natural Calamities',
                    'Travel insurance',
                    'Any water sport activities',
                ],
                'essentials' => [
                    'Water Bottle (2 Litres)',
                    'Small Backpack',
                    'Cap & Sunglasses',
                    'Energy Bars / Snacks',
                    'Personal Medicines',
                    'Poncho / Raincoat (Monsoon)',
                    'Torch / Headlamp',
                    'Extra Pair of Clothes',
                    'Identity proof, age proof & nationality proof',
                ],
            ],

            'sembalpani' => [
                'slug' => 'sembalpani',
                'title' => 'Sembalpani Eco Trek & Hills',
                'enquiry_key' => 'Sembalpani',
                'category' => 'Nature & Hills',
                'category_tag' => 'tag-nature',
                'duration' => '2–3 Days',
                'duration_full' => '2 – 3 Days (Weekend Nature & Hill Trek Plan)',
                'location' => 'Banaskantha, Gujarat',
                'location_short' => 'Banaskantha, Gujarat',
                'altitude' => '1,800 ft',
                'altitude_full' => '1,800 ft (Kanjero Dungar & Lion\'s Rock)',
                'difficulty' => 'Easy to Moderate (Scenic Hill Walks & Rock Formations)',
                'best_season' => 'October – March (Post-Monsoon & Winter Best)',
                'starting_point' => 'Ahmedabad / Palanpur / Vadodara',
                'group_size' => '4 – 20 Travellers',
                'image' => 'images/trips/Sembalpani/1.jpg',
                'gallery' => [
                    [
                        'src' => 'images/trips/Sembalpani/1.jpg',
                        'title' => "Digmarathi (Lion's rock)",
                        'caption' => "Majestic natural rock formation resembling a resting lion amidst the scenic Aravalli foothills.",
                    ],
                    [
                        'src' => 'images/trips/Sembalpani/2.jpg',
                        'title' => 'Kanjero Dungar Ridge',
                        'caption' => 'Panoramic hilltop vistas and rolling forest trails climbing up Kanjero Dungar.',
                    ],
                    [
                        'src' => 'images/trips/Sembalpani/3.jpg',
                        'title' => 'Chamunda tekari Viewpoint',
                        'caption' => 'Sacred hilltop shrine offering 360-degree sunset and valley perspectives.',
                    ],
                    [
                        'src' => 'images/trips/Sembalpani/4.jpg',
                        'title' => 'Sembalpani Campsite & Trails',
                        'caption' => 'Cozy eco-stay nestled under the starlit canopy with fresh mountain breeze.',
                    ],
                    [
                        'src' => 'images/trips/Sembalpani/5.jpg',
                        'title' => 'Wilderness Exploration',
                        'caption' => 'Exploring untouched nature trails, boulder pathways, and pristine local vegetation.',
                    ],
                ],
                'price_label' => 'PACKAGE PRICE',
                'price_value' => 'Get a Quote',
                'tagline' => 'A captivating 2 to 3-day eco-adventure in Banaskantha exploring Digmarathi (Lion\'s rock), Kanjero Dungar, and Chamunda tekari.',
                'card_desc' => 'Explore Digmarathi (Lion\'s rock), Kanjero Dungar, and Chamunda tekari over a refreshing 2 to 3-day nature weekend getaway.',
                'perks' => [
                    'Digmarathi (Lion\'s rock) Exploration',
                    'Kanjero Dungar Scenic Summit Trek',
                    'Chamunda tekari Viewpoint & Shrine',
                    '2–3 Days Relaxed Nature & Camp Stay',
                ],
                'overview_paragraphs' => [
                    'Sembalpani is a pristine nature getaway tucked away in the Aravalli hills of Banaskantha, North Gujarat, offering rich landscapes, boulder-strewn ridges, and fresh outdoor atmosphere.',
                    'This 2 to 3-day experience brings together thrilling natural wonders—from the iconic Digmarathi (Lion\'s rock) formation to the sweeping heights of Kanjero Dungar and the tranquil spiritual vibe of Chamunda tekari.',
                    'Whether you are visiting with friends, family, or solo, it provides an authentic offbeat weekend escape with guided trails, campfire nights, and memorable viewpoints.',
                ],
                'highlights' => [
                    ['icon' => '🦁', 'title' => "Digmarathi (Lion's rock)", 'desc' => 'Marvel at the striking Lion\'s Rock formation with expansive views of the wilderness.'],
                    ['icon' => '⛰️', 'title' => 'Kanjero Dungar Trek', 'desc' => 'Hike along scenic hill trails to reach breezy viewpoints overlooking Banaskantha.'],
                    ['icon' => '🛕', 'title' => 'Chamunda tekari', 'desc' => 'Visit the hilltop Chamunda tekari shrine for serene sunset views and cultural heritage.'],
                    ['icon' => '🏕️', 'title' => '2–3 Days Nature Stay', 'desc' => 'Comfortable eco-camping, stargazing, local Gujarati cuisine, and warm bonfire gatherings.'],
                ],
                'itinerary' => [
                    ['day' => 'Day 1', 'title' => 'Arrival, Campsite Check-in & Digmarathi (Lion\'s rock) Exploration', 'desc' => 'Depart from base city and arrive at Sembalpani. Check in to the nature campsite/resort and freshen up. Post lunch, begin the guided nature trail to the renowned Digmarathi (Lion\'s rock) landmark. Capture photos and witness panoramic valley vistas. Evening campfire, stargazing, and delicious local dinner.'],
                    ['day' => 'Day 2', 'title' => 'Kanjero Dungar Summit Trek & Sunset at Chamunda tekari', 'desc' => 'Early morning sunrise call and breakfast. Embark on the trek up Kanjero Dungar, enjoying rocky terrains, birdwatching, and mountain breeze. Rest post-trek. In the late afternoon, proceed towards Chamunda tekari for a peaceful sunset viewpoint and sacred darshan. Evening group activities and overnight camp stay.'],
                    ['day' => 'Day 3', 'title' => 'Morning Nature Walk & Return Journey', 'desc' => 'Enjoy morning tea and an optional village nature walk. Savor breakfast, pack fond memories of the rugged hills, and begin the comfortable return journey.'],
                ],
                'inclusions' => [
                    'Accommodation in eco-camp / resort (2–3 Days)',
                    'Nutritious meals (Breakfast, Lunch & Dinner as per plan)',
                    'Guided visits to Digmarathi (Lion\'s rock), Kanjero Dungar & Chamunda tekari',
                    'Trek coordinator & local guide assistance',
                    'Evening campfire & group activities',
                ],
                'exclusions' => [
                    'Personal expenses & extra snacks',
                    'Personal travel insurance',
                    'Any transport not mentioned in the inclusions',
                ],
                'essentials' => [
                    'Comfortable trekking shoes with solid grip',
                    'Water bottle (2 litres) and hydration mix',
                    'Light backpack, sun hat & sunglasses',
                    'Light jacket or fleece for cool evenings',
                    'Personal medicines and basic toiletries',
                ],
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
                        'title' => 'Girnar Hill Trek',
                        'description' => 'Ascend roughly 10,000 stone steps to sacred Guru Dattatreya Peak, explore ancient Uparkot Fort, Bhavnath Mahadev Temple, and Willingdon Dam.',
                        'image' => 'images/trips/girnar-pilgrimage-trek/1.jpg',
                        'alt' => 'Girnar mountain in Junagadh',
                        'location' => 'Junagadh, Gujarat',
                        'duration' => '3D / 3N',
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
                        'description' => 'Harishchandragad Fort, Konkan Kada, Taramati Peak, Kedareshwar Cave, and Harishchandreshwar Temple. About 4–5 hours, moderate to difficult, approx. 4,665 ft.',
                        'image' => 'images/trips/harihar-fort-trek/3.jpg',
                        'alt' => 'Harishchandragad from the Harihar Fort and Harishchandragad trip',
                        'location' => 'Nashik & Ahmednagar, Maharashtra',
                        'duration' => '2D / 2N',
                        'badge' => 'Western Ghats',
                        'badge_tag' => 'tag-ghats',
                        'slug' => 'harihar-fort-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Harihar Fort',
                        'description' => 'The 80° rock-cut staircase of Harihar Fort. About 2.5–3 hours, moderate, approx. 3,676 ft. Base village: Nirgudpada.',
                        'image' => 'images/trips/harihar-fort-trek/5.jpg',
                        'alt' => 'Harihar Fort from the Harihar Fort and Harishchandragad trip',
                        'location' => 'Nashik & Ahmednagar, Maharashtra',
                        'duration' => '2D / 2N',
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
                        'description' => 'Curated 3-day eco-retreat in Rajasthan’s only hill station featuring Dilwara Temples, Nakki Lake boating, Guru Shikhar sunrise, Trevor’s Tank, and Mount Abu Wildlife Sanctuary.',
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
                        'title' => 'Dang Forest Circuit',
                        'description' => '2-day weekend plan exploring Songadh Fort, hidden Dang waterfalls, overnight stay in the middle of the forest, and night DJ + bonfire.',
                        'image' => 'images/trips/dang-forest-circuit/1.jpg',
                        'alt' => 'Dang forest and waterfalls',
                        'location' => 'Saputara & Dang, Gujarat',
                        'duration' => '2D / 1N',
                        'badge' => 'Forest Trail',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'dang-forest-circuit',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Dediyapada Wilderness',
                        'description' => 'Weekend plan in Dediyapada: scenic mountain road drive, hidden gems, hiking and trekking with friends and family, and night stay camping.',
                        'image' => 'images/trips/dediapada-wilderness-trek/1.jpg',
                        'alt' => 'Dediyapada wilderness trek',
                        'location' => 'Shoolpaneshwar, Gujarat',
                        'duration' => '2D / 1N',
                        'badge' => 'Wilderness Trail',
                        'badge_tag' => 'tag-ghats',
                        'slug' => 'dediapada-wilderness-trek',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Gateway to Malvan',
                        'description' => 'Scuba diving, water sports at Chivla Beach, historic Sindhudurg Fort, Nivati Lighthouse boat trip, kayaking, and authentic Malvani cuisine.',
                        'image' => 'images/trips/gateway-to-malvan/1.jpg',
                        'alt' => 'Gateway to Malvan coastal beach and sea fort',
                        'location' => 'Malvan, Maharashtra',
                        'duration' => '3D / 2N',
                        'badge' => 'Coastal & Sea Fort',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'gateway-to-malvan',
                        'enquiry' => null,
                    ],
                    [
                        'title' => 'Sembalpani Eco Trek',
                        'description' => '2 to 3-day weekend nature getaway: Digmarathi (Lion\'s rock), Kanjero Dungar trek, Chamunda tekari viewpoint, and peaceful camp stay.',
                        'image' => 'images/trips/Sembalpani/1.jpg',
                        'alt' => 'Sembalpani Lion\'s Rock and Kanjero Dungar hills',
                        'location' => 'Banaskantha, Gujarat',
                        'duration' => '2–3 Days',
                        'badge' => 'Eco & Hill Trek',
                        'badge_tag' => 'tag-nature',
                        'slug' => 'sembalpani',
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
     * Destinations whose detail pages are not open yet.
     */
    public static function isComingSoon(string $slug): bool
    {
        return (bool) (self::all()[$slug]['coming_soon'] ?? false);
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
                'label' => 'Girnar Hill Trek & Junagadh Exploration',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'mount-abu-eco-getaway' => [
                'label' => 'Mount Abu',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'dang-forest-circuit' => [
                'label' => 'Dang Forest Circuit',
                'fits' => ['2 adults', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'dediapada-wilderness-trek' => [
                'label' => 'Dediyapada Wilderness Trek',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group'],
            ],
            'gateway-to-malvan' => [
                'label' => 'Gateway to Malvan',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group', 'Family (2 adults + 2 kids)'],
            ],
            'sembalpani' => [
                'label' => 'Sembalpani (Lion\'s Rock & Kanjero Dungar)',
                'fits' => ['2 adults', '1 solo adventurer', '4 adults group', 'Family (2 adults + 2 kids)'],
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
