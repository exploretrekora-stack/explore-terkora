<x-layout>
    <x-navbar />

    <main class="dest-detail-page">
        <!-- Top Breadcrumb Header -->
        <section class="dest-detail-breadcrumb-sec">
            <div class="wrap">
                <nav class="dest-breadcrumb dest-detail-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route(($fromTourPackage ?? false) ? 'tour-packages' : 'destinations') }}" class="dest-breadcrumb-link">{{ ($fromTourPackage ?? false) ? 'Tour Packages' : 'Destinations' }}</a>
                    <span class="dest-breadcrumb-sep">&gt;</span>
                    <span class="dest-breadcrumb-curr">{{ $destination['title'] }}</span>
                </nav>
                <div class="dest-breadcrumb-divider"></div>
            </div>
        </section>

        <!-- Destination Hero Header Banner -->
        <section class="dest-detail-hero">
            <div class="wrap">
                <div class="dest-detail-hero-card" id="heroCard">
                    <!-- Multi-Slide Background Gallery (Best 5 authentic images) -->
                    <div class="dest-detail-hero-media">
                        <div class="hero-slides-track" id="heroSlidesTrack">
                            @if(!empty($destination['gallery']) && count($destination['gallery']) > 0)
                                @foreach($destination['gallery'] as $idx => $gImg)
                                    <div class="hero-slide {{ $idx === 0 ? 'is-active' : '' }}" data-slide-index="{{ $idx }}">
                                        <img src="{{ asset($gImg['src']) }}" alt="{{ $gImg['title'] }} - {{ $destination['title'] }}" loading="{{ $idx === 0 ? 'eager' : 'lazy' }}">
                                    </div>
                                @endforeach
                            @else
                                <div class="hero-slide is-active" data-slide-index="0">
                                    <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}" loading="eager">
                                </div>
                            @endif
                        </div>
                        <div class="dest-detail-hero-overlay"></div>
                    </div>

                    <!-- Slide Navigation Arrows (Prev / Next) -->
                    @if(!empty($destination['gallery']) && count($destination['gallery']) > 1)
                        <button type="button" class="hero-arrow-btn hero-arrow-prev" id="heroPrevBtn" aria-label="Previous photograph">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>
                        <button type="button" class="hero-arrow-btn hero-arrow-next" id="heroNextBtn" aria-label="Next photograph">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
                    @endif

                    <div class="dest-detail-hero-content">
                        <!-- Top Bar inside Hero Content: Badges on left, Photo Switcher on right -->
                        <div class="dest-hero-header-row">
                            <div class="dest-detail-badges">
                                <span class="dest-badge {{ $destination['category_tag'] }}">{{ $destination['category'] }}</span>
                                <span class="dest-badge tag-days">{{ $destination['duration'] }}</span>
                                <span class="dest-badge tag-alt">📍 {{ $destination['location_short'] }}</span>
                            </div>

                            @if(!empty($destination['gallery']) && count($destination['gallery']) > 1)
                                <div class="dest-hero-gallery-badge">
                                    <span class="hero-gallery-pill">📷 {{ count($destination['gallery']) }} Photos</span>
                                    <div class="dest-hero-thumbs" role="tablist" aria-label="Photo thumbnails">
                                        @foreach($destination['gallery'] as $idx => $gImg)
                                            <button 
                                                type="button" 
                                                class="hero-thumb-btn {{ $idx === 0 ? 'is-active' : '' }}" 
                                                data-goto-slide="{{ $idx }}"
                                                title="{{ $gImg['title'] }}: {{ $gImg['caption'] }}"
                                                aria-label="View photo {{ $idx + 1 }}: {{ $gImg['title'] }}"
                                            >
                                                <img src="{{ asset($gImg['src']) }}" alt="{{ $gImg['title'] }}">
                                                <span class="hero-thumb-num">{{ $idx + 1 }}</span>
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <h1 class="dest-detail-title">{{ $destination['hero_heading'] ?? $destination['title'] }}</h1>
                        <p class="dest-detail-tagline">{{ $destination['tagline'] }}</p>

                        @if(!empty($destination['hero_actions']))
                            <div class="hero-package-actions">
                                <button
                                    type="button"
                                    class="btn btn-white dest-detail-enquire-btn"
                                    data-dest="{{ $destination['enquiry_key'] }}"
                                    data-title="{{ $destination['title'] }}"
                                    data-location="{{ $destination['location_short'] }}"
                                    data-days="{{ $destination['duration'] }}"
                                >
                                    Enquire Now <span>→</span>
                                </button>
                                <a class="btn hero-itinerary-link" href="#itinerary">View Itinerary</a>
                            </div>
                        @endif

                        <!-- Quick Info Ribbon -->
                        @php
                            $ribbonItems = array_filter([
                                'DURATION' => $destination['duration_full'] ?? null,
                                'ALTITUDE' => $destination['altitude'] ?? null,
                                'DIFFICULTY' => $destination['difficulty'] ?? null,
                                'BEST SEASON' => $destination['best_season'] ?? null,
                                'START POINT' => $destination['starting_point'] ?? null,
                            ]);
                        @endphp
                        @if($ribbonItems !== [])
                            <div class="dest-detail-ribbon">
                                @foreach($ribbonItems as $ribbonLabel => $ribbonValue)
                                    @if(! $loop->first)
                                        <div class="ribbon-sep"></div>
                                    @endif
                                    <div class="ribbon-item">
                                        <span class="ribbon-label">{{ $ribbonLabel }}</span>
                                        <strong class="ribbon-val">{{ $ribbonValue }}</strong>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Active Photo Caption / Indicator bar under ribbon -->
                        @if(!empty($destination['gallery']) && count($destination['gallery']) > 1)
                            <div class="hero-active-photo-bar">
                                <div class="hero-active-photo-info">
                                    <span class="photo-indicator-dot"></span>
                                    <strong id="heroPhotoTitle">{{ $destination['gallery'][0]['title'] }}</strong>
                                    @if(!empty($destination['gallery'][0]['caption']))
                                        <span class="photo-info-sep">·</span>
                                        <span id="heroPhotoCaption">{{ $destination['gallery'][0]['caption'] }}</span>
                                    @else
                                        <span id="heroPhotoCaption" hidden></span>
                                    @endif
                                </div>
                                <div class="hero-photo-counter">
                                    <span id="heroActiveIdx">1</span> / {{ count($destination['gallery']) }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Body: 2 Columns (Content + Sticky Booking Sidebar) -->
        <section class="dest-detail-body-sec">
            <div class="wrap">
                <div class="dest-detail-layout">
                    <!-- Left Column: Detailed Content Sections -->
                    <div class="dest-detail-main">
                        <!-- Overview Section -->
                        <div class="dest-detail-section" id="overview">
                            <span class="ey">EXPEDITION OVERVIEW</span>
                            <h2>About {{ $destination['title'] }}</h2>
                            <div class="dest-detail-prose">
                                @foreach($destination['overview_paragraphs'] as $para)
                                    <p>{{ $para }}</p>
                                @endforeach
                            </div>
                        </div>

                        <!-- Key Highlights -->
                        @if(!empty($destination['highlights']))
                        <div class="dest-detail-section" id="highlights">
                            <span class="ey">WHY THIS JOURNEY</span>
                            <h2>{{ $destination['highlights_heading'] ?? 'Key Highlights & Sacred Landmarks' }}</h2>
                            <div class="dest-highlights-grid">
                                @foreach($destination['highlights'] as $highlight)
                                    <div class="highlight-card">
                                        <div class="highlight-icon">{{ $highlight['icon'] }}</div>
                                        <div class="highlight-text">
                                            <h3>{{ $highlight['title'] }}</h3>
                                            <p>{{ $highlight['desc'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <!-- Day-by-Day Itinerary -->
                        @if(!empty($destination['itinerary']))
                        <div class="dest-detail-section" id="itinerary">
                            <span class="ey">{{ $destination['itinerary_eyebrow'] ?? 'DAY-BY-DAY SCHEDULE' }}</span>
                            <h2>{{ $destination['itinerary_heading'] ?? 'Detailed Expedition Itinerary' }}</h2>

                            @if(!empty($destination['dharchula_itinerary']))
                                <div class="itinerary-opt-badge">
                                    <span>Option 2: Delhi to Delhi (7N / 8D)</span>
                                </div>
                            @endif

                            <div class="itinerary-timeline">
                                @foreach($destination['itinerary'] as $item)
                                    <div class="itinerary-step">
                                        <div class="itinerary-marker">
                                            <span class="day-badge">{{ $item['day'] }}</span>
                                            <div class="timeline-line"></div>
                                        </div>
                                        <div class="itinerary-content">
                                            <h3>{{ $item['title'] }}</h3>
                                            @if(!empty($item['desc']))
                                                <p>{{ $item['desc'] }}</p>
                                            @endif
                                            @if(!empty($item['points']))
                                                <ul class="itinerary-points">
                                                    @foreach($item['points'] as $point)
                                                        <li>{{ $point }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            @if(!empty($item['note']))
                                                <p class="itinerary-confirm">{{ $item['note'] }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            @if(!empty($destination['dharchula_itinerary']))
                                <div class="dharchula-itinerary-card">
                                    <div class="dharchula-itinerary-header">
                                        <span class="ey">SHORTENED ROUTE</span>
                                        <h3>{{ $destination['dharchula_itinerary']['title'] }}</h3>
                                    </div>
                                    <ul class="dharchula-itinerary-list">
                                        @foreach($destination['dharchula_itinerary']['days'] as $dDay)
                                            <li>
                                                <span class="dharchula-dot">✦</span>
                                                <span>{{ $dDay }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        @endif

                        @if(!empty($destination['sections']))
                            @foreach($destination['sections'] as $section)
                                <div class="dest-detail-section">
                                    <h2>{{ $section['heading'] }}</h2>
                                    <div class="dest-detail-prose">
                                        @foreach($section['paragraphs'] ?? [] as $para)
                                            <p>{{ $para }}</p>
                                        @endforeach
                                    </div>
                                    @if(!empty($section['items']))
                                        <div class="essentials-box">
                                            <ul class="essentials-list">
                                                @foreach($section['items'] as $item)
                                                    <li>
                                                        <svg viewBox="0 0 20 20" fill="currentColor" class="ess-check" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                        </svg>
                                                        <span>{{ $item }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @endif

                        @if(!empty($destination['enquiry_prompt']))
                            <div class="dest-detail-section" id="package-enquiry">
                                <h2>{{ $destination['enquiry_prompt']['heading'] }}</h2>
                                <div class="dest-detail-prose">
                                    <p>{{ $destination['enquiry_prompt']['description'] }}</p>
                                </div>
                                <button
                                    type="button"
                                    class="btn btn-teal dest-detail-enquire-btn"
                                    data-dest="{{ $destination['enquiry_key'] }}"
                                    data-title="{{ $destination['title'] }}"
                                    data-location="{{ $destination['location_short'] }}"
                                    data-days="{{ $destination['duration'] }}"
                                >
                                    {{ $destination['enquiry_prompt']['button'] }} <span>→</span>
                                </button>
                            </div>
                        @endif

                        <!-- Fallback Essentials for destinations without important_points -->
                        @if(empty($destination['important_points']) && !empty($destination['essentials']))
                            <div class="dest-detail-section" id="essentials">
                                <span class="ey">PREPARATION GUIDE</span>
                                <h2>Important Guidelines &amp; Essentials</h2>
                                <div class="essentials-box">
                                    <ul class="essentials-list">
                                        @foreach($destination['essentials'] as $ess)
                                            <li>
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="ess-check" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>{{ $ess }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Right Column: Sticky Booking / Enquiry Card -->
                    <aside class="dest-detail-sidebar">
                        <div class="dest-sticky-card">
                            <div class="sticky-card-header">
                                <small class="sticky-price-label">{{ $destination['price_label'] }}</small>
                                <strong class="sticky-price-val">{{ $destination['price_value'] }}</strong>
                                @if($destination['show_generic_claims'] ?? true)
                                    <span class="sticky-price-note">All-inclusive customizable itinerary</span>
                                @endif
                            </div>

                            <div class="sticky-quick-perks">
                                <div class="perk-row">
                                    <span>⏱️ Duration</span>
                                    <strong>{{ $destination['duration'] }}</strong>
                                </div>
                                @if(!empty($destination['altitude']))
                                    <div class="perk-row">
                                        <span>🏔️ Altitude</span>
                                        <strong>{{ $destination['altitude'] }}</strong>
                                    </div>
                                @endif
                                @if(!empty($destination['group_size']))
                                    <div class="perk-row">
                                        <span>👥 Group Size</span>
                                        <strong>{{ $destination['group_size'] }}</strong>
                                    </div>
                                @endif
                                <div class="perk-row">
                                    <span>📍 Location</span>
                                    <strong>{{ $destination['location_short'] }}</strong>
                                </div>
                            </div>

                            <div class="sticky-actions">
                                <button 
                                    type="button" 
                                    class="btn btn-teal btn-block dest-detail-enquire-btn"
                                    data-dest="{{ $destination['enquiry_key'] }}"
                                    data-title="{{ $destination['title'] }}"
                                    data-location="{{ $destination['location_short'] }}"
                                    data-days="{{ $destination['duration'] }}"
                                >
                                    Enquire for this Journey <span>→</span>
                                </button>

                                <a 
                                    href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in ' . $destination['title'] . ' (' . $destination['duration'] . '). Please share package details and availability.') }}" 
                                    target="_blank" 
                                    rel="noopener noreferrer" 
                                    class="btn btn-outline-teal btn-block btn-wa"
                                >
                                    <span>💬 Chat on WhatsApp</span>
                                </a>

                                <a href="tel:+918460922935" class="btn btn-outline-teal btn-block btn-call">
                                    <span>📞 Call Expedition Leader</span>
                                </a>
                            </div>

                            @if($destination['show_generic_claims'] ?? true)
                            <!-- Trust Guarantee Badges -->
                            <div class="sticky-trust-box">
                                <div class="trust-item">
                                    <span class="trust-ic">🛡️</span>
                                    <span>Government Registered &amp; Certified Guides</span>
                                </div>
                                <div class="trust-item">
                                    <span class="trust-ic">🏥</span>
                                    <span>Oxygen Support &amp; Wilderness First Aid</span>
                                </div>
                                <div class="trust-item">
                                    <span class="trust-ic">📄</span>
                                    <span>100% Inner Line Permit (ILP) Assistance</span>
                                </div>
                            </div>
                            @endif
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <!-- Sacred Circuit & High Altitude Safety (Side by Side: Circuit on Left, Safety Portrait Card on Right) -->
        @if(!empty($destination['places_seen']))
            <section class="dest-circuit-safety-sec">
                <div class="wrap">
                    <div class="dest-circuit-safety-grid">
                        <!-- Left Column: Sacred Circuit (22 Places) -->
                        <div class="dest-detail-section dest-circuit-card" id="places-seen">
                            <span class="ey">SACRED CIRCUIT</span>
                            <h2>{{ $destination['places_seen_heading'] ?? '22 Places We See in Adi Kailash & Om Parvat Yatra' }}</h2>
                            <p class="dest-section-intro">Every sacred pilgrimage landmark visited throughout Kumaon and the divine Vyas Valley:</p>
                            <div class="dest-places-grid">
                                @foreach($destination['places_seen'] as $pIdx => $place)
                                    <div class="place-seen-card">
                                        <div class="place-seen-top">
                                            <span class="place-seen-num">{{ $pIdx + 1 }}</span>
                                            <span class="place-seen-badge">{{ $place['badge'] }}</span>
                                        </div>
                                        <h3>{{ $place['name'] }}</h3>
                                        <p>{{ $place['desc'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Column: High Altitude Safety (Portrait Mode Card) -->
                        @if(!empty($destination['support_system']))
                            <div class="dest-detail-section dest-safety-portrait-card" id="support-system">
                                <div class="dest-safety-portrait-header">
                                    <span class="ey">HIGH ALTITUDE SAFETY</span>
                                    <h2>High-Altitude Support &amp; Medical Facilities</h2>
                                    <p class="dest-section-intro">Complete on-ground medical equipment stationed and provided for high-altitude security:</p>
                                </div>
                                <div class="support-system-portrait-list">
                                    @foreach($destination['support_system'] as $sup)
                                        <div class="support-equip-card portrait-mode">
                                            <div class="support-equip-icon">{{ $sup['icon'] }}</div>
                                            <div class="support-equip-info">
                                                <h4>{{ $sup['title'] }}</h4>
                                                <p>{{ $sup['desc'] }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif

        <!-- Authentic Sacred Gallery (Full Width - Exactly 3 Photo Cards Per Line) -->
        @if(!empty($destination['gallery']) && count($destination['gallery']) > 0)
            <section class="dest-gallery-full-sec" id="gallery">
                <div class="wrap">
                    <div class="dest-detail-section dest-gallery-full-card">
                        <div class="dest-section-header-flex">
                            <div>
                                <span class="ey">REAL EXPEDITION PHOTOGRAPHY</span>
                                <h2>{{ $destination['gallery_heading'] ?? ($destination['title'].' Photographs') }}</h2>
                                @if(!empty($destination['gallery_intro']))
                                    <p class="dest-section-intro">{{ $destination['gallery_intro'] }}</p>
                                @endif
                            </div>
                            <span class="gallery-count-pill">📷 {{ count($destination['gallery']) }} Photos</span>
                        </div>

                        <div class="dest-gallery-grid-three">
                            @foreach($destination['gallery'] as $idx => $photo)
                                <div class="dest-gallery-item" data-photo-index="{{ $idx }}" role="button" tabindex="0" title="Click to view {{ $photo['title'] }} in hero darshan">
                                    <div class="dest-gallery-img-wrap">
                                        <img src="{{ asset($photo['src']) }}" alt="{{ $photo['title'] }}" loading="lazy">
                                        <div class="dest-gallery-hover-overlay">
                                            <span class="gallery-zoom-ic">👁️ View in Hero Darshan</span>
                                        </div>
                                    </div>
                                    <div class="dest-gallery-info">
                                        <div class="gallery-item-header">
                                            <span class="gallery-photo-num">Photo {{ $idx + 1 }}</span>
                                            <span class="gallery-click-hint">Click to Preview ↗</span>
                                        </div>
                                        <h4>{{ $photo['title'] }}</h4>
                                        @if(!empty($photo['caption']))
                                            <p>{{ $photo['caption'] }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Important Yatra Information & Essentials (Side by Side - Image-4 Cards) -->
        @if(!empty($destination['important_points']))
            <section class="dest-advisory-essentials-sec">
                <div class="wrap">
                    <div class="dest-advisory-essentials-grid">
                        <!-- Left Column: Pilgrim Advisory / Important Points -->
                        <div class="dest-detail-section dest-advisory-card" id="important-points">
                            <span class="ey">PILGRIM ADVISORY</span>
                            <h2>Important Yatra Information &amp; Regulations</h2>
                            <div class="important-points-box full-height">
                                <ul class="important-points-list">
                                    @foreach($destination['important_points'] as $pt)
                                        <li>
                                            <span class="point-bullet">ℹ️</span>
                                            <span>{{ $pt }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Right Column: Preparation Guide / Essentials -->
                        <div class="dest-detail-section dest-essentials-card" id="essentials">
                            <span class="ey">PREPARATION GUIDE</span>
                            <h2>Important Guidelines &amp; Essentials</h2>
                            <div class="essentials-box full-height">
                                <ul class="essentials-list side-mode">
                                    @foreach($destination['essentials'] as $ess)
                                        <li>
                                            <svg viewBox="0 0 20 20" fill="currentColor" class="ess-check" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            <span>{{ $ess }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Related Journeys Section -->
        @if(count($related) > 0)
            <section class="dest-related-sec">
                <div class="wrap">
                    <div class="related-header">
                        <span class="ey">EXPLORE MORE ESCAPES</span>
                        <h2>Other Destinations You May Love</h2>
                    </div>

                    <div class="dest-grid">
                        @foreach($related as $rel)
                            @php($relatedComingSoon = \App\Services\DestinationRepository::isComingSoon($rel['slug']))
                            <article class="dest-card{{ $relatedComingSoon ? ' is-coming-soon' : '' }}" data-category="{{ $rel['category_tag'] }}">
                                @if($relatedComingSoon)
                                    <p class="coming-soon-title">Coming Soon</p>
                                @endif
                                <div class="dest-card-media">
                                    <img src="{{ asset($rel['image']) }}" alt="{{ $rel['title'] }}" loading="lazy">
                                    <div class="dest-card-badge-top">
                                        <span class="dest-badge {{ $rel['category_tag'] }}">{{ $rel['category'] }}</span>
                                        <span class="dest-badge tag-days">{{ $rel['duration'] }}</span>
                                    </div>
                                    <span class="dest-card-location">📍 {{ $rel['location_short'] }}</span>
                                </div>
                                <div class="dest-card-body">
                                    <h3>{{ $rel['title'] }}</h3>
                                    <p class="dest-card-desc">{{ $rel['card_desc'] }}</p>
                                    <ul class="dest-card-perks">
                                        @foreach(array_slice($rel['perks'], 0, 3) as $perk)
                                            <li><span>✓</span> {{ $perk }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="dest-card-footer">
                                        <div class="dest-card-actions">
                                            @if($relatedComingSoon)
                                                <span class="btn btn-outline-teal dest-card-details-btn is-disabled">Coming Soon</span>
                                            @else
                                                <a href="{{ route((($fromTourPackage ?? false) && in_array($rel['slug'], \App\Services\DestinationRepository::packageSlugs(), true)) ? 'tour-packages.show' : 'destinations.show', $rel['slug']) }}" class="btn btn-outline-teal dest-card-details-btn">View Details</a>
                                            @endif
                                            <x-inquire-now
                                                class="dest-card-enquire-btn"
                                                data-dest="{{ $rel['enquiry_key'] }}"
                                                data-title="{{ $rel['title'] }}"
                                                data-location="{{ $rel['location_short'] }}"
                                                data-days="{{ $rel['duration'] }}"
                                            />
                                            <a 
                                                href="https://wa.me/918460922935?text={{ urlencode('Hello Explore Trekora, I am interested in ' . $rel['title'] . ' (' . $rel['duration'] . '). Please share package details and availability.') }}" 
                                                target="_blank" 
                                                rel="noopener noreferrer" 
                                                class="btn-card-wa" 
                                                title="Chat on WhatsApp" 
                                                aria-label="Chat on WhatsApp"
                                            >
                                                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm.01 1.67c4.54 0 8.24 3.7 8.24 8.24 0 2.2-.86 4.28-2.42 5.84a8.188 8.188 0 01-5.82 2.41c-1.45 0-2.88-.38-4.14-1.11l-.3-.17-3.12.82.83-3.04-.19-.31a8.19 8.19 0 01-1.25-4.44c0-4.54 3.7-8.24 8.25-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.06-.39-2.02-1.25-.75-.67-1.26-1.5-1.41-1.75-.14-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1 0 1.24.9 2.44 1.03 2.61.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.21-.18-.46-.3z"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

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
                    <h2 class="dest-modal-title" id="modal-dest-title">{{ $destination['title'] }}</h2>
                    <p class="dest-modal-subtitle" id="modal-dest-subtitle">{{ $destination['location_short'] }} · {{ $destination['duration'] }}</p>
                </div>

                <!-- Modal Form Body -->
                <div class="dest-modal-body">
                    <form id="dest-inquire-form" action="{{ route('enquiries.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="travellers" value="1">
                        <input type="hidden" name="message" id="modal-hidden-message" value="Inquiry initiated from {{ $destination['title'] }} detail page.">

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
                                    <option value="Adi Kailash & Om Parvat" data-title="Adi Kailash &amp; Om Parvat Yatra" data-location="Pithoragarh, Uttarakhand · 8D / 7N" {{ $destination['enquiry_key'] === 'Adi Kailash & Om Parvat' ? 'selected' : '' }}>Adi Kailash &amp; Om Parvat Yatra</option>
                                    <option value="Char Dham Yatra" data-title="Char Dham Yatra 2026" data-location="Haridwar to Haridwar · 11D / 10N" {{ $destination['enquiry_key'] === 'Char Dham Yatra' ? 'selected' : '' }}>Char Dham Yatra</option>
                                    <option value="Khaliya Top Trek" data-title="Khaliya Top Trek" data-location="Munsiyari, Uttarakhand · 1–2 Days" {{ $destination['enquiry_key'] === 'Khaliya Top Trek' ? 'selected' : '' }}>Khaliya Top Trek</option>
                                    <option value="Milam Glacier Trek" data-title="Milam Glacier Trek" data-location="Pithoragarh, Uttarakhand · 9–12 Days" {{ $destination['enquiry_key'] === 'Milam Glacier Trek' ? 'selected' : '' }}>Milam Glacier Trek</option>
                                    <option value="Kareri Lake Trek" data-title="Kareri Lake Trek" data-location="Dharamshala, Himachal Pradesh · 2D / 1N" {{ $destination['enquiry_key'] === 'Kareri Lake Trek' ? 'selected' : '' }}>Kareri Lake Trek</option>
                                    <option value="Dalhousie & Dharamshala" data-title="Dalhousie &amp; Dharamshala Tour" data-location="Himachal Pradesh · 8 Days" {{ $destination['enquiry_key'] === 'Dalhousie & Dharamshala' ? 'selected' : '' }}>Dalhousie &amp; Dharamshala Tour</option>
                                    <option value="Harihar Fort Trek" data-title="Harihar Fort &amp; Harishchandragad" data-location="Nashik &amp; Ahmednagar, Maharashtra · 2D / 2N" {{ $destination['enquiry_key'] === 'Harihar Fort Trek' ? 'selected' : '' }}>Harihar Fort &amp; Harishchandragad</option>
                                    <option value="Girnar" data-title="Girnar Pilgrimage Trek" data-location="Junagadh, Gujarat · 2D / 1N" {{ $destination['enquiry_key'] === 'Girnar' ? 'selected' : '' }}>Girnar Pilgrimage Trek · Coming Soon</option>
                                    <option value="Mount Abu" data-title="Mount Abu Eco Getaway" data-location="Aravalli Range, Rajasthan · 3D / 2N" {{ $destination['enquiry_key'] === 'Mount Abu' ? 'selected' : '' }}>Mount Abu Eco Getaway · Coming Soon</option>
                                    <option value="Munsyari & Kausani" data-title="Munsyari &amp; Kausani" data-location="Kathgodam to Mukteshwar · 6 Days" {{ $destination['enquiry_key'] === 'Munsyari & Kausani' ? 'selected' : '' }}>Munsyari &amp; Kausani</option>
                                    <option value="Dang" data-title="Dang Forest Circuit" data-location="Saputara &amp; Dang, Gujarat · 3D / 2N" {{ $destination['enquiry_key'] === 'Dang' ? 'selected' : '' }}>Dang Forest Circuit · Coming Soon</option>
                                    <option value="Dediapada" data-title="Dediapada Wilderness Trek" data-location="Shoolpaneshwar, Gujarat · 2D / 1N" {{ $destination['enquiry_key'] === 'Dediapada' ? 'selected' : '' }}>Dediapada Wilderness Trek · Coming Soon</option>
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

                    <!-- Success State -->
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

    <!-- Hero Interactive Multi-Photo Slider Script -->
    <script>
        (function() {
            const heroTrack = document.getElementById('heroSlidesTrack');
            if (!heroTrack) return;

            const slides = heroTrack.querySelectorAll('.hero-slide');
            if (slides.length <= 1) return;

            const prevBtn = document.getElementById('heroPrevBtn');
            const nextBtn = document.getElementById('heroNextBtn');
            const thumbBtns = document.querySelectorAll('.hero-thumb-btn');
            const photoTitle = document.getElementById('heroPhotoTitle');
            const photoCaption = document.getElementById('heroPhotoCaption');
            const photoIdx = document.getElementById('heroActiveIdx');
            const heroCard = document.getElementById('heroCard');

            let currentIndex = 0;
            let autoTimer = null;
            const total = slides.length;

            const galleryData = @json($destination['gallery'] ?? []);

            function updateSlide(newIdx) {
                currentIndex = (newIdx + total) % total;

                slides.forEach((slide, i) => {
                    slide.classList.toggle('is-active', i === currentIndex);
                });

                thumbBtns.forEach((btn, i) => {
                    btn.classList.toggle('is-active', i === currentIndex);
                });

                if (galleryData[currentIndex]) {
                    if (photoTitle) photoTitle.textContent = galleryData[currentIndex].title;
                    if (photoCaption) {
                        const caption = galleryData[currentIndex].caption || '';
                        photoCaption.textContent = caption;
                        photoCaption.hidden = caption === '';
                    }
                }
                if (photoIdx) photoIdx.textContent = (currentIndex + 1);
            }

            function nextSlide() {
                updateSlide(currentIndex + 1);
            }

            function prevSlide() {
                updateSlide(currentIndex - 1);
            }

            function startAutoPlay() {
                stopAutoPlay();
                autoTimer = setInterval(nextSlide, 5000);
            }

            function stopAutoPlay() {
                if (autoTimer) {
                    clearInterval(autoTimer);
                    autoTimer = null;
                }
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    nextSlide();
                    startAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    prevSlide();
                    startAutoPlay();
                });
            }

            thumbBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const idx = parseInt(btn.getAttribute('data-goto-slide'), 10);
                    if (!isNaN(idx)) {
                        updateSlide(idx);
                        startAutoPlay();
                    }
                });
            });

            // Connect main body gallery cards to the hero slider
            document.querySelectorAll('.dest-gallery-item').forEach(item => {
                item.addEventListener('click', () => {
                    const idx = parseInt(item.getAttribute('data-photo-index'), 10);
                    if (!isNaN(idx)) {
                        updateSlide(idx);
                        if (heroCard) {
                            heroCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                        startAutoPlay();
                    }
                });
                item.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        item.click();
                    }
                });
            });

            // Pause autoplay on mouse hover over hero
            if (heroCard) {
                heroCard.addEventListener('mouseenter', stopAutoPlay);
                heroCard.addEventListener('mouseleave', startAutoPlay);
            }

            // Keyboard navigation for slides
            document.addEventListener('keydown', (e) => {
                if (document.activeElement && ['INPUT', 'TEXTAREA', 'SELECT'].includes(document.activeElement.tagName)) return;
                const modal = document.getElementById('dest-inquire-modal');
                if (modal && modal.classList.contains('is-open')) return;
                
                if (e.key === 'ArrowRight') nextSlide();
                if (e.key === 'ArrowLeft') prevSlide();
            });

            startAutoPlay();
        })();
    </script>

    <!-- Detail Page Modal Script -->
    <script>
        (function() {
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

            const searchedDate = @json(request('travel_date'));
            const searchedTravelers = @json(request('travelers'));

            if (modalDateInput) {
                const today = new Date().toISOString().split('T')[0];
                modalDateInput.min = today;
                const nextWeek = new Date(Date.now() + 7 * 86400000).toISOString().split('T')[0];
                modalDateInput.value = /^\d{4}-\d{2}-\d{2}$/.test(searchedDate) ? searchedDate : nextWeek;
            }

            function openModal(destKey, title, location, days) {
                if (!modal) return;
                if (modalForm) modalForm.classList.remove('hidden');
                if (modalSuccess) modalSuccess.classList.add('hidden');
                if (modalErrorBox) {
                    modalErrorBox.classList.add('hidden');
                    modalErrorBox.textContent = '';
                }

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

                if (modalTitle) modalTitle.textContent = title || '{{ $destination["title"] }}';
                if (modalSubtitle) modalSubtitle.textContent = (location && days) ? `${location} · ${days}` : '{{ $destination["location_short"] }} · {{ $destination["duration"] }}';

                modal.classList.add('is-open');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';

                const firstInput = document.getElementById('modal-fullname');
                if (firstInput) setTimeout(() => firstInput.focus({ preventScroll: true }), 80);
            }

            function closeModal() {
                if (!modal) return;
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

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

            document.querySelectorAll('.dest-detail-enquire-btn, .dest-card-enquire-btn').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const destKey = btn.getAttribute('data-dest');
                    const title = btn.getAttribute('data-title');
                    const location = btn.getAttribute('data-location');
                    const days = btn.getAttribute('data-days');
                    openModal(destKey, title, location, days);
                });
            });

            if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
            if (modalSuccessClose) modalSuccessClose.addEventListener('click', closeModal);

            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeModal();
                });
            }

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) {
                    closeModal();
                }
            });

            if (modalForm) {
                modalForm.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    if (modalHiddenMessage && modalAddressInput) {
                        const addr = modalAddressInput.value.trim();
                        const travelerNote = typeof searchedTravelers === 'string' && searchedTravelers.trim() !== ''
                            ? ` Travelers: ${searchedTravelers.trim()}.`
                            : '';
                        modalHiddenMessage.value = addr
                            ? `Address: ${addr}. Enquired from {{ $destination['title'] }} detail page.${travelerNote}`
                            : `Enquiry submitted from {{ $destination['title'] }} detail page.${travelerNote}`;
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
                                const selectedDest = modalSelect ? modalSelect.options[modalSelect.selectedIndex].text : '{{ $destination["title"] }}';
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
