<!-- Top notification strip -->
<div class="strip">
  <div class="wrap">
    <div class="flex items-center flex-wrap gap-x-6 gap-y-1">
      <span class="inline-flex items-center gap-1.5 font-medium">📍 Vadodara, India</span>
      <span class="inline-flex items-center gap-1.5 font-medium">✉ exploretrekora@gmail.com</span>
    </div>
    <span class="font-medium text-t300 hidden sm:inline">✨ Free cancellation on selected trips</span>
  </div>
</div>

<!-- Main sticky navigation header -->
<header class="nav" id="home">
  <div class="wrap">
    <!-- Brand Logo (Pure Logo only, no duplicate text) -->
    <a class="brand" href="{{ route('home') }}" aria-label="Explore Trekora Homepage">
      <img 
        src="{{ asset('images/explore-trekora.png') }}" 
        alt="Explore Trekora" 
        class="h-12 sm:h-14 md:h-[58px] w-auto max-h-[62px] object-contain drop-shadow-xs"
        loading="eager"
      />
    </a>

    <!-- Navigation links with whitespace-nowrap and clean wave underline styling -->
    <nav aria-label="Main Navigation">
      <ul class="menu" id="menu">
        <li><a href="{{ route('home') }}#home" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" onclick="handleNavClick()" onmouseenter="closeAllNavDropdowns()">Home</a></li>

        <!-- Destinations Dropdown -->
        <li 
          class="nav-drop {{ request()->routeIs('destinations*') ? 'active' : '' }}" 
          id="nav-drop-destinations"
          onmouseenter="openNavDropdown('nav-drop-destinations')"
          onmouseleave="scheduleCloseNavDropdown()"
        >
          <a 
            href="{{ route('destinations') }}" 
            class="nav-drop-btn {{ request()->routeIs('destinations*') ? 'active' : '' }}" 
            aria-expanded="false" 
            aria-haspopup="true"
            onclick="toggleNavDropdown('nav-drop-destinations', event)"
            id="nav-btn-destinations"
          >
            <span>Destinations</span>
            <svg class="nav-drop-arr" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.5 4.5l3.5 3.5 3.5-3.5"/>
            </svg>
          </a>
          <div 
            class="nav-drop-menu mega-menu" 
            aria-labelledby="nav-btn-destinations"
            onmouseenter="cancelCloseNavDropdown()"
            onmouseleave="scheduleCloseNavDropdown()"
          >
            <div class="mega-menu-inner">
              <!-- Left: Two Columns of Destination Links with a Single "Our Destinations" Title -->
              <div class="mega-links-wrapper">
                <div class="mega-col-title-wrap">
                  <span class="mega-col-title">Our Destinations</span>
                </div>
                <div class="mega-links-grid">
                  <!-- Column 1 (Items 1-6) -->
                  <div class="mega-links-col">
                    <a href="{{ route('destinations.show', 'adi-kailash-om-parvat') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Adikailash &amp; Om Parvat Yatra</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'char-dham-yatra') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Chardham Yatra</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'munsyari-kausani') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Munsyari &amp; Kausani</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'milam-glacier-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Milam Glacier Trek</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'khaliya-top-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Khaliya Top Trek</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'dalhousie-dharamshala') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Dalhousie &amp; Dharamshala</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                  </div>

                  <!-- Column 2 (Items 7-13) -->
                  <div class="mega-links-col">
                    <a href="{{ route('destinations.show', 'kareri-lake-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Kareri Lake Trek</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('tour-packages.show', 'harihar-fort-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Hariharfort &amp; Harishchandragadh</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'girnar-pilgrimage-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Girnar</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Mount Abu</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'dang-forest-circuit') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Dang</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'dediapada-wilderness-trek') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Dediyapada</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'gateway-to-malvan') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Gateway to Malvan</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                    <a href="{{ route('destinations.show', 'sembalpani') }}" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Sembalpani</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Right: 2 Portrait Pill Photo Cards + 1 Dark Featured Card (Exact Image-2 Style) -->
              <div class="mega-visuals-wrapper">
                <!-- Pill Card 1: Mount Abu -->
                <a href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}" class="mega-pill-card" onclick="handleNavClick()" aria-label="Mount Abu">
                  <img src="{{ asset('images/mega-portrait-1.jpg') }}" alt="Mount Abu" loading="lazy">
                  <div class="mega-pill-overlay">
                    <span class="mega-pill-badge">Mount Abu</span>
                  </div>
                </a>

                <!-- Pill Card 2 -->
                <a href="{{ route('destinations') }}" class="mega-pill-card" onclick="handleNavClick()" aria-label="Explore Himalayan Treks">
                  <img src="{{ asset('images/mega-portrait-2.jpg') }}" alt="Himalayas" loading="lazy">
                  <div class="mega-pill-overlay">
                    <span class="mega-pill-badge">Himalayas</span>
                  </div>
                </a>

                <!-- Dark Featured Card with Background Photo and CTA -->
                <div class="mega-dark-card group">
                  <img src="{{ asset('images/mega-featured.jpg') }}" alt="Explore All Destinations" class="mega-dark-bg" loading="lazy">
                  <div class="mega-dark-overlay"></div>
                  <div class="mega-dark-top">
                    <span class="mega-dark-badge">NEW</span>
                  </div>
                  <div class="mega-dark-bottom">
                    <span class="mega-dark-eyebrow">EXPEDITION 2026</span>
                    <h4 class="mega-dark-title">Handpicked Escapes</h4>
                    <p class="mega-dark-desc">Sacred high passes, Sahyadri forts &amp; scenic trails.</p>
                    <a href="{{ route('destinations') }}" class="mega-dark-cta" onclick="handleNavClick()">
                      <span>Explore all destinations</span>
                      <span class="cta-arr">→</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- Tour Packages Dropdown -->
        <li 
          class="nav-drop {{ request()->routeIs('tour-packages*') ? 'active' : '' }}" 
          id="nav-drop-packages"
          onmouseenter="openNavDropdown('nav-drop-packages')"
          onmouseleave="scheduleCloseNavDropdown()"
        >
          <a 
            href="{{ route('tour-packages') }}" 
            class="nav-drop-btn {{ request()->routeIs('tour-packages*') ? 'active' : '' }}" 
            aria-expanded="false" 
            aria-haspopup="true"
            onclick="toggleNavDropdown('nav-drop-packages', event)"
            id="nav-btn-packages"
          >
            <span>Tour Packages</span>
            <svg class="nav-drop-arr" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M2.5 4.5l3.5 3.5 3.5-3.5"/>
            </svg>
          </a>
          <div 
            class="nav-drop-menu mega-menu" 
            aria-labelledby="nav-btn-packages"
            onmouseenter="cancelCloseNavDropdown()"
            onmouseleave="scheduleCloseNavDropdown()"
          >
            <div class="mega-menu-inner">
              <!-- Left: Two Columns of Tour Package Categories -->
              <div class="mega-links-wrapper">
                <div class="mega-col-title-wrap">
                  <span class="mega-col-title">Our Tour Packages</span>
                </div>
                <div class="mega-links-grid">
                  <!-- Column 1 (Items 1-3) -->
                  <div class="mega-links-col">
                    <a href="{{ route('tour-packages') }}#pkg-cultural" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Cultural Tours</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>

                    <a href="{{ route('tour-packages') }}#pkg-honeymoon" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Honeymoon Packages</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>

                    <a href="{{ route('tour-packages') }}#pkg-adventure" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Adventure Tours</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                  </div>

                  <!-- Column 2 (Items 4-5) -->
                  <div class="mega-links-col">
                    <a href="{{ route('tour-packages') }}#pkg-family" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Family Tours</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>

                    <a href="{{ route('tour-packages') }}#pkg-weekend" class="mega-link" onclick="handleNavClick()">
                      <span class="mega-link-name">Weekend Getaways</span>
                      <svg class="mega-link-arr" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3l5 5-5 5"/></svg>
                    </a>
                  </div>
                </div>
              </div>

              <!-- Right: 2 Portrait Pill Photo Cards + 1 Dark Featured Card (Matching Image-2 Style) -->
              <div class="mega-visuals-wrapper">
                <!-- Pill Card 1: Adventure -->
                <a href="{{ route('tour-packages') }}#pkg-adventure" class="mega-pill-card" onclick="handleNavClick()" aria-label="Explore Adventure Packages">
                  <img src="{{ asset('images/pkg-portrait-1.jpg') }}" alt="Adventure Packages" loading="lazy">
                  <div class="mega-pill-overlay">
                    <span class="mega-pill-badge">Adventure</span>
                  </div>
                </a>

                <!-- Pill Card 2: Getaways -->
                <a href="{{ route('tour-packages') }}#pkg-weekend" class="mega-pill-card" onclick="handleNavClick()" aria-label="Explore Weekend Getaways">
                  <img src="{{ asset('images/pkg-portrait-2.jpg') }}" alt="Weekend Getaways" loading="lazy">
                  <div class="mega-pill-overlay">
                    <span class="mega-pill-badge">Getaways</span>
                  </div>
                </a>

                <!-- Dark Featured Card -->
                <div class="mega-dark-card group">
                  <img src="{{ asset('images/pkg-featured.jpg') }}" alt="Explore All Tour Packages" class="mega-dark-bg" loading="lazy">
                  <div class="mega-dark-overlay"></div>
                  <div class="mega-dark-top">
                    <span class="mega-dark-badge">POPULAR</span>
                  </div>
                  <div class="mega-dark-bottom">
                    <span class="mega-dark-eyebrow">CURATED 2026</span>
                    <h4 class="mega-dark-title">Handcrafted Tours</h4>
                    <p class="mega-dark-desc">Verified stays, expert local guides &amp; custom itineraries.</p>
                    <a href="{{ route('tour-packages') }}" class="mega-dark-cta" onclick="handleNavClick()">
                      <span>Explore all packages</span>
                      <span class="cta-arr">→</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li><a href="{{ route('travel-guides') }}" class="nav-link {{ request()->routeIs('travel-guides*') ? 'active' : '' }}" onclick="handleNavClick()" onmouseenter="closeAllNavDropdowns()">Travel Guides</a></li>
        <li><a href="{{ route('about-us') }}" class="nav-link {{ request()->routeIs('about-us*') ? 'active' : '' }}" onclick="handleNavClick()" onmouseenter="closeAllNavDropdowns()">About Us</a></li>
      </ul>
    </nav>

    <!-- Right Side Actions -->
    <div class="nav-r">
      <x-start-exploring />
      <button 
        class="burger" 
        id="burger-btn"
        aria-controls="mobile-drawer" 
        aria-expanded="false" 
        onclick="toggleMobileMenu()"
        aria-label="Toggle navigation menu"
      >
        <svg class="burger-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="4" y1="7" x2="20" y2="7"/>
          <line x1="4" y1="12" x2="20" y2="12"/>
          <line x1="4" y1="17" x2="20" y2="17"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Drawer Backdrop Overlay -->
<div id="mobile-backdrop" class="mobile-backdrop" onclick="closeMobileMenu()" aria-hidden="true"></div>

<!-- Right Slide-in Mobile Drawer Navigation -->
<div id="mobile-drawer" class="mobile-drawer" role="dialog" aria-modal="true" aria-label="Mobile navigation menu">
  <!-- Drawer Header -->
  <div class="drawer-header">
    <a class="brand" href="{{ url('/') }}" onclick="handleNavClick()" aria-label="Explore Trekora Homepage">
      <img 
        src="{{ asset('images/explore-trekora.png') }}" 
        alt="Explore Trekora" 
        class="h-10 w-auto object-contain"
      />
    </a>
    <button 
      type="button" 
      class="drawer-close-btn" 
      onclick="closeMobileMenu()" 
      aria-label="Close navigation menu"
    >
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"/>
        <line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </button>
  </div>

  <!-- Drawer Body Navigation Links -->
  <div class="drawer-body">
    <ul class="drawer-nav">
      <li>
        <a href="{{ route('home') }}#home" class="drawer-link {{ request()->routeIs('home') ? 'active' : '' }}" onclick="handleNavClick()">
          <span>Home</span>
          <span class="drawer-link-arrow">→</span>
        </a>
      </li>

      <!-- Destinations Collapsible Accordion -->
      <li class="drawer-accordion-item {{ request()->routeIs('destinations*') ? 'active' : '' }}" id="drawer-acc-destinations">
        <button 
          type="button" 
          class="drawer-accordion-trigger {{ request()->routeIs('destinations*') ? 'active' : '' }}" 
          onclick="toggleDrawerAccordion('drawer-acc-destinations')"
          aria-expanded="false"
        >
          <span>Destinations</span>
          <svg class="drawer-accordion-arr" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2.5 4.5l3.5 3.5 3.5-3.5"/>
          </svg>
        </button>
        <div class="drawer-accordion-content">
          <a href="{{ route('destinations.show', 'adi-kailash-om-parvat') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Adikailash &amp; Om Parvat Yatra</span>
          </a>
          <a href="{{ route('destinations.show', 'char-dham-yatra') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Chardham Yatra</span>
          </a>
          <a href="{{ route('destinations.show', 'munsyari-kausani') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Munsyari &amp; Kausani</span>
          </a>
          <a href="{{ route('destinations.show', 'milam-glacier-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Milam Glacier Trek</span>
          </a>
          <a href="{{ route('destinations.show', 'khaliya-top-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Khaliya Top Trek</span>
          </a>
          <a href="{{ route('destinations.show', 'dalhousie-dharamshala') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Dalhousie &amp; Dharamshala</span>
          </a>
          <a href="{{ route('destinations.show', 'kareri-lake-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Kareri Lake Trek</span>
          </a>
          <a href="{{ route('tour-packages.show', 'harihar-fort-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Hariharfort &amp; Harishchandragadh</span>
          </a>
          <a href="{{ route('destinations.show', 'girnar-pilgrimage-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Girnar</span>
          </a>
          <a href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Mount Abu</span>
          </a>
          <a href="{{ route('destinations.show', 'dang-forest-circuit') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Dang</span>
          </a>
          <a href="{{ route('destinations.show', 'dediapada-wilderness-trek') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Dediyapada</span>
          </a>
          <a href="{{ route('destinations.show', 'gateway-to-malvan') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Gateway to Malvan</span>
          </a>
          <a href="{{ route('destinations.show', 'sembalpani') }}" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Sembalpani</span>
          </a>
          <a href="{{ route('destinations') }}" class="drawer-section-cta" onclick="handleNavClick()">
            <span>Explore all destinations</span>
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </li>

      <!-- Tour Packages Collapsible Accordion -->
      <li class="drawer-accordion-item {{ request()->routeIs('tour-packages*') ? 'active' : '' }}" id="drawer-acc-packages">
        <button 
          type="button" 
          class="drawer-accordion-trigger {{ request()->routeIs('tour-packages*') ? 'active' : '' }}" 
          onclick="toggleDrawerAccordion('drawer-acc-packages')"
          aria-expanded="false"
        >
          <span>Tour Packages</span>
          <svg class="drawer-accordion-arr" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2.5 4.5l3.5 3.5 3.5-3.5"/>
          </svg>
        </button>
        <div class="drawer-accordion-content">
          <a href="{{ route('tour-packages') }}#pkg-cultural" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Cultural Tours</span>
          </a>
          <a href="{{ route('tour-packages') }}#pkg-honeymoon" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Honeymoon Packages</span>
          </a>
          <a href="{{ route('tour-packages') }}#pkg-adventure" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Adventure Tours</span>
          </a>
          <a href="{{ route('tour-packages') }}#pkg-family" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Family Tours</span>
          </a>
          <a href="{{ route('tour-packages') }}#pkg-weekend" class="drawer-sublink" onclick="handleNavClick()">
            <span class="sublink-title">Weekend Getaways</span>
          </a>
          <a href="{{ route('tour-packages') }}" class="drawer-section-cta" onclick="handleNavClick()">
            <span>All tour packages</span>
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </li>

      <li>
        <a href="{{ route('travel-guides') }}" class="drawer-link {{ request()->routeIs('travel-guides*') ? 'active' : '' }}" onclick="handleNavClick()">
          <span>Travel Guides</span>
          <span class="drawer-link-arrow">→</span>
        </a>
      </li>

      <li>
        <a href="{{ route('about-us') }}" class="drawer-link {{ request()->routeIs('about-us*') ? 'active' : '' }}" onclick="handleNavClick()">
          <span>About Us</span>
          <span class="drawer-link-arrow">→</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Drawer Footer -->
  <div class="drawer-footer">
    <x-start-exploring block />
    <div class="drawer-contact-info">
      <div class="flex flex-col items-center gap-1 text-xs text-muted">
        <span>📍 Vadodara, India</span>
        <span>✉ info@exploretrekora.com</span>
      </div>
    </div>
  </div>
</div>
<script>
  document.querySelectorAll('.start-exploring').forEach((link) => {
    link.addEventListener('click', (event) => {
      if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || event.button !== 0) {
        return;
      }

      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
      }

      if (link.dataset.flying === 'true') {
        event.preventDefault();
        return;
      }

      event.preventDefault();
      link.dataset.flying = 'true';
      link.classList.add('is-flying');
      link.setAttribute('aria-disabled', 'true');

      const destination = link.href;
      let left = false;

      const go = () => {
        if (left) {
          return;
        }
        left = true;
        if (typeof window.visitPage === 'function') {
          window.visitPage(destination);
          return;
        }

        window.location.assign(destination);
      };

      const plane = link.querySelector('.start-exploring-plane');
      const backup = window.setTimeout(go, 900);
      plane?.addEventListener('animationend', (animationEvent) => {
        if (animationEvent.target !== plane) {
          return;
        }
        window.clearTimeout(backup);
        go();
      });

      window.setTimeout(() => {
        if (!link.isConnected || window.location.href === destination) {
          return;
        }
        link.dataset.flying = 'false';
        link.classList.remove('is-flying');
        link.removeAttribute('aria-disabled');
      }, 2500);
    });
  });
</script>
