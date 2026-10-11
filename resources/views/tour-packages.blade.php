<x-layout>
    <x-navbar />

    <main class="dest-page pkg-main">
        <!-- Adventure Hero Banner (Image-2 UI matching Image-1 Data) -->
        <section class="pkg-hero-banner" id="pkg-hero">
            <div class="pkg-hero-media">
                <img 
                    src="{{ asset('images/pkg-hero-adventure.jpg') }}" 
                    alt="Explore Trekora – Tour Packages" 
                    class="pkg-hero-img"
                    loading="eager"
                />
                <div class="pkg-hero-overlay"></div>
            </div>

            <div class="wrap pkg-hero-container">
                <!-- Center Content Box -->
                <div class="pkg-hero-content">
                    <!-- Top Breadcrumb (Centered & Perfectly Aligned) -->
                    <nav class="pkg-hero-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep">/</span>
                        <span class="curr">Tour Packages</span>
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

                    <!-- Script Eyebrow "Discover the" -->
                    <div class="pkg-hero-script">Discover the</div>

                    <!-- Main Headline (Image-1 text: "Explore all packages.", Image-2 bold white display) -->
                    <h1 class="pkg-hero-title">Explore all packages.</h1>

                    <!-- Subtitle (Image-1 description text, Image-2 white style) -->
                    <p class="pkg-hero-desc">
                        Cultural, honeymoon, adventure, family, and weekend groups. Each card opens the existing destination, or the enquiry form when a package page is not ready yet.
                    </p>

                    <!-- CTA Button ("View Packages", linking down to packages) -->
                    <div class="pkg-hero-cta">
                        <a href="#pkg-cultural" class="pkg-hero-btn">
                            <span>View Packages</span>
                            <svg viewBox="0 0 20 20" width="16" height="16" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.69l3.72-3.72a.75.75 0 111.06 1.06l-5 5a.75.75 0 01-1.06 0l-5-5a.75.75 0 111.06-1.06l3.72 3.72V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Torn-Paper Wave Edge Divider (merging into white content below) -->
            <div class="pkg-hero-torn" aria-hidden="true">
                <svg viewBox="0 0 1440 90" preserveAspectRatio="none" fill="#ffffff">
                    <path d="M0,38 C35,52 68,58 102,42 C140,24 178,48 215,62 C255,76 292,54 330,38 C370,22 408,46 446,60 C485,74 522,48 560,34 C600,20 638,46 676,62 C715,78 752,50 790,34 C830,18 868,44 906,58 C945,72 982,50 1020,36 C1060,22 1098,48 1136,64 C1175,80 1212,52 1250,36 C1290,20 1328,46 1365,58 C1395,68 1420,52 1440,44 L1440,90 L0,90 Z"></path>
                </svg>
            </div>
        </section>

        <section class="dest-listing tour-packages" aria-label="Tour package groups">
            <div class="wrap">
                @foreach (\App\Services\DestinationRepository::packageGroups() as $group)
                    <div class="pkg-group">
                        <h2 class="pkg-title" id="{{ $group['id'] }}">
                            {{ $group['title'] }}
                            <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
                                <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </h2>
                        <div class="dest-grid">
                            @foreach ($group['cards'] as $card)
                                <a
                                    class="dest-card pkg-card"
                                    href="{{ $card['slug'] ? route('tour-packages.show', $card['slug']) : route('home', ['destination' => $card['enquiry']]).'#contact' }}"
                                >
                                    <div class="dest-card-media">
                                        @if ($card['image'])
                                            <img src="{{ asset($card['image']) }}" alt="{{ $card['alt'] }}" loading="lazy">
                                        @else
                                            <div class="pkg-card-pending">Photograph to be added</div>
                                        @endif
                                        <div class="dest-card-badge-top">
                                            <span class="dest-badge {{ $card['badge_tag'] }}">{{ $card['badge'] }}</span>
                                            @if ($card['duration'])
                                                <span class="dest-badge tag-days">{{ $card['duration'] }}</span>
                                            @endif
                                        </div>
                                        <span class="dest-card-location">📍 {{ $card['location'] }}</span>
                                    </div>
                                    <div class="dest-card-body">
                                        <h3>{{ $card['title'] }}</h3>
                                        <p class="dest-card-desc">{{ $card['description'] }}</p>
                                        <span class="pkg-card-more">{{ $card['slug'] ? 'View details' : 'Enquire' }} <span aria-hidden="true">→</span></span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <x-footer />

    <script>
        function scrollToPackageGroup() {
            if (! window.location.hash) {
                window.scrollTo(0, 0);
                return;
            }

            const target = document.querySelector(window.location.hash);

            if (! target) {
                return;
            }

            const nav = document.querySelector('.nav');
            const offset = (nav ? nav.getBoundingClientRect().height : 84) + 18;
            const top = target.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo(0, top);
        }

        window.addEventListener('load', scrollToPackageGroup);
        window.addEventListener('hashchange', scrollToPackageGroup);
        window.addEventListener('pageshow', scrollToPackageGroup);

        if (window.location.hash) {
            let attempts = 0;
            const settleScroll = window.setInterval(function () {
                scrollToPackageGroup();
                attempts += 1;

                if (attempts >= 8) {
                    window.clearInterval(settleScroll);
                }
            }, 150);
        }
    </script>
</x-layout>
