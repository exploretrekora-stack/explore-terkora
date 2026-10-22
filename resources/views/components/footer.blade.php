<footer class="ft" id="footer">
  <!-- Top Illustrated Mountain Horizon (Scenic Layered Himalayan Silhouette in Trekora Brand Palette) -->
  <div class="ft-landscape" aria-hidden="true">
    <svg viewBox="0 0 1440 140" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="ft-landscape-svg">
      <defs>
        <!-- Soft sky transition merging seamlessly into page background -->
        <linearGradient id="ftSkyGrad" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#ffffff" stop-opacity="0"/>
          <stop offset="50%" stop-color="#f8fafc" stop-opacity="0.3"/>
          <stop offset="100%" stop-color="#e2f5f1" stop-opacity="0.45"/>
        </linearGradient>

        <!-- Distant Mountain Peaks (Misty Sage & Soft Teal) -->
        <linearGradient id="ftFarPeaks" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#bbf0e7" stop-opacity="0.65"/>
          <stop offset="100%" stop-color="#80ded0" stop-opacity="0.88"/>
        </linearGradient>

        <!-- Mid-Ground Slopes & Ridges (Vibrant Teal) -->
        <linearGradient id="ftMidHills" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#2dd4bf" stop-opacity="0.75"/>
          <stop offset="100%" stop-color="#0f766e" stop-opacity="0.95"/>
        </linearGradient>

        <!-- Foreground Mountain Ridgeline (Rich Deep Forest Green) -->
        <linearGradient id="ftNearHills" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#0d9488" stop-opacity="0.92"/>
          <stop offset="100%" stop-color="#051d1b" stop-opacity="1"/>
        </linearGradient>
      </defs>

      <!-- 1. Sky Canvas -->
      <rect width="1440" height="140" fill="url(#ftSkyGrad)"/>

      <!-- 2. Gentle Soaring Birds across Horizon -->
      <path d="M1120,24 Q1127,16 1134,22 Q1141,16 1148,24 Q1141,21 1134,27 Q1127,21 1120,24 Z" fill="#0f766e" opacity="0.65"/>
      <path d="M1160,14 Q1165,8 1171,13 Q1177,8 1182,14 Q1176,12 1171,17 Q1166,12 1160,14 Z" fill="#0f766e" opacity="0.55"/>
      <path d="M340,32 Q346,25 352,31 Q358,25 364,32 Q358,29 352,35 Q346,29 340,32 Z" fill="#14b8a6" opacity="0.45"/>

      <!-- 3. Distant Majestic Mountain Peaks (Layer 1) -->
      <path d="M0,140 L0,92 L140,56 L280,90 L440,38 L580,84 L720,48 L880,94 L1040,35 L1180,82 L1320,44 L1440,76 L1440,140 Z" fill="url(#ftFarPeaks)"/>

      <!-- 4. Mid-Tier Rolling Mountain Ridges (Layer 2) -->
      <path d="M0,140 L0,108 Q160,62 320,86 T680,68 T1040,78 T1440,72 L1440,140 Z" fill="url(#ftMidHills)"/>

      <!-- Pine Trees on Mid Summits -->
      <g fill="#0a2a26" opacity="0.8">
        <polygon points="175,74 179,88 171,88"/>
        <polygon points="181,69 186,88 176,88"/>
        <polygon points="187,75 191,88 183,88"/>
        <polygon points="695,58 700,76 690,76"/>
        <polygon points="702,52 708,76 696,76"/>
        <polygon points="709,60 714,76 704,76"/>
        <polygon points="1215,62 1220,80 1210,80"/>
        <polygon points="1222,56 1228,80 1216,80"/>
        <polygon points="1229,63 1234,80 1224,80"/>
        <polygon points="1236,68 1240,80 1232,80"/>
      </g>

      <!-- 5. Near Forest Ridgeline (Layer 3 - Rich Pine Green) -->
      <path d="M0,140 L0,116 Q180,78 380,104 T820,90 T1220,100 T1440,96 L1440,140 Z" fill="url(#ftNearHills)"/>

      <!-- Pine Tree Groupings on Foreground Ridges -->
      <g fill="#051d1b" opacity="0.95">
        <polygon points="340,90 345,112 335,112"/>
        <polygon points="347,84 353,112 341,112"/>
        <polygon points="354,91 359,112 349,112"/>
        <polygon points="860,80 866,106 854,106"/>
        <polygon points="868,74 875,106 861,106"/>
        <polygon points="876,82 882,106 870,106"/>
      </g>

      <!-- 6. Bottom Solid Band Merging Seamlessly with Footer Body (#051d1b) -->
      <path d="M0,124 Q360,118 720,122 Q1080,126 1440,120 L1440,140 L0,140 Z" fill="#051d1b"/>
      <rect y="138" width="1440" height="3" fill="#051d1b"/>
    </svg>
  </div>

  <!-- Deep Forest Footer Main Body (Full Width Container with Centered Inner Wrap) -->
  <div class="ft-body">
    <div class="ft-body-wrap">
      
      <!-- Top Brand, Direct Contacts & Social Lockup -->
      <div class="ft-top">
        <div class="ft-brand-block">
          <a class="brand text-white flex items-center gap-3.5" href="{{ route('home') }}" aria-label="Explore Trekora Home">
            <img 
              src="{{ asset('images/explore-trekora.png') }}" 
              alt="Explore Trekora" 
              class="footer-logo"
            />
            <div class="flex flex-col">
              <span class="text-xl sm:text-2xl font-serif font-bold text-white tracking-tight">Explore <span class="text-t300 font-sans">Trekora</span></span>
              <span class="text-xs text-teal-200/80 font-medium tracking-wide">Your Journey to Peace Begins Here</span>
            </div>
          </a>
        </div>

        <div class="ft-top-actions">
          <!-- Direct Quick Contact Links -->
          <div class="ft-contact-pills" aria-label="Direct Contact">
            <a href="tel:+918460922935" class="ft-contact-pill" title="Call Explore Trekora Support">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
                <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
              </svg>
              <span>+91 8460922935</span>
            </a>
            <a href="mailto:exploretrekora@gmail.com" class="ft-contact-pill" title="Email Explore Trekora Team">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
              </svg>
              <span>exploretrekora@gmail.com</span>
            </a>
          </div>

          <!-- Social Links -->
          <div class="so" aria-label="Social media channels">
            <a href="https://www.facebook.com/profile.php?id=61591155821513" target="_blank" rel="noopener noreferrer" class="so-btn so-fb" aria-label="Explore Trekora on Facebook" title="Follow us on Facebook">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="https://www.instagram.com/explore_trekora?utm_source=ig_web_button_share_sheet&amp;rpxt=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="so-btn so-ig" aria-label="Explore Trekora on Instagram" title="Follow us on Instagram">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- 4 Balanced Content Columns -->
      <div class="fc">
        <!-- 1. Quick Navigation Links -->
        <div class="ft-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('destinations') }}">Destinations</a></li>
            <li><a href="{{ route('tour-packages') }}">Tour Packages</a></li>
            <li><a href="{{ route('travel-guides') }}">Travel Guides</a></li>
            <li><a href="{{ route('about-us') }}">About Us</a></li>
          </ul>
        </div>

        <!-- 2. Popular Destinations -->
        <div class="ft-col">
          <h4>Popular Destinations</h4>
          <ul>
            <li><a href="{{ route('destinations.show', 'adi-kailash-om-parvat') }}">Adi Kailash &amp; Om Parvat</a></li>
            <li><a href="{{ route('destinations.show', 'munsyari-kausani') }}">Munsyari &amp; Kausani</a></li>
            <li><a href="{{ route('destinations.show', 'mount-abu-eco-getaway') }}">Mount Abu Eco Getaway</a></li>
            <li><a href="{{ route('destinations.show', 'gateway-to-malvan') }}">Gateway to Malvan</a></li>
            <li><a href="{{ route('destinations.show', 'sembalpani') }}">Sembalpani Eco Tour</a></li>
            <li><a href="{{ route('destinations.show', 'khaliya-top-trek') }}">Khaliya Top Trek</a></li>
          </ul>
        </div>

        <!-- 3. Our Services -->
        <div class="ft-col">
          <h4>Our Services</h4>
          <ul>
            <li><a href="{{ route('tour-packages') }}#pkg-adventure">Adventure &amp; Trekking</a></li>
            <li><a href="{{ route('tour-packages') }}#pkg-cultural">Cultural &amp; Pilgrimage Tours</a></li>
            <li><a href="{{ route('tour-packages') }}#pkg-honeymoon">Honeymoon Getaways</a></li>
            <li><a href="{{ route('tour-packages') }}#pkg-family">Family Holiday Packages</a></li>
            <li><a href="{{ route('tour-packages') }}#pkg-weekend">Weekend Nature Escapes</a></li>
          </ul>
        </div>

        <!-- 4. Travel Inspiration & Newsletter -->
        <div class="ft-col nl">
          <h4>Travel Inspiration</h4>
          <p>Get travel ideas, destination guides, and updates on our latest journeys.</p>
          
          <form id="footer-nl-form" onsubmit="event.preventDefault(); const inp = this.querySelector('input'); if(inp && inp.value){ alert('Thank you for subscribing to Explore Trekora!'); this.reset(); }">
            <input 
              type="email" 
              name="email" 
              id="ft-email-input" 
              placeholder="Your email address" 
              aria-label="Email address" 
              autocomplete="email" 
              required
            >
            <button type="submit" aria-label="Subscribe to newsletter">
              <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="22" y1="2" x2="11" y2="13"></line>
                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
              </svg>
            </button>
          </form>
        </div>
      </div>

      <!-- Bottom Legal & Copyright Bar -->
      <div class="fb">
        <span>© 2026 Explore Trekora. All rights reserved.</span>
        <nav aria-label="Legal Navigation">
          <a href="{{ route('terms') }}">Terms &amp; conditions</a>
          <a href="{{ route('copyright') }}">Copyright Policy</a>
          <a href="{{ route('about-us') }}">About Us</a>
        </nav>
      </div>
    </div>
  </div>
</footer>
