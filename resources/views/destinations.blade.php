<x-layout>
    <x-navbar />

    <main class="dest-page">
        <!-- Destinations Hero Header (Image-2 UI matching Destinations Data) -->
        <section class="pkg-hero-banner dest-hero-banner" id="dest-hero">
            <div class="pkg-hero-media">
                <img 
                    src="{{ asset('images/dest-hero-adventure.jpg') }}" 
                    alt="All Destinations &amp; Trails – Explore Trekora" 
                    class="pkg-hero-img"
                    loading="eager"
                />
                <div class="pkg-hero-overlay"></div>
            </div>

            <div class="wrap pkg-hero-container">
                <!-- Center Content Box -->
                <div class="pkg-hero-content dest-hero-content-center">
                    <!-- Top Breadcrumb (Centered & Perfectly Aligned) -->
                    <nav class="pkg-hero-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep">/</span>
                        <span class="curr">All Destinations &amp; Trails</span>
                    </nav>

                    <!-- Sun & Mountain Crest Emblem -->
                    <div class="pkg-hero-emblem" aria-hidden="true">
                        <svg viewBox="0 0 100 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Radiating Sun Rays -->
                            <path d="M50 4 V11" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M37 8 L40 14" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M63 8 L60 14" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M26 16 L31 21" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M74 16 L69 21" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M17 28 L23 31" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M83 28 L77 31" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M12 42 L18 43" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M88 42 L82 43" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <!-- Sun Arc -->
                            <path d="M30 46 A22 22 0 0 1 70 46" stroke="#ffffff" stroke-width="2" stroke-dasharray="3 3"/>
                            <!-- Twin Mountain Peaks -->
                            <path d="M8 60 L32 26 L48 44 L68 18 L92 60 Z" fill="#ffffff"/>
                            <!-- Mountain Shading / Crest Ridgelines -->
                            <path d="M32 26 L38 60" stroke="#0a2a26" stroke-width="2" stroke-linecap="round"/>
                            <path d="M68 18 L58 60" stroke="#0a2a26" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <!-- Script Eyebrow "Discover Your Next Escape" -->
                    <div class="pkg-hero-script">Discover Your Next Escape</div>

                    <!-- Main Headline (Destinations Page Headline) -->
                    <h1 class="pkg-hero-title">Find your next adventure.</h1>

                    <!-- Description Subtitle -->
                    <p class="pkg-hero-desc">
                        From sacred Himalayan journeys to scenic trekking trails and peaceful hill stations, discover destinations worth exploring with Explore Trekora.
                    </p>

                    <!-- Search Bar & Category Filter Chips -->
                    <div class="dest-hero-search-box">
                        <!-- Search Bar -->
                        <div class="dest-search-wrap">
                            <svg class="dest-search-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="8.5" cy="8.5" r="5.5"/>
                                <path d="M12.5 12.5L17 17"/>
                            </svg>
                            <input 
                                type="text" 
                                id="dest-search" 
                                class="dest-search-input" 
                                placeholder="Search destinations or treks..." 
                                aria-label="Search destinations or treks"
                            >
                            <button type="button" id="dest-search-filter-btn" class="dest-search-filter-btn" aria-label="Filter and search destinations">
                                <svg class="search-filter-ic" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M3 6h7m4 0h3M3 14h3m4 0h7"/>
                                    <circle cx="12" cy="6" r="2.2" fill="currentColor"/>
                                    <circle cx="8" cy="14" r="2.2" fill="currentColor"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Category Filter Chips -->
                        <div class="dest-filter-chips dest-filter-chips-hero" role="tablist" aria-label="Destination categories">
                            <button type="button" class="dest-tab active" data-filter="all">All Destinations</button>
                            <button type="button" class="dest-tab" data-filter="himalayan">Himalayan Treks</button>
                            <button type="button" class="dest-tab" data-filter="pilgrimage">Sacred Pilgrimage</button>
                            <button type="button" class="dest-tab" data-filter="ghats">Forts &amp; Trails</button>
                            <button type="button" class="dest-tab" data-filter="nature">Hill Stations</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Torn-Paper Wave Edge Divider (merging into white listing section below) -->
            <div class="pkg-hero-torn" aria-hidden="true">
                <svg viewBox="0 0 1440 90" preserveAspectRatio="none" fill="#ffffff">
                    <path d="M0,38 C35,52 68,58 102,42 C140,24 178,48 215,62 C255,76 292,54 330,38 C370,22 408,46 446,60 C485,74 522,48 560,34 C600,20 638,46 676,62 C715,78 752,50 790,34 C830,18 868,44 906,58 C945,72 982,50 1020,36 C1060,22 1098,48 1136,64 C1175,80 1212,52 1250,36 C1290,20 1328,46 1365,58 C1395,68 1420,52 1440,44 L1440,90 L0,90 Z"></path>
                </svg>
            </div>
        </section>

        <!-- Destination Cards Listing Section -->
        <section class="dest-listing">
            <div class="wrap">
                @if (! empty($tripSearch))
                    <p class="dest-match-note" id="dest-match-note">
                        Best match for <strong>{{ $tripSearch['title'] }}</strong>
                        @if ($tripSearch['travel_date_label'])
                            <span>· {{ $tripSearch['travel_date_label'] }}</span>
                        @endif
                        @if ($tripSearch['travelers'] !== '')
                            <span>· {{ $tripSearch['travelers'] }}</span>
                        @endif
                    </p>
                @endif
                <div class="dest-grid" id="dest-grid">
                    
                    <!-- 1. Adikailash & Om Parvat -->
                    <article id="dest-adi-kailash-om-parvat" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'adi-kailash-om-parvat') }}" data-slug="adi-kailash-om-parvat" data-category="pilgrimage" data-title="Adi Kailash & Om Parvat Yatra" data-location="Uttarakhand">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/adi-kailash-om-parvat/1.jpg') }}" alt="Adi Kailash & Om Parvat Yatra in Uttarakhand" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-sacred">Sacred Pilgrimage</span>
                                <span class="dest-badge tag-days">8D / 7N</span>
                            </div>
                            <span class="dest-card-location">📍 Dharchula &amp; Vyas Valley, Uttarakhand</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Adi Kailash &amp; Om Parvat Yatra</h3>
                            <p class="dest-card-desc">Sacred Vedic pilgrimage through Vyas Valley near the Indo-Tibet border. Witness the divine naturally formed snow 'ॐ' on Om Parvat, holy Parvati Sarovar (14,750 ft), and revered Adi Kailash.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> 14,750 ft Parvati Sarovar &amp; Gauri Kund</li>
                                <li><span>✓</span> Miraculous Snow 'ॐ' on Om Parvat</li>
                                <li><span>✓</span> Inner Line Permits &amp; 4x4 Bolero Included</li>
                                <li><span>✓</span> Sacred Kalapani &amp; Vyas Gufa Darshan</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'adi-kailash-om-parvat') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Adi Kailash & Om Parvat" data-title="Adi Kailash &amp; Om Parvat Yatra" data-location="Dharchula &amp; Vyas Valley, Uttarakhand" data-days="8D / 7N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Adi Kailash & Om Parvat Yatra (8D / 7N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 2. Chardham Yatra -->
                    <article id="dest-char-dham-yatra" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'char-dham-yatra') }}" data-slug="char-dham-yatra" data-category="pilgrimage" data-title="Char Dham Yatra" data-location="Uttarakhand">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/dest-himalayas.jpg') }}" alt="Char Dham Yatra Himalayas" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-sacred">Sacred Pilgrimage</span>
                                <span class="dest-badge tag-days">11D / 10N</span>
                            </div>
                            <span class="dest-card-location">📍 Haridwar to Haridwar</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Char Dham Yatra 2026</h3>
                            <p class="dest-card-desc">Kedarnath, Badrinath, Yamunotri, and Gangotri. 10 nights and 11 days, from Haridwar to Haridwar. Seats are limited.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Kedarnath, Badrinath, Yamunotri, Gangotri</li>
                                <li><span>✓</span> Stay, meals and transportation</li>
                                <li><span>✓</span> Darshan assistance</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'char-dham-yatra') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Char Dham Yatra" data-title="Char Dham Yatra 2026" data-location="Haridwar to Haridwar" data-days="11D / 10N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Char Dham Yatra 2026 (10 Nights / 11 Days, Haridwar to Haridwar). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 3. Khaliya Top Trek -->
                    <article id="dest-khaliya-top-trek" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'khaliya-top-trek') }}" data-slug="khaliya-top-trek" data-category="himalayan" data-title="Khaliya Top Trek" data-location="Uttarakhand">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/khaliya-top-trek/1.jpg') }}" alt="Khaliya Top Trek near Munsiyari" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-trek">Himalayan Trek</span>
                                <span class="dest-badge tag-days">1–2 Days</span>
                            </div>
                            <span class="dest-card-location">📍 Munsiyari, Uttarakhand</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Khaliya Top Trek</h3>
                            <p class="dest-card-desc">An easy-to-moderate Himalayan trek near Munsiyari in the Pithoragarh district of Uttarakhand.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Start at Balati Bend</li>
                                <li><span>✓</span> Summit about 3,500 m</li>
                                <li><span>✓</span> Easy to moderate</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'khaliya-top-trek') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Khaliya Top Trek" data-title="Khaliya Top Trek" data-location="Munsiyari, Uttarakhand" data-days="1–2 Days" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Khaliya Top Trek (1–2 Days). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 4. Milam Glacier Trek -->
                    <article id="dest-milam-glacier-trek" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'milam-glacier-trek') }}" data-slug="milam-glacier-trek" data-category="himalayan" data-title="Milam Glacier Trek" data-location="Uttarakhand">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/milam-glacier-trek/1.jpg') }}" alt="Milam Glacier Trek" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-trek">Himalayan Trek</span>
                                <span class="dest-badge tag-days">9–12 Days</span>
                            </div>
                            <span class="dest-card-location">📍 Pithoragarh, Uttarakhand</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Milam Glacier Trek</h3>
                            <p class="dest-card-desc">A remote 9-to-12-day trek in the Johar Valley, covering around 100 to 130 km round trip.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Base camp at Munsiyari</li>
                                <li><span>✓</span> About 4,242 m to 5,000 m</li>
                                <li><span>✓</span> Moderate to difficult</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'milam-glacier-trek') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Milam Glacier Trek" data-title="Milam Glacier Trek" data-location="Pithoragarh, Uttarakhand" data-days="9–12 Days" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Milam Glacier Trek (9–12 Days). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 5. Kareri Lake Trek -->
                    <article id="dest-kareri-lake-trek" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'kareri-lake-trek') }}" data-slug="kareri-lake-trek" data-category="himalayan" data-title="Kareri Lake Trek" data-location="Himachal Pradesh">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/kareri-lake-trek/1.jpg') }}" alt="Kareri Lake Trek in Himachal Pradesh" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-trek">Himalayan Trek</span>
                                <span class="dest-badge tag-days">2D / 1N</span>
                            </div>
                            <span class="dest-card-location">📍 Dharamshala, Himachal Pradesh</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Kareri Lake Trek</h3>
                            <p class="dest-card-desc">An easy-to-moderate high-altitude trail in the Dhauladhar range of Kangra district, Himachal Pradesh.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Kareri Village base camp</li>
                                <li><span>✓</span> About 20 to 26 km round trip</li>
                                <li><span>✓</span> About 9,613 to 9,700 ft</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'kareri-lake-trek') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Kareri Lake Trek" data-title="Kareri Lake Trek" data-location="Dharamshala, Himachal Pradesh" data-days="2D / 1N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Kareri Lake Trek (2D / 1N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 6. Dalhousie & Dharamshala -->
                    <article id="dest-dalhousie-dharamshala" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'dalhousie-dharamshala') }}" data-slug="dalhousie-dharamshala" data-category="nature" data-title="Dalhousie & Dharamshala" data-location="Himachal Pradesh">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/dalhousie-dharamshala/3.jpg') }}" alt="Tibetan monastery with prayer flags from the Dharamshala trip" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-nature">HIMACHAL PRADESH TOUR</span>
                                <span class="dest-badge tag-days">8 Days</span>
                            </div>
                            <span class="dest-card-location">📍 Himachal Pradesh</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Dalhousie &amp; Dharamshala Tour</h3>
                            <p class="dest-card-desc">An 8-day Himachal Pradesh journey through Dharamshala, a Kareri Lake trek and camp, Dalhousie, Khajjiar, and a return via Chandigarh towards Surat.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Dharamshala and McLeod Ganj</li>
                                <li><span>✓</span> Kareri Lake trek, 12 km one way</li>
                                <li><span>✓</span> Dalhousie and Khajjiar</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'dalhousie-dharamshala') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Dalhousie & Dharamshala" data-title="Dalhousie &amp; Dharamshala Tour" data-location="Himachal Pradesh" data-days="8 Days" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in the Dalhousie & Dharamshala Tour (8 Days). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 7. Harihar Fort & Harishchandragad -->
                    <article id="dest-harihar-fort-trek" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'harihar-fort-trek') }}" data-slug="harihar-fort-trek" data-category="ghats" data-title="Harihar Fort & Harishchandragad" data-location="Maharashtra">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/'.rawurlencode('Harihar Fort & Harishchandragad.png')) }}" alt="Harihar Fort and Harishchandragad" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-ghats">Trekking &amp; Camping</span>
                                <span class="dest-badge tag-days">2D / 2N</span>
                            </div>
                            <span class="dest-card-location">📍 Nashik &amp; Ahmednagar, Maharashtra</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Harihar Fort &amp; Harishchandragad</h3>
                            <p class="dest-card-desc">A 2-day / 2-night trek from Vadodara covering Harihar Fort and Harishchandragad, including Konkan Kada.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> 80° rock-cut staircase of Harihar Fort</li>
                                <li><span>✓</span> Konkan Kada viewpoint</li>
                                <li><span>✓</span> Vadodara to Vadodara</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'harihar-fort-trek') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Harihar Fort Trek" data-title="Harihar Fort &amp; Harishchandragad" data-location="Nashik &amp; Ahmednagar, Maharashtra" data-days="2D / 2N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Harihar Fort & Harishchandragad (2D / 2N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 8. Girnar Pilgrimage Trek -->
                    <article id="dest-girnar-pilgrimage-trek" class="dest-card is-coming-soon{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'girnar-pilgrimage-trek') }}" data-slug="girnar-pilgrimage-trek" data-category="pilgrimage" data-title="Girnar Pilgrimage Trek" data-location="Gujarat">
                        <p class="coming-soon-title">Coming Soon</p>
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/girnar-pilgrimage-trek/1.jpg') }}" alt="Girnar Mountain Junagadh" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-sacred">Sacred Pilgrimage</span>
                                <span class="dest-badge tag-days">2D / 1N</span>
                            </div>
                            <span class="dest-card-location">📍 Junagadh, Gujarat</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Girnar Pilgrimage Trek</h3>
                            <p class="dest-card-desc">Ascend the sacred mountain of Saurashtra with early dawn vistas, spiritual serenity, and well-supported trail stops.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> 10,000 Sacred Steps</li>
                                <li><span>✓</span> Ambaji &amp; Dattatreya Temples</li>
                                <li><span>✓</span> Sunrise Summit Experience</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <span class="btn btn-outline-teal dest-card-details-btn is-disabled">Coming Soon</span>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Girnar" data-title="Girnar Pilgrimage Trek" data-location="Junagadh, Gujarat" data-days="2D / 1N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Girnar Pilgrimage Trek (2D / 1N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 9. Mount Abu Eco Getaway -->
                    <article id="dest-mount-abu-eco-getaway" class="dest-card is-coming-soon{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'mount-abu-eco-getaway') }}" data-slug="mount-abu-eco-getaway" data-category="nature" data-title="Mount Abu Eco Getaway" data-location="Rajasthan">
                        <p class="coming-soon-title">Coming Soon</p>
                        <div class="dest-card-media">
                            <img src="{{ asset('images/'.rawurlencode('Mount Abu Eco Getaway.png')) }}" alt="Mount Abu Eco Getaway" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-nature">Hill Station</span>
                                <span class="dest-badge tag-days">3D / 2N</span>
                            </div>
                            <span class="dest-card-location">📍 Aravalli Range, Rajasthan</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Mount Abu Eco Getaway</h3>
                            <p class="dest-card-desc">Rajasthan’s only hill station offering cool mountain breezes, Guru Shikhar nature walks, and peaceful lake retreats.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Guru Shikhar Highest Peak</li>
                                <li><span>✓</span> Nakki Lake Boat Cruise</li>
                                <li><span>✓</span> Peaceful Eco-Cottage Stays</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <span class="btn btn-outline-teal dest-card-details-btn is-disabled">Coming Soon</span>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Mount Abu" data-title="Mount Abu Eco Getaway" data-location="Aravalli Range, Rajasthan" data-days="3D / 2N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Mount Abu Eco Getaway (3D / 2N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 10. Munsyari & Kausani -->
                    <article id="dest-munsyari-kausani" class="dest-card{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'munsyari-kausani') }}" data-slug="munsyari-kausani" data-category="himalayan" data-title="Munsyari & Kausani" data-location="Uttarakhand">
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/munsyari-kausani/1.jpg') }}" alt="Munsyari and Kausani" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-trek">Himalayan Trek</span>
                                <span class="dest-badge tag-days">6 Days</span>
                            </div>
                            <span class="dest-card-location">📍 Kathgodam to Mukteshwar</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Munsyari &amp; Kausani</h3>
                            <p class="dest-card-desc">Pickup from Kathgodam, then Ranikhet, a trek to Pandavkholi, Someshwar, Kausani, and Mukteshwar.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Trek to Pandavkholi</li>
                                <li><span>✓</span> Rudradhari Waterfall and tea garden</li>
                                <li><span>✓</span> Mukteshwar zero point</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <a href="{{ route('destinations.show', 'munsyari-kausani') }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Munsyari & Kausani" data-title="Munsyari &amp; Kausani" data-location="Kathgodam to Mukteshwar" data-days="6 Days" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Munsyari & Kausani (6 Days). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 11. Dang Forest Circuit -->
                    <article id="dest-dang-forest-circuit" class="dest-card is-coming-soon{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'dang-forest-circuit') }}" data-slug="dang-forest-circuit" data-category="nature" data-title="Dang Forest Circuit" data-location="Gujarat">
                        <p class="coming-soon-title">Coming Soon</p>
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/dang-forest-circuit/1.jpg') }}" alt="Dang Forest and Waterfalls" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-nature">Forest Trail</span>
                                <span class="dest-badge tag-days">3D / 2N</span>
                            </div>
                            <span class="dest-card-location">📍 Saputara & Dang, Gujarat</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Dang Forest Circuit</h3>
                            <p class="dest-card-desc">A lush rainforest getaway filled with roaring monsoon waterfalls, bamboo groves, tribal cuisine, and riverside camping.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Gira Waterfalls Trek</li>
                                <li><span>✓</span> Dense Teak Forest Trail</li>
                                <li><span>✓</span> Authentic Tribal Homestays</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <span class="btn btn-outline-teal dest-card-details-btn is-disabled">Coming Soon</span>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Dang" data-title="Dang Forest Circuit" data-location="Saputara &amp; Dang, Gujarat" data-days="3D / 2N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Dang Forest Circuit (3D / 2N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- 12. Dediapada Wilderness -->
                    <article id="dest-dediapada-wilderness-trek" class="dest-card is-coming-soon{{ \App\Services\DestinationRepository::cardSearchState($tripSearch ?? null, 'dediapada-wilderness-trek') }}" data-slug="dediapada-wilderness-trek" data-category="ghats" data-title="Dediapada Wilderness Trek" data-location="Gujarat">
                        <p class="coming-soon-title">Coming Soon</p>
                        <div class="dest-card-media">
                            <img src="{{ asset('images/trips/dediapada-wilderness-trek/1.jpg') }}" alt="Dediapada Wilderness Trek" loading="lazy">
                            <div class="dest-card-badge-top">
                                <span class="dest-badge tag-ghats">Wilderness Trail</span>
                                <span class="dest-badge tag-days">2D / 1N</span>
                            </div>
                            <span class="dest-card-location">📍 Shoolpaneshwar, Gujarat</span>
                        </div>
                        <div class="dest-card-body">
                            <h3>Dediapada Wilderness Trek</h3>
                            <p class="dest-card-desc">Offbeat river trails, natural plunge pools, and hidden waterfalls nestled in the heart of Shoolpaneshwar Wildlife Sanctuary.</p>
                            <ul class="dest-card-perks">
                                <li><span>✓</span> Hidden Canyon Plunge Pools</li>
                                <li><span>✓</span> Shoolpaneshwar Sanctuary</li>
                                <li><span>✓</span> River Bed Walking &amp; Trekking</li>
                            </ul>
                            <div class="dest-card-footer">
                                <div class="dest-card-actions">
                                    <span class="btn btn-outline-teal dest-card-details-btn is-disabled">Coming Soon</span>
                                    <x-inquire-now class="dest-card-enquire-btn" data-dest="Dediapada" data-title="Dediapada Wilderness Trek" data-location="Shoolpaneshwar, Gujarat" data-days="2D / 1N" />
                                    <a href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in Dediapada Wilderness Trek (2D / 1N). Please share package details and availability.') }}" target="_blank" rel="noopener noreferrer" class="btn-card-wa" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>

                <!-- Empty State Message when Search finds no results -->
                <div id="dest-empty" class="dest-empty hidden">
                    <div class="dest-empty-icon">🏔️</div>
                    <h3>No destinations found</h3>
                    <p>No matching trails or destinations found for your search. Try another keyword or browse all categories.</p>
                    <button type="button" id="dest-reset-btn" class="btn btn-teal">Reset All Filters</button>
                </div>

                <!-- Custom Itinerary Banner -->
                <div class="dest-custom-banner">
                    <div class="dest-custom-content">
                        <span class="ey l success-story-eyebrow">
                            TAILORED EXPEDITIONS
                            <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                                <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#2dd4bf" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <h2>Looking for a customized group trek or corporate escape?</h2>
                        <p>Our mountain leaders and expedition specialists will craft an itinerary matched precisely to your preferred dates, fitness levels, and group size.</p>
                    </div>
                    <div class="dest-custom-action">
                        <button type="button" class="btn btn-teal btn-lg dest-custom-enquire-btn" data-dest="Not Sure Yet" data-title="Custom Group &amp; Corporate Expedition" data-location="Tailored by Explore Trekora" data-days="Flexible Dates">Plan Custom Journey <span>→</span></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Inquire Now Modal Dialog (Image-2 design) -->
        <div id="dest-inquire-modal" class="dest-modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="modal-dest-title" aria-hidden="true">
            <div class="dest-modal-card">
                <!-- Modal Header with Forest Green BG and Contours -->
                <div class="dest-modal-header">
                    <svg class="dest-modal-contours" viewBox="0 0 520 180" fill="none" preserveAspectRatio="none" aria-hidden="true">
                        <ellipse cx="260" cy="90" rx="140" ry="60" stroke="rgba(255,255,255,0.08)" stroke-width="1.2"/>
                        <ellipse cx="260" cy="90" rx="210" ry="95" stroke="rgba(255,255,255,0.06)" stroke-width="1.2"/>
                        <ellipse cx="260" cy="90" rx="280" ry="130" stroke="rgba(255,255,255,0.04)" stroke-width="1.2"/>
                        <ellipse cx="260" cy="90" rx="350" ry="165" stroke="rgba(255,255,255,0.03)" stroke-width="1.2"/>
                    </svg>
                    <div class="dest-modal-header-top">
                        <span class="dest-modal-pill">Enquire now</span>
                        <button type="button" class="dest-modal-close" id="modal-close-btn" aria-label="Close modal">
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                    <h2 class="dest-modal-title" id="modal-dest-title">Adi Kailash &amp; Om Parvat Yatra</h2>
                    <p class="dest-modal-subtitle" id="modal-dest-subtitle">Pithoragarh, Uttarakhand · 7D / 6N</p>
                </div>

                <!-- Modal Form Body -->
                <div class="dest-modal-body">
                    <form id="dest-inquire-form" action="{{ route('enquiries.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="travellers" value="1">
                        <input type="hidden" name="message" id="modal-hidden-message" value="Inquiry initiated from All Destinations page.">

                        <!-- Full name -->
                        <div class="dest-form-field">
                            <label for="modal-fullname" class="dest-form-label">Full name</label>
                            <div class="dest-input-wrap">
                                <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input 
                                    type="text" 
                                    name="full_name" 
                                    id="modal-fullname" 
                                    class="dest-input" 
                                    placeholder="Your full name" 
                                    required
                                >
                            </div>
                        </div>

                        <!-- Phone number & Email address (2 cols) -->
                        <div class="dest-form-row">
                            <div class="dest-form-field">
                                <label for="modal-phone" class="dest-form-label">Phone number</label>
                                <div class="dest-input-wrap">
                                    <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <input 
                                        type="tel" 
                                        name="phone" 
                                        id="modal-phone" 
                                        class="dest-input" 
                                        placeholder="+91 00000 00000" 
                                        required
                                    >
                                </div>
                            </div>

                            <div class="dest-form-field">
                                <label for="modal-email" class="dest-form-label">Email address</label>
                                <div class="dest-input-wrap">
                                    <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        id="modal-email" 
                                        class="dest-input" 
                                        placeholder="you@example.com" 
                                        required
                                    >
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="dest-form-field">
                            <label for="modal-address" class="dest-form-label">Address</label>
                            <div class="dest-input-wrap">
                                <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <input 
                                    type="text" 
                                    name="address" 
                                    id="modal-address" 
                                    class="dest-input" 
                                    placeholder="City, State"
                                >
                            </div>
                        </div>

                        <!-- Destination Dropdown -->
                        <div class="dest-form-field">
                            <label for="modal-destination" class="dest-form-label">Destination</label>
                            <div class="dest-input-wrap">
                                <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <select name="destination" id="modal-destination" class="dest-input dest-select" required>
                                    <option value="Adi Kailash & Om Parvat" data-title="Adi Kailash &amp; Om Parvat Yatra" data-location="Pithoragarh, Uttarakhand · 7D / 6N">Adi Kailash &amp; Om Parvat Yatra</option>
                                    <option value="Char Dham Yatra" data-title="Char Dham Yatra 2026" data-location="Haridwar to Haridwar · 11D / 10N">Char Dham Yatra</option>
                                    <option value="Khaliya Top Trek" data-title="Khaliya Top Trek" data-location="Munsiyari, Uttarakhand · 1–2 Days">Khaliya Top Trek</option>
                                    <option value="Milam Glacier Trek" data-title="Milam Glacier Trek" data-location="Pithoragarh, Uttarakhand · 9–12 Days">Milam Glacier Trek</option>
                                    <option value="Kareri Lake Trek" data-title="Kareri Lake Trek" data-location="Dharamshala, Himachal Pradesh · 2D / 1N">Kareri Lake Trek</option>
                                    <option value="Dalhousie & Dharamshala" data-title="Dalhousie &amp; Dharamshala Tour" data-location="Himachal Pradesh · 8 Days">Dalhousie &amp; Dharamshala Tour</option>
                                    <option value="Harihar Fort Trek" data-title="Harihar Fort &amp; Harishchandragad" data-location="Nashik &amp; Ahmednagar, Maharashtra · 2D / 2N">Harihar Fort &amp; Harishchandragad</option>
                                    <option value="Girnar" data-title="Girnar Pilgrimage Trek" data-location="Junagadh, Gujarat · 2D / 1N">Girnar Pilgrimage Trek · Coming Soon</option>
                                    <option value="Mount Abu" data-title="Mount Abu Eco Getaway" data-location="Aravalli Range, Rajasthan · 3D / 2N">Mount Abu Eco Getaway · Coming Soon</option>
                                    <option value="Munsyari & Kausani" data-title="Munsyari &amp; Kausani" data-location="Kathgodam to Mukteshwar · 6 Days">Munsyari &amp; Kausani</option>
                                    <option value="Dang" data-title="Dang Forest Circuit" data-location="Saputara &amp; Dang, Gujarat · 3D / 2N">Dang Forest Circuit · Coming Soon</option>
                                    <option value="Dediapada" data-title="Dediapada Wilderness Trek" data-location="Shoolpaneshwar, Gujarat · 2D / 1N">Dediapada Wilderness Trek · Coming Soon</option>
                                    <option value="Haridwar & Rishikesh" data-title="Haridwar &amp; Rishikesh" data-location="Uttarakhand · 4D / 3N">Haridwar &amp; Rishikesh</option>
                                    <option value="Not Sure Yet" data-title="Custom Himalayan &amp; Eco Expedition" data-location="Tailored by Explore Trekora · Flexible">Not Sure Yet</option>
                                </select>
                                <svg class="dest-select-arrow" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <polyline points="6 8 10 12 14 8"></polyline>
                                </svg>
                            </div>
                        </div>

                        <!-- Travel date -->
                        <div class="dest-form-field">
                            <label for="modal-travel-date" class="dest-form-label">Travel date</label>
                            <div class="dest-input-wrap">
                                <svg class="dest-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <input 
                                    type="date" 
                                    name="travel_date" 
                                    id="modal-travel-date" 
                                    class="dest-input" 
                                    required
                                >
                            </div>
                        </div>

                        <!-- Error Message Banner -->
                        <div id="modal-error-box" class="dest-modal-error hidden"></div>

                        <!-- Submit Button -->
                        <button type="submit" id="modal-submit-btn" class="dest-modal-submit">
                            <span>Submit now</span>
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                        </button>

                        <!-- Disclaimer Text -->
                        <p class="dest-modal-disclaimer">
                            We'll contact you via WhatsApp or email within 24 hours. No payment required at this stage.
                        </p>
                    </form>

                    <!-- Success State (hidden by default) -->
                    <div id="dest-modal-success" class="dest-modal-success hidden">
                        <div class="dest-modal-success-icon">✓</div>
                        <h3>Enquiry Received!</h3>
                        <p id="modal-success-text">Thank you! Your enquiry has been received. Our expedition specialist will connect with you via WhatsApp or email within 24 hours.</p>
                        <button type="button" class="btn btn-teal" id="modal-success-close">Got it</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- Interactive Client Filtering & Modal Script -->
    <script>
        (function() {
            const searchInput = document.getElementById('dest-search');
            const filterBtn = document.getElementById('dest-search-filter-btn');
            const tabs = document.querySelectorAll('.dest-tab');
            const cards = document.querySelectorAll('.dest-card');
            const emptyState = document.getElementById('dest-empty');
            const resetBtn = document.getElementById('dest-reset-btn');

            let currentFilter = 'all';
            let currentSearch = '';

            function updateCards() {
                let visibleCount = 0;
                const searchLower = currentSearch.trim().toLowerCase();

                cards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    const title = (card.getAttribute('data-title') || '').toLowerCase();
                    const location = (card.getAttribute('data-location') || '').toLowerCase();
                    const text = card.textContent.toLowerCase();

                    const matchesCategory = (currentFilter === 'all') || (category === currentFilter);
                    const matchesSearch = !searchLower || title.includes(searchLower) || location.includes(searchLower) || text.includes(searchLower);

                    if (matchesCategory && matchesSearch && !card.classList.contains('is-trip-hidden')) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (emptyState) {
                    if (visibleCount === 0) {
                        emptyState.classList.remove('hidden');
                    } else {
                        emptyState.classList.add('hidden');
                    }
                }
            }

            function unlockTripSearch() {
                cards.forEach(card => card.classList.remove('is-trip-hidden'));
            }

            function scrollToBestMatch() {
                const card = document.querySelector('.dest-card.is-best-match');
                if (!card) return;
                const nav = document.querySelector('.nav');
                const offset = (nav ? nav.getBoundingClientRect().height : 84) + 18;
                const top = card.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: Math.max(0, top), behavior: 'auto' });
            }

            // Tab click handling
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    unlockTripSearch();
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');
                    currentFilter = tab.getAttribute('data-filter');
                    updateCards();
                });
            });

            // Search input handling
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    unlockTripSearch();
                    currentSearch = e.target.value;
                    updateCards();
                });

                searchInput.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        currentSearch = searchInput.value;
                        updateCards();
                        const grid = document.getElementById('dest-grid');
                        if (grid) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            }

            // Filter button in search bar
            if (filterBtn && searchInput) {
                filterBtn.addEventListener('click', () => {
                    unlockTripSearch();
                    currentSearch = searchInput.value;
                    updateCards();
                    const grid = document.getElementById('dest-grid');
                    if (grid) {
                        grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                });
            }

            // Reset all filters button
            if (document.querySelector('.dest-card.is-best-match')) {
                scrollToBestMatch();
                let matchTries = 0;
                const matchTimer = setInterval(() => {
                    scrollToBestMatch();
                    matchTries += 1;
                    if (matchTries >= 8) {
                        clearInterval(matchTimer);
                    }
                }, 150);
            }

            if (resetBtn && searchInput) {
                resetBtn.addEventListener('click', () => {
                    unlockTripSearch();
                    searchInput.value = '';
                    currentSearch = '';
                    currentFilter = 'all';
                    tabs.forEach(t => {
                        if (t.getAttribute('data-filter') === 'all') {
                            t.classList.add('active');
                        } else {
                            t.classList.remove('active');
                        }
                    });
                    updateCards();
                });
            }

            // ==========================================
            // Inquire Modal Logic (Matches Image-2)
            // ==========================================
            const modal = document.getElementById('dest-inquire-modal');
            const modalCloseBtn = document.getElementById('modal-close-btn');
            const modalSuccessClose = document.getElementById('modal-success-close');
            const modalTitle = document.getElementById('modal-dest-title');
            const modalSubtitle = document.getElementById('modal-dest-subtitle');
            const modalSelect = document.getElementById('modal-destination');
            const modalForm = document.getElementById('dest-inquire-form');
            const modalSuccess = document.getElementById('dest-modal-success');
            const modalSuccessText = document.getElementById('modal-success-text');
            const modalDateInput = document.getElementById('modal-travel-date');
            const modalHiddenMessage = document.getElementById('modal-hidden-message');
            const modalAddressInput = document.getElementById('modal-address');
            const modalErrorBox = document.getElementById('modal-error-box');
            const modalSubmitBtn = document.getElementById('modal-submit-btn');

            // Set default travel date min to today
            if (modalDateInput) {
                const today = new Date().toISOString().split('T')[0];
                modalDateInput.min = today;
                const nextWeek = new Date(Date.now() + 7 * 86400000).toISOString().split('T')[0];
                modalDateInput.value = nextWeek;
                modalDateInput.closest('.dest-input-wrap')?.addEventListener('click', (event) => {
                    if (typeof modalDateInput.showPicker !== 'function') {
                        return;
                    }

                    event.preventDefault();

                    try {
                        modalDateInput.showPicker();
                    } catch (pickerError) {
                        modalDateInput.focus();
                    }
                });
            }

            function openModal(destKey, title, location, days) {
                if (!modal) return;
                
                // Reset states
                if (modalForm) modalForm.classList.remove('hidden');
                if (modalSuccess) modalSuccess.classList.add('hidden');
                if (modalErrorBox) {
                    modalErrorBox.classList.add('hidden');
                    modalErrorBox.textContent = '';
                }

                // Set destination in select dropdown
                if (modalSelect && destKey) {
                    modalSelect.value = destKey;
                    if (!modalSelect.value) {
                        for (let opt of modalSelect.options) {
                            if (opt.value.toLowerCase().includes(destKey.toLowerCase()) || 
                                opt.textContent.toLowerCase().includes(title.toLowerCase())) {
                                modalSelect.value = opt.value;
                                break;
                            }
                        }
                    }
                }

                // Update header title & subtitle
                if (modalTitle) modalTitle.textContent = title || 'Custom Journey';
                if (modalSubtitle) modalSubtitle.textContent = (location && days) ? `${location} · ${days}` : (location || 'Explore Trekora');

                // Open modal with smooth blur
                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';

                // Focus first input
                const firstInput = document.getElementById('modal-fullname');
                if (firstInput) setTimeout(() => firstInput.focus({ preventScroll: true }), 80);
            }

            function closeModal() {
                if (!modal) return;
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            // Sync Header when user changes select dropdown
            if (modalSelect) {
                modalSelect.addEventListener('change', () => {
                    const selectedOption = modalSelect.options[modalSelect.selectedIndex];
                    if (selectedOption) {
                        const optTitle = selectedOption.getAttribute('data-title') || selectedOption.textContent;
                        const optLocation = selectedOption.getAttribute('data-location') || 'Explore Trekora';
                        if (modalTitle) modalTitle.textContent = optTitle;
                        if (modalSubtitle) modalSubtitle.textContent = optLocation;
                    }
                });
            }

            // Bind Card Inquire buttons
            document.querySelectorAll('.dest-card-enquire-btn, .dest-custom-enquire-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const destKey = btn.getAttribute('data-dest');
                    const title = btn.getAttribute('data-title');
                    const location = btn.getAttribute('data-location');
                    const days = btn.getAttribute('data-days');
                    openModal(destKey, title, location, days);
                });
            });

            // Close button listeners
            if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
            if (modalSuccessClose) modalSuccessClose.addEventListener('click', closeModal);

            // Backdrop click listener
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        closeModal();
                    }
                });
            }

            // ESC key to close
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) {
                    closeModal();
                }
            });

            // Handle Modal Form Submission
            if (modalForm) {
                modalForm.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    // Update hidden message with address and origin
                    if (modalHiddenMessage && modalAddressInput) {
                        const addr = modalAddressInput.value.trim();
                        modalHiddenMessage.value = addr 
                            ? `Address: ${addr}. Enquired from All Destinations card.`
                            : 'Enquiry submitted from All Destinations card.';
                    }

                    if (modalSubmitBtn) {
                        modalSubmitBtn.disabled = true;
                        modalSubmitBtn.innerHTML = '<span>Sending enquiry...</span>';
                    }

                    const formData = new FormData(modalForm);

                    try {
                        const response = await fetch(modalForm.action, {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json'
                            },
                            body: formData
                        });

                        if (response.ok) {
                            const resData = await response.json().catch(() => null);
                            modalForm.classList.add('hidden');
                            if (modalSuccess) {
                                const selectedDest = modalSelect ? modalSelect.options[modalSelect.selectedIndex].text : '';
                                if (modalSuccessText && selectedDest) {
                                    modalSuccessText.textContent = `Thank you! Your enquiry for ${selectedDest} has been received. Our expedition specialist will connect with you via WhatsApp or email within 24 hours.`;
                                }
                                modalSuccess.classList.remove('hidden');
                            }
                            if (resData && resData.whatsapp_url) {
                                window.location.href = resData.whatsapp_url;
                            }
                        } else {
                            const errData = await response.json().catch(() => null);
                            if (errData && errData.errors) {
                                const firstError = Object.values(errData.errors)[0][0];
                                if (modalErrorBox) {
                                    modalErrorBox.textContent = firstError;
                                    modalErrorBox.classList.remove('hidden');
                                }
                            } else {
                                modalForm.submit();
                            }
                        }
                    } catch (err) {
                        modalForm.submit();
                    } finally {
                        if (modalSubmitBtn) {
                            modalSubmitBtn.disabled = false;
                            modalSubmitBtn.innerHTML = `<span>Submit now</span>
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>`;
                        }
                    }
                });
            }
        })();
    </script>
</x-layout>
