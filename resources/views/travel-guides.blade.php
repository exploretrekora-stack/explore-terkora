<x-layout>
    <x-navbar />

    <main class="guide-page">
        <!-- 1. Destinations-style Hero Section -->
        <section class="pkg-hero-banner guide-hero-banner" id="guide-hero">
            <div class="pkg-hero-media">
                <img 
                    src="{{ asset('images/about-hero-adventure.jpg') }}" 
                    alt="Travel Guides and Coordinators – Explore Trekora" 
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
                        <span class="curr">Travel Guides</span>
                    </nav>

                    <!-- Sun & Mountain Crest Emblem (Destinations Page Style) -->
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

                    <!-- Script Eyebrow -->
                    <div class="pkg-hero-script">Expert On-Ground Support</div>

                    <!-- Main Headline -->
                    <h1 class="pkg-hero-title">Your Trusted Travel Companions.</h1>

                    <!-- Description Subtitle -->
                    <p class="pkg-hero-desc">
                        Dedicated tour coordinators and local destination guides who make every trip more enjoyable, comfortable, and memorable across mountain trails, sacred temples, and historic cities.
                    </p>

                    <!-- CTA Buttons (16px gap, distinct pill buttons) -->
                    <div class="pkg-hero-cta about-hero-cta">
                        <a href="#about-guides" class="pkg-hero-btn">
                            <span>About Our Tour Guides</span>
                            <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.69l3.72-3.72a.75.75 0 111.06 1.06l-5 5a.75.75 0 01-1.06 0l-5-5a.75.75 0 111.06-1.06l3.72 3.72V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#guide-categories" class="about-hero-ghost-btn">
                            <span>View Guide Categories</span>
                            <span class="arr">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Torn-Paper Wave Edge Divider (merging into content below) -->
            <div class="pkg-hero-torn" aria-hidden="true">
                <svg viewBox="0 0 1440 90" preserveAspectRatio="none" fill="#ffffff">
                    <path d="M0,38 C35,52 68,58 102,42 C140,24 178,48 215,62 C255,76 292,54 330,38 C370,22 408,46 446,60 C485,74 522,48 560,34 C600,20 638,46 676,62 C715,78 752,50 790,34 C830,18 868,44 906,58 C945,72 982,50 1020,36 C1060,22 1098,48 1136,64 C1175,80 1212,52 1250,36 C1290,20 1328,46 1365,58 C1395,68 1420,52 1440,44 L1440,90 L0,90 Z"></path>
                </svg>
            </div>
        </section>

        <!-- 2. Quick Values Bar under Hero Wave (Image-2 Style 3-Column Strip) -->
        <section class="guide-values-sec" aria-label="Key Guide Features">
            <div class="wrap">
                <div class="guide-values-grid">
                    <div class="guide-value-card">
                        <div class="guide-val-icon" aria-hidden="true">🧭</div>
                        <div class="guide-val-info">
                            <h3>Local Destination Experts</h3>
                            <p>Authentic local knowledge, hidden viewpoints, and cultural insights.</p>
                        </div>
                    </div>
                    <div class="guide-value-card">
                        <div class="guide-val-icon" aria-hidden="true">🛡️</div>
                        <div class="guide-val-info">
                            <h3>Safety &amp; Coordination</h3>
                            <p>Experienced on-ground support, route guidance, and smooth transit.</p>
                        </div>
                    </div>
                    <div class="guide-value-card">
                        <div class="guide-val-icon" aria-hidden="true">🤝</div>
                        <div class="guide-val-info">
                            <h3>Tailored Experiences</h3>
                            <p>Comfortable itineraries crafted for families, friends, couples &amp; groups.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Core Editorial Story Section: About Our Tour Guides (Image-2 "Sentiers Frontaliers" Style) -->
        <section class="guide-story-sec" id="about-guides">
            <!-- Background Contour Lines SVG -->
            <svg class="guide-contour-bg" viewBox="0 0 1200 800" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M-100 200 C200 150 400 350 700 260 C1000 170 1150 320 1300 280" stroke="#0f766e" stroke-width="1.2" stroke-opacity="0.12" stroke-dasharray="4 4" />
                <path d="M-100 350 C180 300 450 500 750 390 C1050 280 1200 480 1350 420" stroke="#0f766e" stroke-width="1.2" stroke-opacity="0.12" />
                <path d="M-100 500 C220 460 500 620 800 520 C1100 420 1220 600 1400 560" stroke="#0f766e" stroke-width="1.2" stroke-opacity="0.08" stroke-dasharray="6 6" />
                <path d="M-50 680 C260 620 540 760 850 670 C1160 580 1260 720 1450 700" stroke="#0f766e" stroke-width="1.2" stroke-opacity="0.1" />
            </svg>

            <div class="wrap">
                <div class="guide-story-grid">
                    <!-- Left Media Card with circular seal badge & floating stat (Image-2 Layout) -->
                    <div class="guide-media-wrap">
                        <div class="guide-img-card">
                            <img 
                                src="{{ asset('images/about-tour-guides.jpg') }}" 
                                alt="Explore Trekora Tour Guide leading travelers on forest mountain trail" 
                                loading="lazy"
                            />
                        </div>

                        <!-- Top-Right Overlapping Seal Badge (Image-2 Style) -->
                        <div class="guide-seal-badge">
                            <span class="seal-icon">✦</span>
                            <span>Certified Guides</span>
                        </div>

                        <!-- Bottom-Left Floating Stat Badge -->
                        <div class="guide-stat-floating">
                            <div class="guide-stat-icon">✓</div>
                            <div class="guide-stat-info">
                                <strong>100% On-Ground</strong>
                                <span>Support throughout tour</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Editorial Content (User's Exact Copy) -->
                    <div class="guide-story-content">
                        <span class="guide-eyebrow">Dedicated Tour Companions</span>

                        <h2>About Our Tour Guides</h2>

                        <p class="guide-story-lead">
                            Our tour guides are here to make every trip more enjoyable, comfortable, and memorable. From exploring beautiful natural landscapes and historical landmarks to visiting sacred pilgrimage destinations and discovering rich regional heritage across India, we help travelers make the most of their journey.
                        </p>

                        <p class="guide-story-body">
                            Our team includes dedicated tour coordinators and local destination guides who provide useful information, sightseeing assistance, cultural insights, and support throughout the tour.
                        </p>

                        <p class="guide-story-body">
                            Whether you are traveling with family, friends, as a couple, or in a group, we aim to provide a smooth and well-organized travel experience tailored to your needs.
                        </p>

                        <ul class="guide-features-list">
                            <li><span class="chk">✓</span> Adventure &amp; Nature Trails</li>
                            <li><span class="chk">✓</span> Religious &amp; Pilgrimage Support</li>
                            <li><span class="chk">✓</span> Historical &amp; City Landmarks</li>
                            <li><span class="chk">✓</span> Regional &amp; Group Tour Coordination</li>
                        </ul>

                        <div class="guide-story-actions">
                            <a href="#guide-categories" class="btn-guide-story-solid">
                                <span>Explore Guide Categories</span>
                            </a>
                            <a href="#guide-enquiry" class="btn-guide-story-outline">
                                <span>Enquire for a Tour Guide</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Atmospheric Full-Width Hiking Banner (Image-2 "Devenez Membre" Style) -->
        <section class="guide-trek-banner" aria-label="Trekking and Guide Mission">
            <div class="guide-trek-media">
                <img 
                    src="{{ asset('images/hero-trekking-bg.jpg') }}" 
                    alt="Trekkers exploring mountain ridge at sunrise" 
                    loading="lazy"
                />
            </div>
            <div class="guide-trek-overlay"></div>

            <div class="wrap guide-trek-container">
                <span class="guide-trek-badge">ON-GROUND EXCELLENCE</span>
                <h2>Every Trail Tells a Story. We Help You Live It.</h2>
                <p>
                    From high-altitude Himalayan passes to sacred temples and historic monuments, having a dedicated coordinator transforms travel into an unforgettable journey.
                </p>
                <a href="#guide-enquiry" class="guide-trek-cta">
                    <span>Plan Your Tour with a Guide</span>
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <!-- 5. Specialized Guide Categories Section (User's Exact 4 Categories) -->
        <section class="guide-categories-sec" id="guide-categories">
            <div class="wrap">
                <div class="guide-sec-header">
                    <span class="guide-sec-eyebrow">Tailored Expertise</span>
                    <h2>Our Tour Guide Categories</h2>
                    <p>
                        Discover specialized guide assistance tailored for every form of travel, from rugged outdoor explorations to cultural expeditions.
                    </p>
                </div>

                <div class="guide-cat-grid">
                    <!-- Category 1: Adventure & Nature Guides -->
                    <article class="guide-cat-card" id="guide-cat-adventure">
                        <div class="guide-cat-media">
                            <img 
                                src="{{ asset('images/khaliya-top-trek.jpg') }}" 
                                alt="Adventure &amp; Nature Guides" 
                                loading="lazy"
                            />
                            <div class="guide-cat-badge-top">Nature &amp; Trekking</div>
                            <div class="guide-cat-icon-float" aria-hidden="true">🏔️</div>
                        </div>
                        <div class="guide-cat-body">
                            <h3>Adventure &amp; Nature Guides</h3>
                            <p class="guide-cat-desc">
                                For mountain trails, nature exploration, scenic sightseeing, and outdoor experiences.
                            </p>
                            <ul class="guide-cat-points">
                                <li><span>✓</span> Trail navigation, route safety, and terrain guidance</li>
                                <li><span>✓</span> Flora, fauna, and local mountain weather updates</li>
                                <li><span>✓</span> High-altitude camps and scenic viewpoint assistance</li>
                            </ul>
                            <div class="guide-cat-footer">
                                <a href="#guide-enquiry" class="guide-cat-btn">
                                    <span>Connect with Adventure Guide</span>
                                    <span class="arr">→</span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Category 2: Religious Tour Guides -->
                    <article class="guide-cat-card" id="guide-cat-religious">
                        <div class="guide-cat-media">
                            <img 
                                src="{{ asset('images/adi-kailash-1.jpg') }}" 
                                alt="Religious Tour Guides" 
                                loading="lazy"
                            />
                            <div class="guide-cat-badge-top">Sacred Pilgrimage</div>
                            <div class="guide-cat-icon-float" aria-hidden="true">🛕</div>
                        </div>
                        <div class="guide-cat-body">
                            <h3>Religious Tour Guides</h3>
                            <p class="guide-cat-desc">
                                For temple histories, sacred pilgrimage destinations, rituals, and local traditions.
                            </p>
                            <ul class="guide-cat-points">
                                <li><span>✓</span> Temple history, rituals, and darshan timings coordination</li>
                                <li><span>✓</span> Respectful insights into sacred folklore &amp; local customs</li>
                                <li><span>✓</span> Smooth management for senior citizens &amp; pilgrimage yatris</li>
                            </ul>
                            <div class="guide-cat-footer">
                                <a href="#guide-enquiry" class="guide-cat-btn">
                                    <span>Connect with Religious Guide</span>
                                    <span class="arr">→</span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Category 3: Historical & City Guides -->
                    <article class="guide-cat-card" id="guide-cat-historical">
                        <div class="guide-cat-media">
                            <img 
                                src="{{ asset('images/trips/girnar-pilgrimage-trek/3.jpg') }}" 
                                alt="Historical &amp; City Guides" 
                                loading="lazy"
                            />
                            <div class="guide-cat-badge-top">Heritage &amp; Culture</div>
                            <div class="guide-cat-icon-float" aria-hidden="true">🏛️</div>
                        </div>
                        <div class="guide-cat-body">
                            <h3>Historical &amp; City Guides</h3>
                            <p class="guide-cat-desc">
                                For famous landmarks, historic museums, architectural heritage, and city sightseeing.
                            </p>
                            <ul class="guide-cat-points">
                                <li><span>✓</span> In-depth stories of famous landmarks, forts &amp; palaces</li>
                                <li><span>✓</span> Guided tours through museums and cultural hotspots</li>
                                <li><span>✓</span> Authentic local food, craft markets, and walking trails</li>
                            </ul>
                            <div class="guide-cat-footer">
                                <a href="#guide-enquiry" class="guide-cat-btn">
                                    <span>Connect with Heritage Guide</span>
                                    <span class="arr">→</span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Category 4: Destination & Group Tour Coordinators -->
                    <article class="guide-cat-card" id="guide-cat-domestic-intl">
                        <div class="guide-cat-media">
                            <img 
                                src="{{ asset('images/dest-dalhousie.jpg') }}" 
                                alt="Destination &amp; Group Tour Coordinators" 
                                loading="lazy"
                            />
                            <div class="guide-cat-badge-top">Travel Coordination</div>
                            <div class="guide-cat-icon-float" aria-hidden="true">✈️</div>
                        </div>
                        <div class="guide-cat-body">
                            <h3>Destination &amp; Group Tour Coordinators</h3>
                            <p class="guide-cat-desc">
                                For comprehensive local sightseeing, logistics, and smooth travel coordination across destinations.
                            </p>
                            <ul class="guide-cat-points">
                                <li><span>✓</span> Seamless local travel logistics &amp; day-wise itinerary control</li>
                                <li><span>✓</span> Multilingual communication &amp; cross-cultural navigation</li>
                                <li><span>✓</span> Full coordination for families, corporate &amp; leisure groups</li>
                            </ul>
                            <div class="guide-cat-footer">
                                <a href="#guide-enquiry" class="guide-cat-btn">
                                    <span>Connect with Tour Coordinator</span>
                                    <span class="arr">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 6. Value Pillars Section ("Why Travel With Explore Trekora Guides") -->
        <section class="guide-pillars-sec">
            <div class="wrap">
                <div class="guide-sec-header">
                    <span class="guide-sec-eyebrow">The Trekora Difference</span>
                    <h2>Why Travel with Our Guides?</h2>
                    <p>We combine native authenticity, strict safety protocols, and personalized attention.</p>
                </div>

                <div class="guide-pillars-grid">
                    <div class="guide-pillar-card">
                        <div class="guide-pillar-icon" aria-hidden="true">🏔️</div>
                        <h4>Local Wisdom</h4>
                        <p>Authentic stories, hidden spots, and regional nuances you won't find in typical guidebooks.</p>
                    </div>
                    <div class="guide-pillar-card">
                        <div class="guide-pillar-icon" aria-hidden="true">🛡️</div>
                        <h4>Safety First</h4>
                        <p>First-aid trained coordinators who prioritize health, acclimatization, and safe pacing on every route.</p>
                    </div>
                    <div class="guide-pillar-card">
                        <div class="guide-pillar-icon" aria-hidden="true">⏱️</div>
                        <h4>Smooth Logistics</h4>
                        <p>Handling permits, tickets, schedules, and transfers so you can simply relax and immerse yourself.</p>
                    </div>
                    <div class="guide-pillar-card">
                        <div class="guide-pillar-icon" aria-hidden="true">👨‍👩‍👧‍👦</div>
                        <h4>Tailored Care</h4>
                        <p>Whether traveling with kids, elderly parents, a partner, or best friends, the pace matches your group.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Bottom Call-to-Action / Coordinator Contact Section -->
        <section class="guide-cta-sec" id="guide-enquiry">
            <div class="wrap">
                <div class="guide-cta-card">
                    <div class="guide-cta-info">
                        <h2>Need a Tour Guide for Your Upcoming Trip?</h2>
                        <p>
                            Connect directly with our tour coordinators to arrange local guides and seamless on-ground support tailored to your journey.
                        </p>
                    </div>

                    <div class="guide-cta-actions">
                        <a 
                            href="https://wa.me/918460922935?text=Hi%20Explore%20Trekora%2C%20I%20would%20like%20to%20inquire%20about%20a%20tour%20guide%20for%20my%20upcoming%20trip." 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="btn-guide-wa"
                        >
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Chat on WhatsApp</span>
                        </a>

                        <a href="tel:+918460922935" class="discovery-pill-btn btn-glass-border">
                            <span>Call: +91 8460922935</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</x-layout>
