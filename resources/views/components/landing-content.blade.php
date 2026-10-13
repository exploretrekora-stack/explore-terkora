<!-- Hero Section -->
<section class="hero">
  <!-- Immersive Mountain Trekking Panoramic Background -->
  <div class="hero-bg" aria-hidden="true">
    <img 
      src="{{ asset('images/hero-trekking-bg.jpg') }}" 
      alt="Adventurers trekking on mountain ridge" 
      class="hero-bg-img"
      loading="eager"
    />
    <div class="hero-bg-overlay"></div>
    <div class="hero-bg-glow"></div>
  </div>

  <div class="wrap">
    <div>
      <!-- Handpicked Trips Chip (Border removed, organic pencil sketch underline underneath, dot removed) -->
      <div class="hero-chip">
        <span class="hero-chip-icon" aria-hidden="true">✈</span>
        <span class="hero-chip-text">
Curated Travel Experiences Across India
          <svg class="pencil-sketch-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#7fd3cd" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
      </div>

      <h1 class="hero-title">
        Your journey to <span class="peace-accent"><em>peace</em><svg class="peace-pencil" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true"><path d="M3 8 C 42 3, 98 3.5, 157 7 C 115 10.5, 55 10.8, 18 11.5" stroke="#7fd3cd" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></span> begins here
      </h1>

      <p class="hero-lead">
        Plan your perfect escape with hand-picked destinations, certified local guides, and simple booking from start to finish with Explore Trekora.
      </p>

      <div class="cta">
        <a class="btn btn-white shadow-xl hover:shadow-2xl transition-all" href="#book">
          Book your trip <span class="arr">→</span>
        </a>
        <a class="btn btn-ghost backdrop-blur-sm hover:bg-white/15 transition-all" href="#about">
          <span class="text-t300 text-sm">▶</span> Travel story
        </a>
      </div>

      <!-- Proof with Authentic Traveler Portraits -->
      <div class="proof">
        <div class="faces" aria-hidden="true">
          <img src="{{ asset('images/avatar-1.jpg') }}" alt="Traveler" class="w-11 h-11 rounded-full object-cover border-2 border-t900 shadow-sm">
          <img src="{{ asset('images/avatar-2.jpg') }}" alt="Traveler" class="w-11 h-11 rounded-full object-cover border-2 border-t900 -ml-3 shadow-sm">
          <i class="w-11 h-11 rounded-full bg-t500 text-white font-bold text-xs flex items-center justify-center border-2 border-t900 -ml-3 shadow-sm">290+</i>
        </div>
        <div>
          <b>200+</b>
          <small>Happy travelers</small>
        </div>
        <div class="divider"></div>
        <div>
          <b>4.9 / 5</b>
          <small>Average rating</small>
        </div>
      </div>
    </div>

    <!-- Right Visual Container with Unique Sculptural Shape (No Jumping, No Image Zoom) -->
    <div class="art">
      <!-- Ambient Decorative Dashed Aura Frame -->
      <div class="art-aura" aria-hidden="true"></div>

      <!-- Sculptural Architectural Portal Container -->
      <div class="arch">
        <img 
          src="{{ asset('images/hero-mountain.jpg') }}" 
          alt="Adventurer exploring alpine mountain trail overlooking a turquoise glacial lake" 
          class="art-main-img"
          loading="eager"
        />
        <div class="art-vignette" aria-hidden="true"></div>
      </div>

      <!-- Secondary Circular Beach Preview (Stable, No Zoom, No Jumping) -->
      <div class="round">
        <img 
          src="{{ asset('images/hero-beach.jpg') }}" 
          alt="Tropical turquoise lagoon and white sand beach getaway" 
          class="art-round-img"
          loading="eager"
        />
      </div>

      <!-- Floating Glassmorphism Badge 1: 4.9 Rating (Polished & Professional) -->
      <div class="card c1 rating-card">
        <div class="rating-seal">★</div>
        <div class="rating-content">
          <div class="rating-title-row">
            <span class="rating-val">4.9 rating</span>
            <span class="rating-pill">Top Rated</span>
          </div>
          <small class="stars" aria-label="5 out of 5 stars">★★★★★</small>
        </div>
      </div>

      <!-- Floating Glassmorphism Badge 2: Verified Itinerary (Ultra-Premium & Professional) -->
      <div class="card c2 itinerary-card" id="itinerary-ready">
        <div class="itinerary-seal">
          <svg class="itinerary-seal-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"/>
          </svg>
        </div>
        <div class="itinerary-content">
          <div class="itinerary-title-row">
            <span class="itinerary-title">Explore Trekora</span>
            <span class="itinerary-pill">Ready</span>
          </div>
          <p class="itinerary-desc">Your itinerary is ready</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Flow Wrapper with Decorative Curved Route Line -->
<div class="flow">
  <svg class="route-lead" id="route-lead" aria-hidden="true">
    <path id="route-lead-path" d=""></path>
  </svg>
  <div class="route" aria-hidden="true">
    <svg viewBox="0 0 1000 4000" preserveAspectRatio="none" width="100%" height="100%">
      <path id="route-path" d="M880 0C880 250 100 300 120 700S900 1100 880 1500 100 1900 120 2300 900 2700 880 3100 120 3500 500 4000"/>
    </svg>
  </div>

  <div class="route-flight is-hidden" id="route-flight" aria-hidden="true">
    <div class="route-flight-card" id="route-flight-card" data-side="left">
      <span class="route-flight-pin">
        <svg class="ic" aria-hidden="true"><use href="#i-pin"/></svg>
      </span>
      <span id="route-flight-name"></span>
    </div>
    <div class="route-flight-plane" id="route-flight-plane">
      <svg class="ic" aria-hidden="true"><use href="#i-plane"/></svg>
    </div>
  </div>
  <ol id="route-stops" hidden>
    <li>Adikailash &amp; Om Parvat Yatra</li>
    <li>Chardham Yatra</li>
    <li>Munsyari &amp; Kausani</li>
    <li>Milam Glacier Trek</li>
    <li>Khaliya Top Trek</li>
    <li>Dalhousie &amp; Dharamshala</li>
    <li>Kareri Lake Trek</li>
    <li>Hariharfort &amp; Harishchandragadh</li>
    <li>Girnar</li>
    <li>Mount Abu</li>
    <li>Dang</li>
    <li>Dediyapada</li>
    <li>Gateway to Malvan</li>
  </ol>

  <!-- Trip Search Bar (Luxury Concierge Style) -->
  <div class="search" id="trip-search-bar">
    <form method="get" action="{{ route('destinations') }}" aria-label="Find a trip" class="search-form">
      <!-- Custom Destination Dropdown -->
      <div class="field custom-dropdown-field" id="dropdown-dest-wrapper">
        <label for="d" onclick="toggleDropdown('dropdown-dest-wrapper')" class="field-label">
          <span class="field-label-icon">📍</span>
          <span>Destination</span>
        </label>
        <button type="button" class="custom-dropdown-trigger" id="btn-dest-trigger" onclick="toggleDropdown('dropdown-dest-wrapper')" aria-expanded="false" aria-haspopup="listbox">
          <span class="val-text" id="dest-display-val">Adikailash &amp; Om Parvat Yatra</span>
          <svg class="arr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <select id="d" name="destination" class="sr-only" tabindex="-1" aria-hidden="true">
          <option value="adi-kailash-om-parvat" selected>Adikailash &amp; Om Parvat Yatra</option>
          <option value="char-dham-yatra">Chardham Yatra</option>
          <option value="munsyari-kausani">Munsyari &amp; Kausani</option>
          <option value="milam-glacier-trek">Milam Glacier Trek</option>
          <option value="khaliya-top-trek">Khaliya Top Trek</option>
          <option value="dalhousie-dharamshala">Dalhousie &amp; Dharamshala</option>
          <option value="kareri-lake-trek">Kareri Lake Trek</option>
          <option value="harihar-fort-trek">Hariharfort &amp; Harishchandragadh</option>
          <option value="girnar-pilgrimage-trek">Girnar Hill Trek &amp; Junagadh Exploration</option>
          <option value="mount-abu-eco-getaway">Mount Abu</option>
          <option value="dang-forest-circuit">Dang Forest Circuit</option>
          <option value="dediapada-wilderness-trek">Dediyapada Wilderness Trek</option>
          <option value="gateway-to-malvan">Gateway to Malvan</option>
          <option value="sembalpani">Sembalpani Eco Trek</option>
        </select>
        <div class="custom-dropdown-panel dest-dropdown-panel-wide" role="listbox" id="dest-panel">
          <div class="panel-header">
            <span class="panel-header-title">Our Destinations</span>
            <span class="panel-header-badge">14 Handpicked</span>
          </div>
          <div class="dest-dropdown-grid">
            <!-- Column 1 (Destinations 1-6) -->
            <div class="dest-dropdown-col">
              <button type="button" class="dropdown-item-btn selected" data-slug="adi-kailash-om-parvat" onclick="selectDestination('Adikailash &amp; Om Parvat Yatra', this)">
                <span class="item-body">
                  <span class="item-title">Adikailash &amp; Om Parvat Yatra</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="char-dham-yatra" onclick="selectDestination('Chardham Yatra', this)">
                <span class="item-body">
                  <span class="item-title">Chardham Yatra</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="munsyari-kausani" onclick="selectDestination('Munsyari &amp; Kausani', this)">
                <span class="item-body">
                  <span class="item-title">Munsyari &amp; Kausani</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="milam-glacier-trek" onclick="selectDestination('Milam Glacier Trek', this)">
                <span class="item-body">
                  <span class="item-title">Milam Glacier Trek</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="khaliya-top-trek" onclick="selectDestination('Khaliya Top Trek', this)">
                <span class="item-body">
                  <span class="item-title">Khaliya Top Trek</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="dalhousie-dharamshala" onclick="selectDestination('Dalhousie &amp; Dharamshala', this)">
                <span class="item-body">
                  <span class="item-title">Dalhousie &amp; Dharamshala</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
            </div>

            <!-- Column 2 (Destinations 7-13) -->
            <div class="dest-dropdown-col">
              <button type="button" class="dropdown-item-btn" data-slug="kareri-lake-trek" onclick="selectDestination('Kareri Lake Trek', this)">
                <span class="item-body">
                  <span class="item-title">Kareri Lake Trek</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="harihar-fort-trek" onclick="selectDestination('Hariharfort &amp; Harishchandragadh', this)">
                <span class="item-body">
                  <span class="item-title">Hariharfort &amp; Harishchandragadh</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="girnar-pilgrimage-trek" onclick="selectDestination('Girnar Hill Trek &amp; Junagadh Exploration', this)">
                <span class="item-body">
                  <span class="item-title">Girnar Hill Trek &amp; Junagadh Exploration</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="mount-abu-eco-getaway" onclick="selectDestination('Mount Abu', this)">
                <span class="item-body">
                  <span class="item-title">Mount Abu</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="dang-forest-circuit" onclick="selectDestination('Dang Forest Circuit', this)">
                <span class="item-body">
                  <span class="item-title">Dang Forest Circuit</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="dediapada-wilderness-trek" onclick="selectDestination('Dediyapada Wilderness Trek', this)">
                <span class="item-body">
                  <span class="item-title">Dediyapada Wilderness Trek</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="gateway-to-malvan" onclick="selectDestination('Gateway to Malvan', this)">
                <span class="item-body">
                  <span class="item-title">Gateway to Malvan</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
              <button type="button" class="dropdown-item-btn" data-slug="sembalpani" onclick="selectDestination('Sembalpani Eco Trek', this)">
                <span class="item-body">
                  <span class="item-title">Sembalpani Eco Trek</span>
                </span>
                <span class="item-check">
                  <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.5 8.5l3 3 6-6"/></svg>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Custom Travel Date Dropdown -->
      <div class="field custom-dropdown-field" id="dropdown-date-wrapper">
        <label for="dt" onclick="toggleDropdown('dropdown-date-wrapper')" class="field-label">
          <span class="field-label-icon">🗓</span>
          <span>Travel date</span>
        </label>
        <button type="button" class="custom-dropdown-trigger" id="btn-date-trigger" onclick="toggleDropdown('dropdown-date-wrapper')" aria-expanded="false" aria-haspopup="dialog">
          <span class="val-text" id="date-display-val">{{ date('M d, Y', strtotime('+7 days')) }}</span>
          <svg class="arr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <input id="dt" name="travel_date" type="hidden" value="{{ date('Y-m-d', strtotime('+7 days')) }}">
        <div class="custom-dropdown-panel cal-dropdown-panel" id="date-panel">
          <div class="cal-container">
            <div class="cal-header">
              <button type="button" class="cal-nav-btn" onclick="changeMonth(-1)" aria-label="Previous month">‹</button>
              <span class="cal-title" id="cal-month-title">October 2026</span>
              <button type="button" class="cal-nav-btn" onclick="changeMonth(1)" aria-label="Next month">›</button>
            </div>
            <div class="cal-presets">
              <button type="button" class="cal-preset-chip" onclick="selectPresetDate(7)">In 1 Week</button>
              <button type="button" class="cal-preset-chip" onclick="selectPresetDate(14)">In 2 Weeks</button>
              <button type="button" class="cal-preset-chip" onclick="selectPresetDate(30)">Next Month</button>
            </div>
            <div class="cal-weekdays">
              <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
            </div>
            <div class="cal-grid" id="cal-days-grid">
              <!-- Rendered by interactive JS calendar -->
            </div>
          </div>
        </div>
      </div>

      <!-- Custom Travelers Dropdown -->
      <div class="field custom-dropdown-field" id="dropdown-travelers-wrapper">
        <label for="g" onclick="toggleDropdown('dropdown-travelers-wrapper')" class="field-label">
          <span class="field-label-icon">👥</span>
          <span>Travelers</span>
        </label>
        <button type="button" class="custom-dropdown-trigger" id="btn-travelers-trigger" onclick="toggleDropdown('dropdown-travelers-wrapper')" aria-expanded="false" aria-haspopup="listbox">
          <span class="val-text" id="travelers-display-val">2 adults</span>
          <svg class="arr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <select id="g" name="travelers" class="sr-only" tabindex="-1" aria-hidden="true">
          <option value="2 adults" selected>2 adults</option>
          <option value="1 solo adventurer">1 solo adventurer</option>
          <option value="4 adults group">4 adults group</option>
          <option value="Family (2 adults + 2 kids)">Family (2 adults + 2 kids)</option>
        </select>
        <div class="custom-dropdown-panel panel-right" id="travelers-panel">
          <div class="panel-header">
            <span class="panel-header-title">Travel Group</span>
            <span class="panel-header-badge">Options</span>
          </div>
          <div class="custom-dropdown-list">
            <button type="button" class="dropdown-item-btn selected" onclick="selectTravelers('2 adults', this)">
              <span class="item-icon">👥</span>
              <span class="item-body">
                <span class="item-title">2 adults</span>
                <span class="item-desc">Couples &amp; duo explorers</span>
              </span>
              <span class="item-check">✓</span>
            </button>
            <button type="button" class="dropdown-item-btn" onclick="selectTravelers('1 solo adventurer', this)">
              <span class="item-icon">🧗</span>
              <span class="item-body">
                <span class="item-title">1 solo adventurer</span>
                <span class="item-desc">Independent backpacker or trekker</span>
              </span>
              <span class="item-check">✓</span>
            </button>
            <button type="button" class="dropdown-item-btn" onclick="selectTravelers('4 adults group', this)">
              <span class="item-icon">🏕️</span>
              <span class="item-body">
                <span class="item-title">4 adults group</span>
                <span class="item-desc">Friends, group expedition &amp; road trips</span>
              </span>
              <span class="item-check">✓</span>
            </button>
            <button type="button" class="dropdown-item-btn" onclick="selectTravelers('Family (2 adults + 2 kids)', this)">
              <span class="item-icon">👨‍👩‍👧‍👦</span>
              <span class="item-body">
                <span class="item-title">Family (2 adults + 2 kids)</span>
                <span class="item-desc">Private family package with relaxed pace</span>
              </span>
              <span class="item-check">✓</span>
            </button>
          </div>
        </div>
      </div>

      <button class="btn-search-submit" type="submit">
        <span>Find trips</span>
        <span class="arr">→</span>
      </button>
    </form>
  </div>

  <!-- About Section -->
  <section class="about" id="about">
    <div class="wrap">
      <div class="photos">
        <!-- Main Card: Real Local Mountain Guide and Adventurer -->
        <div class="p1 group">
          <img 
            src="{{ asset('images/about-guide.jpg') }}" 
            alt="Certified local guide and adventurer exploring scenic alpine ridge overlooking green valley"
            loading="lazy"
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-t950/60 via-transparent to-transparent pointer-events-none"></div>
          
          <!-- Top Floating Highlight Pill: Your Next Adventure Awaits -->
          <div class="absolute top-4 right-4 z-10 flex items-center gap-2 bg-gradient-to-r from-emerald-600/95 via-teal-600/95 to-t700/95 backdrop-blur-md px-4 py-2 rounded-full shadow-xl border border-white/40 text-xs font-bold text-white tracking-wide">
            <span class="flex h-2.5 w-2.5 relative">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-300 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-amber-400"></span>
            </span>
            <span class="drop-shadow-xs">Your Next Adventure Awaits</span>
            <span class="text-amber-300 font-extrabold text-sm leading-none">✨</span>
          </div>
        </div>

        <!-- Secondary Card: Khaliya Top Trek Real Himalayan Mountain Trail -->
        <div class="p2 group">
          <img 
            src="{{ asset('images/khaliya-top-trek.jpg') }}" 
            alt="Khaliya Top Trek spectacular Himalayan ridge in Munsyari Uttarakhand"
            loading="lazy"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-600 ease-out"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-t950/70 via-transparent to-transparent pointer-events-none"></div>
          <div class="absolute top-3 left-3 z-10 flex items-center gap-1.5 bg-t950/85 backdrop-blur-md px-3 py-1.5 rounded-full text-[11px] font-bold text-amber-300 border border-white/20 shadow-lg">
            <span>★ 4.9</span>
            <span class="text-white font-semibold">Khaliya Top Trek</span>
          </div>
          <div class="absolute bottom-2.5 left-3 z-10 text-[11px] font-semibold text-t100 flex items-center gap-1">
            <span>📍</span>
            <span>Munsyari, Uttarakhand</span>
          </div>
        </div>

        <!-- 25 Years of Experience Luxury Badge (Clean & Unobstructed) -->
        <div class="badge">
          <b>2+</b>
          <div>
            <div class="flex items-center gap-1 text-amber-300 text-xs font-bold mb-0.5">
              <span>★★★★★</span>
            </div>
            <span>Years of<br>experience</span>
          </div>
        </div>
      </div>

      <div>
        <span class="kicker">
          Why Choose Explore Trekora
          <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
            <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <h2>Every journey, thoughtfully planned.</h2>
        <p class="intro">At Explore Trekora, we bring you closer to India's breathtaking landscapes, rich culture, and unforgettable adventures. From spiritual getaways to mountain treks and family holidays, we help you discover experiences worth remembering.</p>
        <div class="points" id="guides">
          <div class="pt group hover:border-t500 transition-all">
            <div class="ic">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
              </svg>
            </div>
            <h3>Handpicked Destinations</h3>
            <p>Explore carefully selected destinations across India, from peaceful hill stations and sacred places to scenic trekking trails.</p>
          </div>
          <div class="pt group hover:border-t500 transition-all">
            <div class="ic">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <path d="m9 12 2 2 4-4"/>
              </svg>
            </div>
            <h3>Travel with Confidence</h3>
            <p>Get helpful trip guidance, thoughtfully planned itineraries, and support throughout your travel planning journey.</p>
          </div>
        </div>
        <div class="row">
          <a class="btn btn-teal theme-cta" href="{{ route('about-us') }}">Discover Our Story  <span class="arr">→</span></a>
          <div class="help">
            <div class="ph">
              <svg class="w-5 h-5 text-t700" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
            </div>
            <div>
              <small>Need personalized help?</small>
              <strong>+91 8460922935</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats / Value Highlights Strip -->
  <div class="stats">
    <div class="stats-item">
      <div class="stats-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
          <polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/>
          <line x1="9" y1="3" x2="9" y2="18"/>
          <line x1="15" y1="6" x2="15" y2="21"/>
        </svg>
      </div>
      <b>Curated Trips</b>
      <span>Thoughtfully Planned Journeys</span>
    </div>
    <div class="stats-item">
      <div class="stats-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
      </div>
      <b>Local Experiences</b>
      <span>Discover Places Beyond the Usual</span>
    </div>
    <div class="stats-item">
      <div class="stats-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
          <path d="m8 3 4 8 5-5 5 15H2L8 3z"/>
        </svg>
      </div>
      <b>Adventure Awaits</b>
      <span>From Scenic Treks to Mountain Escapes</span>
    </div>
    <div class="stats-item">
      <div class="stats-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          <path d="m9 12 2 2 4-4"/>
        </svg>
      </div>
      <b>Travel with Ease</b>
      <span>Your Journey, Made Simpler</span>
    </div>
  </div>

  <!-- Popular Destinations / Treks Section -->
  <section class="dest" id="treks" aria-labelledby="dest-heading">
    <span id="destinations" class="sr-only"></span>
    <span id="packages" class="sr-only"></span>
    <div class="dh">
      <span class="eyebrow dest-eyebrow">
        Popular destinations
        <svg class="kicker-line" viewBox="0 0 250 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
          <path d="M2.5 7.5 C 50 3, 125 3.2, 247 6.8 C 180 9.2, 90 9.8, 30 11.2" stroke="#2dd4bf" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      <h2 id="dest-heading">Discover India's wild beauty and hidden gems.</h2>
      <p class="dest-subtitle">From sacred Himalayan journeys and breathtaking mountain treks to peaceful hill stations, discover extraordinary places and plan your next adventure with Explore Trekora.</p>
    </div>

    <div class="grid-cards">
      <!-- Card 1: Adi Kailash & Om Parvat -->
      <a class="dc group" href="{{ route('destinations') }}">
        <div class="im">
          <img src="{{ asset('images/trips/adi-kailash-om-parvat/1.jpg') }}" alt="Adi Kailash and Om Parvat sacred Himalayan mountain landscape in Uttarakhand." loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">CULTURAL TOURS</span>
          <h3>Adi Kailash &amp; Om Parvat</h3>
          <p>Discover the spiritual beauty of the Himalayas, sacred mountain landscapes, and unforgettable views of Adi Kailash and Om Parvat.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>

      <!-- Card 2: Munsyari & Kausani -->
      <a class="dc group" href="{{ route('destinations') }}">
        <div class="im">
          <img src="{{ asset('images/trips/munsyari-kausani/1.jpg') }}" alt="Munsyari and Kausani" loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">FAMILY GETAWAYS</span>
          <h3>Munsyari &amp; Kausani</h3>
          <p>Pickup from Kathgodam, then Ranikhet, a trek to Pandavkholi, Someshwar, Kausani, and Mukteshwar.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>

      <!-- Card 3: Khaliya Top Trek -->
      <a class="dc group" href="{{ route('destinations') }}">
        <div class="im">
          <img src="{{ asset('images/trips/khaliya-top-trek/1.jpg') }}" alt="Khaliya Top Trek near Munsiyari" loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">ADVENTURE TREKS</span>
          <h3>Khaliya Top Trek</h3>
          <p>An easy-to-moderate Himalayan trek near Munsiyari in the Pithoragarh district of Uttarakhand.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>

      <!-- Card 4: Milam Glacier Trek -->
      <a class="dc group" href="{{ route('destinations') }}">
        <div class="im">
          <img src="{{ asset('images/trips/milam-glacier-trek/1.jpg') }}" alt="Milam Glacier Trek" loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">ADVENTURE TREKS</span>
          <h3>Milam Glacier Trek</h3>
          <p>A remote 9-to-12-day trek in the Johar Valley, covering around 100 to 130 km round trip.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>

      <!-- Card 5: Mount Abu -->
      <a class="dc group" href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}">
        <div class="im">
          <img src="{{ asset('images/trips/mount-abu-eco-getaway/1.jpg') }}" alt="Mount Abu" loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">WEEKEND GETAWAYS</span>
          <h3>Mount Abu</h3>
          <p>Guru Shikhar sunrise, Dilwara Jain Temples, Nakki Lake boating, Trevor’s Tank, and Mount Abu Wildlife Sanctuary.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>

      <!-- Card 6: Dalhousie & Dharamshala -->
      <a class="dc group" href="{{ route('destinations') }}">
        <div class="im">
          <img src="{{ asset('images/trips/dalhousie-dharamshala/3.jpg') }}" alt="Tibetan monastery with prayer flags from the Dharamshala trip" loading="lazy">
        </div>
        <div class="tx">
          <span class="dc-cat">HIMACHAL PRADESH TOUR</span>
          <h3>Dalhousie &amp; Dharamshala</h3>
          <p>An 8-day journey through Dharamshala, a Kareri Lake trek and camp, Dalhousie, Khajjiar, and a return via Chandigarh towards Surat.</p>
          <span class="more">Explore Package <i>↗</i></span>
        </div>
      </a>
    </div>

    <div class="all">
      <a class="btn btn-teal theme-cta" href="{{ route('destinations') }}">Explore All Destinations <span class="arr">→</span></a>
    </div>
  </section>

  <!-- Explore India Section -->
  <section class="sec" id="countries" aria-labelledby="explore-india-heading">
    <div class="sh">
      <div>
        <span class="ey explore-india-eyebrow">
          Explore India
          <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
            <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <h2 id="explore-india-heading">Find your kind of escape.</h2>
        <p class="lede">From sacred Himalayan journeys to peaceful hill stations, discover experiences made for every kind of traveller.</p>
      </div>
      <a class="btn btn-teal theme-cta" href="{{ route('destinations') }}">Explore all destinations <span class="arr">→</span></a>
    </div>

    <div class="cg">
      <a class="cc" href="{{ route('tour-packages.show', 'adi-kailash-om-parvat') }}">
        <div class="cc-media">
          <img src="{{ asset('images/state-uttarakhand.jpg') }}" alt="Panchachuli mountains above the valleys of Munsyari, Uttarakhand" loading="lazy">
          <span class="kind">Himalayan Escapes</span>
        </div>
        <div class="cc-body">
          <h3>Uttarakhand</h3>
          <div class="cc-divider"></div>
          <ul>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Scenic mountain trails</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Sacred destinations</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Peaceful hill retreats</li>
          </ul>
          <div class="cc-cta">
            <span>Explore Packages</span>
            <span class="cc-cta-arrow">→</span>
          </div>
        </div>
      </a>

      <a class="cc" href="{{ route('tour-packages.show', 'dalhousie-dharamshala') }}">
        <div class="cc-media">
          <img src="{{ asset('images/state-himachal.jpg') }}" alt="Dharamshala hill town and snow peaks in Himachal Pradesh" loading="lazy">
          <span class="kind">Mountain Holidays</span>
        </div>
        <div class="cc-body">
          <h3>Himachal Pradesh</h3>
          <div class="cc-divider"></div>
          <ul>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Charming hill towns</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Family getaways</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Scenic mountain views</li>
          </ul>
          <div class="cc-cta">
            <span>Explore Packages</span>
            <span class="cc-cta-arrow">→</span>
          </div>
        </div>
      </a>

      <a class="cc" href="{{ route('destinations.show', 'girnar-pilgrimage-trek') }}">
        <div class="cc-media">
          <img src="{{ asset('images/state-gujarat.jpg') }}" alt="Girnar mountain temple peak above the clouds in Gujarat" loading="lazy">
          <span class="kind">Culture &amp; Pilgrimage</span>
        </div>
        <div class="cc-body">
          <h3>Gujarat</h3>
          <div class="cc-divider"></div>
          <ul>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Sacred mountain journeys</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Cultural discoveries</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Spiritual experiences</li>
          </ul>
          <div class="cc-cta">
            <span>Explore Packages</span>
            <span class="cc-cta-arrow">→</span>
          </div>
        </div>
      </a>

      <a class="cc" href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}">
        <div class="cc-media">
          <img src="{{ asset('images/state-rajasthan.jpg') }}" alt="Nakki Lake and the hills of Mount Abu in Rajasthan" loading="lazy">
          <span class="kind">Weekend Escapes</span>
        </div>
        <div class="cc-body">
          <h3>Rajasthan</h3>
          <div class="cc-divider"></div>
          <ul>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Relaxing hill retreats</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Lakeside scenery</li>
            <li><span class="cc-check-dot"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg></span>Nature getaways</li>
          </ul>
          <div class="cc-cta">
            <span>Explore Packages</span>
            <span class="cc-cta-arrow">→</span>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- Process & How It Works Section -->
  <section class="sec" id="how-it-works">
    <span id="process" class="sr-only"></span>
    <div class="pr">
      <div class="fr pim">
        <img src="{{ asset('images/process-lake.jpg') }}" alt="Traveler by serene alpine lake" loading="lazy">
      </div>

      <div>
        <div class="pt1">
          <span class="ey how-it-works-eyebrow">
            HOW IT WORKS
            <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
              <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <h2 class="h2">Your journey, made simple.</h2>
        </div>

        <div class="sg">
          <div class="sd">
            <div class="si"><svg class="ic" aria-hidden="true"><use href="#i-shield"/></svg></div>
            <small>01</small>
            <h3>Choose Your Destination</h3>
            <p>Explore our cultural tours, Himalayan treks, family holidays and weekend getaways.</p>
          </div>
          <div class="sd">
            <div class="si"><svg class="ic" aria-hidden="true"><use href="#i-globe"/></svg></div>
            <small>02</small>
            <h3>Plan Your Trip</h3>
            <p>Choose your preferred travel dates and discuss your itinerary, group size and trip requirements with our team.</p>
          </div>
          <div class="sd">
            <div class="si"><svg class="ic" aria-hidden="true"><use href="#i-book"/></svg></div>
            <small>03</small>
            <h3>Enjoy the Journey</h3>
            <p>Get ready to discover beautiful landscapes, local culture and unforgettable travel experiences.</p>
          </div>
        </div>
      </div>

      <div class="sp">
        <div>
          <span class="ey l success-story-eyebrow">
            Success story
            <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
              <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#2dd4bf" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <h3>2+ years of trips travelers trust</h3>
          <p>From your initial consultation to returning safely home, Explore Trekora is by your side at every step.</p>
        </div>
        <div class="sn" id="success-stats">
          <div class="sc">
            <b class="sc-number"><span class="stat-counter" data-target="4">4</span></b>
            <span class="sc-label">Team members</span>
          </div>
          <div class="sc">
            <b class="sc-number"><span class="stat-counter" data-target="40" data-suffix="+">40+</span></b>
            <span class="sc-label">Trips completed</span>
          </div>
          <div class="sc">
            <b class="sc-number"><span class="stat-counter" data-target="100" data-suffix="+">100+</span></b>
            <span class="sc-label">Verified reviews</span>
          </div>
        </div>
      </div>
    </div>
    <script>
      (function() {
        function initSuccessStatsCounter() {
          const statsSection = document.getElementById('success-stats');
          if (!statsSection) return;

          let hasAnimated = false;

          function runCountAnimation() {
            if (hasAnimated) return;
            hasAnimated = true;

            const counters = statsSection.querySelectorAll('.stat-counter');
            counters.forEach(counter => {
              const target = parseInt(counter.getAttribute('data-target'), 10);
              const suffix = counter.getAttribute('data-suffix') || '';
              const duration = 1600;
              const startTime = performance.now();

              counter.textContent = '0' + suffix;

              function updateCount(now) {
                const elapsed = now - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const easeOut = 1 - Math.pow(1 - progress, 3);
                const current = Math.floor(easeOut * target);

                if (progress < 1) {
                  counter.textContent = current + suffix;
                  requestAnimationFrame(updateCount);
                } else {
                  counter.textContent = target + suffix;
                }
              }

              requestAnimationFrame(updateCount);
            });
          }

          if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, obs) => {
              entries.forEach(entry => {
                if (entry.isIntersecting) {
                  runCountAnimation();
                  obs.unobserve(entry.target);
                }
              });
            }, {
              threshold: 0.2,
              rootMargin: '0px 0px -40px 0px'
            });
            observer.observe(statsSection);
          } else {
            runCountAnimation();
          }
        }

        if (document.readyState === 'loading') {
          document.addEventListener('DOMContentLoaded', initSuccessStatsCounter);
        } else {
          initSuccessStatsCounter();
        }
      })();
    </script>
  </section>

  <!-- Ticket Booking Section -->
  <section class="sec" id="book">
    <div class="bk">
      <div>
        <span class="ey ticket-booking-eyebrow">
          Ticket booking
          <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
            <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#5eead4" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <h2>Wanderlust chronicles, tales from around</h2>
        <form class="bf" method="get" action="{{ route('destinations') }}">
          <div class="bf-destination">
            <label for="to">To Destination</label>
            <div class="pill">
              <svg class="ic" aria-hidden="true"><use href="#i-plane"/></svg>
              <select id="to" name="destination">
                @foreach (\App\Services\DestinationRepository::tripFinder() as $slug => $trip)
                  <option value="{{ $slug }}">{{ $trip['label'] }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div>
            <label for="dd">Departure Date</label>
            <div class="pill">
              <svg class="ic" aria-hidden="true"><use href="#i-cal"/></svg>
              <input id="dd" name="travel_date" type="date" value="{{ date('Y-m-d', strtotime('+14 days')) }}">
            </div>
          </div>

          <div>
            <label>Passengers</label>
            <div class="pill step">
              <button type="button" aria-label="Decrease passenger count" onclick="stp(-1)">−</button>
              <b id="pax">03</b>
              <button type="button" aria-label="Increase passenger count" onclick="stp(1)">+</button>
              <input type="hidden" name="travelers" id="book-travelers" value="4 adults group">
            </div>
          </div>

          <button class="btn btn-white shadow-md hover:bg-t50 transition-all" type="submit">
            Book now with Explore Trekora
          </button>
        </form>
      </div>

      <div class="fr relative group rounded-3xl overflow-hidden shadow-2xl border border-white/10">
        <img src="{{ asset('images/booking-snow.jpg') }}" alt="Winter Alpine Adventure Expedition" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-t950/90 via-t950/25 to-transparent pointer-events-none"></div>
        <div class="absolute bottom-3.5 left-3.5 right-3.5 sm:bottom-5 sm:left-5 sm:right-5 bg-t950/90 backdrop-blur-md p-3.5 sm:p-4 rounded-2xl border border-white/20 flex flex-wrap sm:flex-nowrap items-center justify-between gap-3 text-white shadow-xl">
          <div class="min-w-0">
            <strong class="block text-sm sm:text-base font-bold text-white tracking-tight">Winter Alpine Expedition</strong>
            <p class="text-t300 text-xs mt-0.5 font-medium leading-tight">Swiss &amp; Himalayan snow trails &bull; Passes included</p>
          </div>
          <span class="inline-flex items-center shrink-0 text-xs font-semibold bg-t500 hover:bg-t400 text-white px-3 py-1.5 rounded-full shadow-sm tracking-wide">Instant pass</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Reviews / Testimonials / Stories Section -->
  <section class="sec" id="stories" aria-label="Customer Stories and Reviews">
    <span id="reviews" class="sr-only">Customer Stories and Reviews</span>
    <div class="tsg">
      <div class="fr tim" id="story-frame">
        <img src="{{ asset('images/story-1.jpg') }}" alt="Adikailash &amp; Om Parvat Yatra" id="story-main-img" class="story-img" loading="lazy">
        <div class="story-photo-badge">
          <span id="story-tag-text">📍 Adikailash &amp; Om Parvat</span>
        </div>
      </div>
      <div class="tq">
        <div class="story-tq-header">
          <div class="qm" aria-hidden="true">“</div>
          <div class="story-nav-btns" aria-label="Story navigation">
            <button type="button" class="story-arrow-btn" onclick="prevStory()" aria-label="Previous story">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button type="button" class="story-arrow-btn" onclick="nextStory()" aria-label="Next story">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
          </div>
        </div>
        <p id="qt">Standing in front of the sacred Om Parvat gave us goosebumps. Trekora handled all the inner line permits and high-altitude logistics seamlessly.</p>
        <div class="au">
          <div class="story-avatar-icon" id="story-avatar-icon" aria-hidden="true">
            <svg class="ic" aria-hidden="true"><use href="#i-user"/></svg>
          </div>
          <div class="au-meta" id="au-meta">
            <strong id="qn">Rajesh Patel</strong>
            <small id="qr">Adikailash &amp; Om Parvat Yatra</small>
          </div>
          <div class="dots" aria-label="Review pagination">
            <button class="on" aria-label="Story 1" onclick="sq(0)"></button>
            <button aria-label="Story 2" onclick="sq(1)"></button>
            <button aria-label="Story 3" onclick="sq(2)"></button>
            <button aria-label="Story 4" onclick="sq(3)"></button>
            <button aria-label="Story 5" onclick="sq(4)"></button>
            <button aria-label="Story 6" onclick="sq(5)"></button>
            <button aria-label="Story 7" onclick="sq(6)"></button>
            <button aria-label="Story 8" onclick="sq(7)"></button>
            <button aria-label="Story 9" onclick="sq(8)"></button>
            <button aria-label="Story 10" onclick="sq(9)"></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us Section -->
  <section class="sec" id="contact">
    <div class="ct">
      <form id="contact-enquiry-form" class="cb cf" method="POST" action="{{ route('enquiries.store') }}">
        @csrf

        @if (session('whatsapp_url'))
          <script>
            window.location.href = @json(session('whatsapp_url'));
          </script>
        @endif

        <div>
          <label for="full_name">Full Name</label>
          <div class="inp">
            <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" placeholder="Enter your full name" required maxlength="120" autocomplete="name" @error('full_name') aria-invalid="true" @enderror>
            <svg class="ic" aria-hidden="true"><use href="#i-user"/></svg>
          </div>
          @error('full_name')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div>
          <label for="email">Email Address</label>
          <div class="inp">
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" required maxlength="255" autocomplete="email" @error('email') aria-invalid="true" @enderror>
            <svg class="ic" aria-hidden="true"><use href="#i-mail"/></svg>
          </div>
          @error('email')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div>
          <label for="phone">Phone Number</label>
          <div class="inp">
            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="Enter your phone number" required inputmode="tel" autocomplete="tel" pattern="^(\+91[\s-]?)?[6-9][0-9]{9}$" @error('phone') aria-invalid="true" @enderror>
            <svg class="ic" aria-hidden="true"><use href="#i-phone"/></svg>
          </div>
          @error('phone')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div>
          <label for="travellers">Number of Travellers</label>
          <div class="inp">
            <input id="travellers" name="travellers" type="number" value="{{ old('travellers') }}" min="1" max="50" step="1" required inputmode="numeric" @error('travellers') aria-invalid="true" @enderror>
            <svg class="ic" aria-hidden="true"><use href="#i-users"/></svg>
          </div>
          @error('travellers')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="w">
          <label for="destination">Destination / Tour Package</label>
          <div class="inp">
            <select id="destination" name="destination" required @error('destination') aria-invalid="true" @enderror>
              <option value="" @selected(in_array(old('destination', request()->query('destination')), [null, ''], true))>Select a destination</option>
              @foreach (\App\Models\Enquiry::destinations() as $destination)
                <option value="{{ $destination }}" @selected(old('destination', request()->query('destination')) === $destination)>{{ $destination }}</option>
              @endforeach
            </select>
            <svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg>
          </div>
          @error('destination')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="w">
          <label for="travel_date">Preferred Travel Date</label>
          <div class="inp">
            <input id="travel_date" name="travel_date" type="date" value="{{ old('travel_date') }}" min="{{ now()->toDateString() }}" required @error('travel_date') aria-invalid="true" @enderror>
            <svg class="ic" aria-hidden="true"><use href="#i-cal"/></svg>
          </div>
          @error('travel_date')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="w">
          <label for="message">Message or Travel Plans</label>
          <textarea id="message" name="message" placeholder="Tell us about your preferred destination, travel dates, and special requirements." required maxlength="2000" @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
          @error('message')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="cf-submit-row w">
          <x-inquire-now type="submit" class="cf-inquire-btn" />
        </div>
      </form>
      <script>
        (function () {
          const form = document.getElementById('contact-enquiry-form');
          if (!form) {
            return;
          }

          const successMessage = 'Your enquiry has been saved. We will contact you using the phone number or email you provided.';
          const travelDateInput = form.querySelector('input[type="date"]');
          const travelDateWrap = travelDateInput?.closest('.inp');

          travelDateWrap?.addEventListener('click', (event) => {
            if (!travelDateInput || typeof travelDateInput.showPicker !== 'function') {
              return;
            }

            event.preventDefault();

            try {
              travelDateInput.showPicker();
            } catch (pickerError) {
              travelDateInput.focus();
            }
          });

          function keepScroll(scrollY) {
            const root = document.documentElement;
            const previous = root.style.scrollBehavior;
            root.style.scrollBehavior = 'auto';
            window.scrollTo(0, scrollY);
            root.style.scrollBehavior = previous;
          }

          function clearFieldErrors() {
            form.querySelectorAll('.field-error').forEach((error) => error.remove());
            form.querySelectorAll('[aria-invalid]').forEach((field) => field.removeAttribute('aria-invalid'));
          }

          function showFieldError(name, message) {
            const field = form.querySelector('[name="' + name + '"]');
            if (!field) {
              return;
            }

            field.setAttribute('aria-invalid', 'true');
            const anchor = field.closest('.inp') || field;
            const error = document.createElement('p');
            error.className = 'field-error';
            error.textContent = message;
            anchor.insertAdjacentElement('afterend', error);
          }

          function showErrorNote(message) {
            form.querySelector('.field-error.w')?.remove();
            const errorNote = document.createElement('div');
            errorNote.className = 'field-error w';
            errorNote.setAttribute('role', 'alert');
            errorNote.style.cssText = 'background:#fef2f2;border:1.5px solid #fecaca;color:#dc2626;padding:12px 14px;border-radius:12px;margin-bottom:16px;font-size:13.5px;';
            errorNote.textContent = message;
            form.prepend(errorNote);
          }

          form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const scrollY = window.scrollY;
            const button = form.querySelector('[type="submit"]');
            clearFieldErrors();
            form.querySelector('.field-error.w')?.remove();

            if (button) {
              button.disabled = true;
              button.classList.add('is-sending');
              button.setAttribute('aria-busy', 'true');
            }

            try {
              const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                  'Accept': 'application/json',
                  'X-Requested-With': 'XMLHttpRequest',
                },
                body: new FormData(form),
              });

              if (response.status === 422) {
                const data = await response.json();
                Object.entries(data.errors || {}).forEach(([name, messages]) => {
                  if (messages[0]) {
                    showFieldError(name, messages[0]);
                  }
                });
                return;
              }

              if (!response.ok) {
                throw new Error('Enquiry could not be saved.');
              }

              const data = await response.json();
              form.reset();

              if (data && data.whatsapp_url) {
                window.location.href = data.whatsapp_url;
              }
            } catch (error) {
              showErrorNote('Your enquiry could not be saved. Please try again.');
            } finally {
              if (button) {
                button.classList.remove('is-sending');
                button.removeAttribute('aria-busy');
                button.disabled = false;
              }
              keepScroll(scrollY);
            }
          });
        })();
      </script>

      <div class="cb flex flex-col justify-between">
        <div>
          <span class="contact-eyebrow">
            GET IN TOUCH
            <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
              <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          <h2 class="h2">Let's plan your next adventure.</h2>
          <p style="color:var(--muted);margin-top:12px;font-size:14.5px">Tell us where you want to go. Our team can help you explore destinations, choose a suitable package, and plan your next memorable journey.</p>
        </div>
        <ul class="ci">
          <li>
            <i><svg class="ic" aria-hidden="true"><use href="#i-phone"/></svg></i>
            <div>
              <small>Call or WhatsApp</small>
              <strong><a href="tel:+918460922935">+91 8460922935</a></strong>
            </div>
          </li>
          <li>
            <i><svg class="ic" aria-hidden="true"><use href="#i-mail"/></svg></i>
            <div>
              <small>Email</small>
              <strong><a href="mailto:exploretrekora@gmail.com">exploretrekora@gmail.com</a></strong>
            </div>
          </li>
          <li>
            <i><svg class="ic" aria-hidden="true"><use href="#i-clock"/></svg></i>
            <div>
              <small>Business Hours</small>
              <strong>Contact us for availability.</strong>
            </div>
          </li>
          <li>
            <i><svg class="ic" aria-hidden="true"><use href="#i-pin"/></svg></i>
            <div>
              <small>Our Location</small>
              <strong>Surat, India</strong>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- FAQ Section Component (Below Contact Form) -->
  <x-faq />

</div>
