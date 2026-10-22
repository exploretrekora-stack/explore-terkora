<x-layout>
    <x-navbar />

    <main class="about-page">
        <!-- 1. Hero Section (Image-2 UI matching Destinations & Tour Packages) -->
        <section class="pkg-hero-banner about-hero-banner" id="about-hero">
            <div class="pkg-hero-media">
                <img 
                    src="{{ asset('images/about-hero-adventure.jpg') }}" 
                    alt="Explore Trekora – Adventure, Nature &amp; Sacred Trails" 
                    class="pkg-hero-img"
                    loading="eager"
                />
                <div class="pkg-hero-overlay"></div>
            </div>

            <div class="wrap pkg-hero-container">
                <!-- Center Content Box -->
                <div class="pkg-hero-content">
                    <!-- Top Breadcrumb -->
                    <nav class="pkg-hero-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep">/</span>
                        <span class="curr">About Us</span>
                    </nav>

                    <!-- Sun & Mountain Crest Emblem -->
                    <div class="pkg-hero-emblem" aria-hidden="true">
                        <svg viewBox="0 0 100 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50 4 V11" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M37 8 L40 14" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M63 8 L60 14" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M26 16 L31 21" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M74 16 L69 21" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M17 28 L23 31" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M83 28 L77 31" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M12 42 L18 43" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M88 42 L82 43" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round"/>
                            <path d="M30 46 A22 22 0 0 1 70 46" stroke="#ffffff" stroke-width="2" stroke-dasharray="3 3"/>
                            <path d="M8 60 L32 26 L48 44 L68 18 L92 60 Z" fill="#ffffff"/>
                            <path d="M32 26 L38 60" stroke="#0a2a26" stroke-width="2" stroke-linecap="round"/>
                            <path d="M68 18 L58 60" stroke="#0a2a26" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <!-- Script Eyebrow "Our Story & Purpose" -->
                    <div class="pkg-hero-script">Our Story &amp; Purpose</div>

                    <!-- Main Headline -->
                    <h1 class="pkg-hero-title">
                        More than a journey.<br>
                        <span class="text-teal-300">A story worth remembering.</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="pkg-hero-desc">
                        At Explore Trekora, we connect travelers with India's most breathtaking mountain trails, sacred pilgrimage circuits, and hidden valleys through thoughtfully curated, authentic travel experiences.
                    </p>

                    <!-- CTA Buttons (16px gap, distinct pill buttons) -->
                    <div class="pkg-hero-cta about-hero-cta">
                        <a href="#who-we-are" class="pkg-hero-btn">
                            <span>Discover Who We Are</span>
                            <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.69l3.72-3.72a.75.75 0 111.06 1.06l-5 5a.75.75 0 01-1.06 0l-5-5a.75.75 0 111.06-1.06l3.72 3.72V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#what-we-offer" class="about-hero-ghost-btn">
                            <span>What We Offer</span>
                            <span class="arr">→</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Torn-Paper Wave Edge Divider -->
            <div class="pkg-hero-torn" aria-hidden="true">
                <svg viewBox="0 0 1440 90" preserveAspectRatio="none" fill="#ffffff">
                    <path d="M0,38 C35,52 68,58 102,42 C140,24 178,48 215,62 C255,76 292,54 330,38 C370,22 408,46 446,60 C485,74 522,48 560,34 C600,20 638,46 676,62 C715,78 752,50 790,34 C830,18 868,44 906,58 C945,72 982,50 1020,36 C1060,22 1098,48 1136,64 C1175,80 1212,52 1250,36 C1290,20 1328,46 1365,58 C1395,68 1420,52 1440,44 L1440,90 L0,90 Z"></path>
                </svg>
            </div>
        </section>

        <!-- 2. Who We Are Section (Updated with Home Page Hero Visual Composition) -->
        <section class="about-section about-who-section" id="who-we-are">
            <div class="wrap">
                <div class="about-who-grid">
                    <!-- Left: Signature Home Page Hero Sculptural Composition -->
                    <div class="about-who-visuals">
                        <!-- Main Architectural Portal Frame (Using Home Page Hero Image) -->
                        <div class="about-arch-frame group">
                            <!-- Ambient Dashed Aura Frame -->
                            <div class="about-art-aura" aria-hidden="true"></div>

                            <img 
                                src="{{ asset('images/hero-mountain.jpg') }}" 
                                alt="Adventurer exploring alpine mountain trail overlooking a turquoise glacial lake" 
                                class="about-arch-img"
                                loading="lazy"
                            />
                            <div class="about-arch-vignette" aria-hidden="true"></div>
                            <div class="about-img-tag">
                                <span class="tag-dot"></span>
                                <span>Curated Himalayan Trails</span>
                            </div>
                        </div>

                        <!-- Secondary Circular Visual (Using Home Page Hero Beach/Nature Image) -->
                        <div class="about-round-frame group">
                            <img 
                                src="{{ asset('images/hero-beach.jpg') }}" 
                                alt="Tropical turquoise lagoon and scenic nature escape" 
                                class="about-round-img"
                                loading="lazy"
                            />
                            <div class="about-round-tag">
                                <span>🌊 Nature Escapes</span>
                            </div>
                        </div>

                        <!-- Floating Glassmorphism Badge 1: 4.9 Rating -->
                        <div class="about-rating-badge">
                            <div class="rating-seal">★</div>
                            <div class="rating-content">
                                <div class="rating-title-row">
                                    <span class="rating-val">{{ number_format(($travelStats ?? \App\Models\TravelStat::current())->average_rating, 1) }} rating</span>
                                    <span class="rating-reviews">(2.4k reviews)</span>
                                </div>
                                <span class="rating-sub">Trusted by Himalayan Explorers</span>
                            </div>
                        </div>

                        <!-- Floating Glassmorphism Badge 2: Verified Local Guides -->
                        <div class="about-guide-badge">
                            <div class="guide-avatar-wrap">
                                <img src="{{ asset('images/avatar-1.jpg') }}" alt="Guide" class="guide-avatar-img">
                                <span class="guide-online-dot" aria-hidden="true"></span>
                            </div>
                            <div class="guide-content">
                                <span class="guide-name">Verified Mountain Experts</span>
                                <span class="guide-role">Meaningful Journeys Across India</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Story & Context -->
                    <div class="about-who-text">
                        <span class="kicker">
                            Who We Are
                            <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                                <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>

                        <h2 class="about-heading">
                            Meaningful travel experiences and destination discovery.
                        </h2>

                        <p class="about-lead">
                            Explore Trekora was born out of a shared reverence for the wild, spiritual, and untouched landscapes of India.
                        </p>

                        <p class="about-body">
                            We believe that travel is at its best when it moves beyond sightseeing into genuine immersion. Whether it is navigating sacred pilgrim passes like Adi Kailash, trekking through pine-scented valleys toward Khaliya Top, or unwinding in peaceful eco-retreats, our focus remains on providing thoughtful itineraries that let you absorb every moment with peace of mind.
                        </p>

                        <!-- Highlights List -->
                        <div class="about-who-pillars">
                            <div class="who-pillar-item">
                                <div class="pillar-bullet">
                                    <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Handpicked Trails &amp; Destinations</h4>
                                    <p>Carefully selected scenic routes that showcase authentic beauty beyond crowded commercial spots.</p>
                                </div>
                            </div>

                            <div class="who-pillar-item">
                                <div class="pillar-bullet">
                                    <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Local Insights &amp; Mountain Guidance</h4>
                                    <p>Partnering with regional guides who know mountain terrain, weather changes, and local culture deeply.</p>
                                </div>
                            </div>

                            <div class="who-pillar-item">
                                <div class="pillar-bullet">
                                    <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4>Respectful &amp; Mindful Travel</h4>
                                    <p>Low-impact exploration that protects fragile mountain ecosystems and honors sacred traditions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3 & 4. Purpose & Direction (Our Vision & Our Mission) — Inspired by Image-3 Editorial Journey Layout -->
        <section class="about-section about-vm-section" id="vision-mission">
            <div class="wrap">
                <!-- Section Top Monogram Bar -->
                <div class="about-editorial-meta" aria-hidden="true">
                    <span class="meta-star">✦</span>
                    <span class="meta-text">PURPOSE &amp; DIRECTION</span>
                    <span class="meta-dot">·</span>
                    <span class="meta-text">OUR VISION &amp; OUR MISSION</span>
                    <span class="meta-star">✦</span>
                </div>

                <div class="about-vm-header text-center">
                    <span class="kicker">
                        Purpose &amp; Direction
                        <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h2 class="about-heading">The Vision &amp; Mission Driving Every Expedition</h2>
                    <p class="about-subheading">
                        Connecting explorers with the soul of the mountains through intentional design, safety, and respect for nature.
                    </p>
                </div>

                <!-- Clean Journey Milestone Divider (Replaces buggy overlapping badge) -->
                <div class="about-journey-milestone" aria-hidden="true">
                    <span class="milestone-line"></span>
                    <span class="milestone-pill">
                        <span class="pill-ic">🧭</span>
                        <span>Guided by Principle &amp; Purpose</span>
                    </span>
                    <span class="milestone-line"></span>
                </div>

                <!-- 2 Connected Cards: Vision and Mission -->
                <div class="about-connected-journey">
                    <!-- Left Card: Our Vision -->
                    <div class="journey-node node-vision">
                        <div class="journey-card-media">
                            <img src="{{ asset('images/state-uttarakhand.jpg') }}" alt="Himalayan mountain peaks" loading="lazy">
                            <div class="journey-card-overlay"></div>
                            <span class="vm-badge badge-vision">OUR VISION</span>
                        </div>
                        <div class="journey-card-body">
                            <div class="journey-node-num">01 / PURPOSE</div>
                            <h3 class="vm-title">“Our Vision Is to Redefine the Way You Travel.”</h3>
                            <p class="vm-desc">
                                We envision a world where journeys are not rushed checklists, but transformative escapes that connect you deeply with nature, local communities, and personal peace. We aspire to build a culture of mindful discovery where every traveler returns home enriched and inspired.
                            </p>
                            <div class="vm-accent-quote">
                                <span>✦</span>
                                <em>Transforming travel from ordinary sightseeing into life-enriching exploration.</em>
                            </div>
                        </div>
                    </div>

                    <!-- Right Card: Our Mission -->
                    <div class="journey-node node-mission">
                        <div class="journey-card-media">
                            <img src="{{ asset('images/trips/adi-kailash-om-parvat/1.jpg') }}" alt="Sacred mountain trails" loading="lazy">
                            <div class="journey-card-overlay"></div>
                            <span class="vm-badge badge-mission">OUR MISSION</span>
                        </div>
                        <div class="journey-card-body">
                            <div class="journey-node-num">02 / DIRECTION</div>
                            <h3 class="vm-title">Making Journeys Meaningful &amp; Easier to Discover.</h3>
                            <p class="vm-desc">
                                Our mission is to simplify travel planning while deepening the travel experience. We make remote trails, sacred pilgrimage circuits, and scenic escapes accessible through transparent planning, verified stays, experienced local guidance, and supportive logistics—enabling you to travel with confidence.
                            </p>
                            <div class="vm-accent-quote mission-quote">
                                <span>✦</span>
                                <em>Empowering curious adventurers with transparent planning and trusted guidance.</em>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image-3 Style Pill Action Buttons -->
                <div class="about-editorial-actions">
                    <a href="#what-we-offer" class="editorial-pill-btn btn-primary">
                        <span>Explore What We Offer</span>
                        <span class="arr">↓</span>
                    </a>
                    <a href="#philosophy" class="editorial-pill-btn btn-secondary">
                        <span>Our Travel Philosophy</span>
                        <span class="arr">↓</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- 5. What We Offer Section (Image-3 Style Editorial Cards Grid) -->
        <section class="about-section about-offer-section" id="what-we-offer">
            <div class="wrap">
                <!-- Image-3 Style Category Header Meta -->
                <div class="about-editorial-meta" aria-hidden="true">
                    <span class="meta-star">✦</span>
                    <span class="meta-text">CURATED OFFERINGS</span>
                    <span class="meta-dot">·</span>
                    <span class="meta-text">EXPLORE TREKORA DESTINATIONS</span>
                    <span class="meta-star">✦</span>
                </div>

                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="kicker">
                        Experiences For Every Passion
                        <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h2 class="about-heading">What We Offer</h2>
                    <p class="about-subheading">
                        From high-altitude Himalayan summits to peaceful hill stations and sacred pilgrimages, explore our five core travel offerings curated for diverse travel styles.
                    </p>
                </div>

                <!-- 5 Core Offerings Editorial Grid -->
                <div class="about-offer-editorial-grid">
                    <!-- Offer 1: Adventure & Trekking -->
                    <article class="about-editorial-card group">
                        <div class="card-media-wrap">
                            <img src="{{ asset('images/khaliya-top-trek.jpg') }}" alt="Adventure &amp; Trekking in the Himalayas" loading="lazy">
                            <div class="card-media-gradient"></div>
                            <span class="card-tag-pill tag-teal">TREKKING</span>
                        </div>
                        <div class="card-text-wrap">
                            <div class="card-kicker-num">01 · HIGH ALTITUDE</div>
                            <h3 class="card-serif-title">Adventure &amp; Trekking</h3>
                            <p class="card-brief-desc">
                                High-altitude Himalayan ridges, glacial valley trails, and scenic alpine summits like Khaliya Top and Milam Glacier designed for true explorers.
                            </p>
                            <a href="{{ route('tour-packages') }}#pkg-adventure" class="card-pill-cta">
                                <span>View Trek Packages</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </article>

                    <!-- Offer 2: Cultural & Pilgrimage Tours -->
                    <article class="about-editorial-card group">
                        <div class="card-media-wrap">
                            <img src="{{ asset('images/dest-adikailash.jpg') }}" alt="Cultural &amp; Pilgrimage Tours" loading="lazy">
                            <div class="card-media-gradient"></div>
                            <span class="card-tag-pill tag-amber">SACRED</span>
                        </div>
                        <div class="card-text-wrap">
                            <div class="card-kicker-num">02 · SPIRITUAL YATRAS</div>
                            <h3 class="card-serif-title">Cultural &amp; Pilgrimage Tours</h3>
                            <p class="card-brief-desc">
                                Revered spiritual yatras to sacred Himalayan peaks including Adi Kailash, Om Parvat, and ancient regional heritage temples with complete logistical care.
                            </p>
                            <a href="{{ route('tour-packages') }}#pkg-cultural" class="card-pill-cta">
                                <span>View Pilgrimage Tours</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </article>

                    <!-- Offer 3: Honeymoon Getaways -->
                    <article class="about-editorial-card group">
                        <div class="card-media-wrap">
                            <img src="{{ asset('images/dest-dalhousie.jpg') }}" alt="Honeymoon Getaways in serene hill stations" loading="lazy">
                            <div class="card-media-gradient"></div>
                            <span class="card-tag-pill tag-rose">ROMANTIC</span>
                        </div>
                        <div class="card-text-wrap">
                            <div class="card-kicker-num">03 · SCENIC RETREATS</div>
                            <h3 class="card-serif-title">Honeymoon Getaways</h3>
                            <p class="card-brief-desc">
                                Romantic escapes surrounded by misty pine hills, tranquil lake shores, private viewpoints, and boutique stays for quiet, unforgettable moments together.
                            </p>
                            <a href="{{ route('tour-packages') }}#pkg-honeymoon" class="card-pill-cta">
                                <span>View Honeymoon Trips</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </article>

                    <!-- Offer 4: Family Holiday Packages -->
                    <article class="about-editorial-card group">
                        <div class="card-media-wrap">
                            <img src="{{ asset('images/dest-munsyari.jpg') }}" alt="Family Holiday Packages" loading="lazy">
                            <div class="card-media-gradient"></div>
                            <span class="card-tag-pill tag-blue">FAMILY</span>
                        </div>
                        <div class="card-text-wrap">
                            <div class="card-kicker-num">04 · MULTI-GEN VACATIONS</div>
                            <h3 class="card-serif-title">Family Holiday Packages</h3>
                            <p class="card-brief-desc">
                                Comfort-first vacations with well-paced itineraries, family-friendly accommodations, and scenic sightseeing tailored for travelers of all ages.
                            </p>
                            <a href="{{ route('tour-packages') }}#pkg-family" class="card-pill-cta">
                                <span>View Family Packages</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </article>

                    <!-- Offer 5: Weekend Nature Escapes -->
                    <article class="about-editorial-card group">
                        <div class="card-media-wrap">
                            <img src="{{ asset('images/dest-westernghats.jpg') }}" alt="Weekend Nature Escapes" loading="lazy">
                            <div class="card-media-gradient"></div>
                            <span class="card-tag-pill tag-emerald">GETAWAYS</span>
                        </div>
                        <div class="card-text-wrap">
                            <div class="card-kicker-num">05 · SHORT BREAKS</div>
                            <h3 class="card-serif-title">Weekend Nature Escapes</h3>
                            <p class="card-brief-desc">
                                Rejuvenating short breaks to lush waterfalls, historic Sahyadri forts, and peaceful nature sanctuaries away from urban routine.
                            </p>
                            <a href="{{ route('tour-packages') }}#pkg-weekend" class="card-pill-cta">
                                <span>View Weekend Escapes</span>
                                <span class="arr">→</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- 6. Our Travel Philosophy Section (Image-3 Style Featured Story & Philosophy) -->
        <section class="about-section about-philosophy-section" id="philosophy">
            <div class="wrap">
                <!-- Section Top Monogram Bar -->
                <div class="about-editorial-meta" aria-hidden="true">
                    <span class="meta-star">✦</span>
                    <span class="meta-text">TRAVEL ETHOS</span>
                    <span class="meta-dot">·</span>
                    <span class="meta-text">OUR TRAVEL PHILOSOPHY</span>
                    <span class="meta-star">✦</span>
                </div>

                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="kicker">
                        Guiding Principles
                        <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h2 class="about-heading">Our Travel Philosophy</h2>
                </div>

                <!-- Featured Quote Card inspired by Image-3 middle section -->
                <div class="philosophy-featured-quote-card">
                    <div class="ph-quote-stars" aria-label="5 star philosophy rating">
                        ★★★★★
                    </div>
                    <blockquote class="ph-quote-text">
                        “Travel is not merely about moving across landscapes, but about returning with stories, reverence, and memories that stay with you for a lifetime.”
                    </blockquote>
                    <div class="ph-quote-author">
                        <strong>The Explore Trekora Ethos</strong>
                        <span>Curiosity · Culture · Nature · Lasting Memories</span>
                    </div>
                </div>

                <!-- The 4 Philosophy Pillars -->
                <div class="about-philosophy-grid">
                    <!-- Pillar 1: Curiosity -->
                    <div class="about-philosophy-card group">
                        <div class="ph-card-top-row">
                            <div class="ph-icon-box ph-curiosity">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
                                </svg>
                            </div>
                            <span class="ph-step-tag">01 / DISCOVERY</span>
                        </div>
                        <h3 class="ph-card-title">Curiosity</h3>
                        <p class="ph-card-desc">
                            The drive to explore beyond standard guidebooks. We seek out hidden valleys, untouched trails, and panoramic viewpoints that spark genuine wonder.
                        </p>
                    </div>

                    <!-- Pillar 2: Culture -->
                    <div class="about-philosophy-card group">
                        <div class="ph-card-top-row">
                            <div class="ph-icon-box ph-culture">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18z"/>
                                    <path d="M3.6 9h16.8M3.6 15h16.8"/>
                                    <path d="M11.5 3a17 17 0 0 0 0 18M12.5 3a17 17 0 0 1 0 18"/>
                                </svg>
                            </div>
                            <span class="ph-step-tag">02 / HERITAGE</span>
                        </div>
                        <h3 class="ph-card-title">Culture</h3>
                        <p class="ph-card-desc">
                            Deep respect for local heritage, sacred mountain traditions, indigenous folklore, and the warm mountain hospitality that welcomes every traveler as family.
                        </p>
                    </div>

                    <!-- Pillar 3: Nature -->
                    <div class="about-philosophy-card group">
                        <div class="ph-card-top-row">
                            <div class="ph-icon-box ph-nature">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                                </svg>
                            </div>
                            <span class="ph-step-tag">03 / SUSTAINABILITY</span>
                        </div>
                        <h3 class="ph-card-title">Nature</h3>
                        <p class="ph-card-desc">
                            Treading lightly and protecting pristine wilderness. We practice leave-no-trace ethics and champion sustainable travel across sensitive alpine environments.
                        </p>
                    </div>

                    <!-- Pillar 4: Lasting Memories -->
                    <div class="about-philosophy-card group">
                        <div class="ph-card-top-row">
                            <div class="ph-icon-box ph-memories">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                </svg>
                            </div>
                            <span class="ph-step-tag">04 / CONNECTION</span>
                        </div>
                        <h3 class="ph-card-title">Lasting Memories</h3>
                        <p class="ph-card-desc">
                            Travel measured not in kilometers traveled, but in campfire conversations, summit sunrises, and shared moments that stay with you forever.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Why Explore Trekora? Section (Image-3 Numbered Editorial Benefit Cards) -->
        <section class="about-section about-why-section" id="why-trekora">
            <div class="wrap">
                <!-- Section Top Monogram Bar -->
                <div class="about-editorial-meta" aria-hidden="true">
                    <span class="meta-star">✦</span>
                    <span class="meta-text">EXCELLENCE &amp; TRUST</span>
                    <span class="meta-dot">·</span>
                    <span class="meta-text">THE TREKORA PROMISE</span>
                    <span class="meta-star">✦</span>
                </div>

                <div class="text-center max-w-2xl mx-auto mb-12">
                    <span class="kicker">
                        The Trekora Difference
                        <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <h2 class="about-heading">Why Explore Trekora?</h2>
                    <p class="about-subheading">
                        We focus on what matters most to real adventurers: thoughtful planning, authentic local relationships, and attentive support.
                    </p>
                </div>

                <div class="about-why-grid">
                    <!-- Benefit 1 -->
                    <div class="about-why-card group">
                        <div class="why-card-top">
                            <div class="why-badge-num">01</div>
                            <div class="why-card-ic">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="3 11 22 2 13 21 11 13 3 11"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="why-card-title">Thoughtfully Curated Trails</h3>
                        <p class="why-card-desc">
                            Every route is designed with realistic pacing, proper altitude acclimatization, and maximum scenic rewards so you can absorb every moment.
                        </p>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="about-why-card group">
                        <div class="why-card-top">
                            <div class="why-badge-num">02</div>
                            <div class="why-card-ic">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="why-card-title">Authentic Local Insights</h3>
                        <p class="why-card-desc">
                            We partner with seasoned regional guides and village hosts who possess generational knowledge of mountain trails, weather shifts, and local lore.
                        </p>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="about-why-card group">
                        <div class="why-card-top">
                            <div class="why-badge-num">03</div>
                            <div class="why-card-ic">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <path d="M9 12l2 2 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="why-card-title">Safety &amp; Preparation Focus</h3>
                        <p class="why-card-desc">
                            From detailed gear checklists to high-altitude preparedness advice and group coordination, safety is woven into every phase of your journey.
                        </p>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="about-why-card group">
                        <div class="why-card-top">
                            <div class="why-badge-num">04</div>
                            <div class="why-card-ic">
                                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    <path d="M8 10h.01M12 10h.01M16 10h.01"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="why-card-title">Transparent &amp; Caring Support</h3>
                        <p class="why-card-desc">
                            Honest trip consultations with clear pricing and responsive communication from initial planning all the way through to your journey's safe return.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. Final CTA Section (Seamless Rounded Topographic Banner Matching Footer Architecture) -->
        <section class="about-cta-section" id="about-cta">
            <div class="wrap">
                <div class="about-topographic-banner">
                    <div class="topographic-discovery-card">
                        <div class="discovery-badge-meta">
                            <span>✦ YOUR NEXT ADVENTURE AWAITS ✦</span>
                        </div>

                        <h2 class="discovery-title">
                            “The world is waiting.<br>
                            <span class="text-teal-300">Where will you go?”</span>
                        </h2>

                        <p class="discovery-desc">
                            From snow-capped Himalayan ridges to peaceful hill retreats and sacred pilgrimage trails, Explore Trekora is ready to help you discover experiences worth remembering.
                        </p>

                        <!-- Two Pill Action Buttons (Image-3 Style) -->
                        <div class="discovery-actions">
                            <a href="{{ route('destinations') }}" class="discovery-pill-btn btn-teal-solid">
                                <span>Explore All Destinations</span>
                                <span class="arr">→</span>
                            </a>
                            <a href="{{ route('tour-packages') }}" class="discovery-pill-btn btn-glass-border">
                                <span>Browse Tour Packages</span>
                                <span class="arr">→</span>
                            </a>
                        </div>

                        <!-- Direct WhatsApp Support Helpline -->
                        <div class="discovery-support">
                            <span class="support-label">Need custom itinerary planning or instant advice?</span>
                            <a href="https://wa.me/918460922935" target="_blank" rel="noopener noreferrer" class="support-wa-link">
                                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                                <span>Chat on WhatsApp: +91 8460922935</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
</x-layout>
