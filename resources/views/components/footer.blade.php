<footer class="ft" id="footer">
  <div class="ft-top">
    <a class="brand text-white flex items-center gap-3" href="{{ route('home') }}" aria-label="Explore Trekora Home">
      <img 
        src="{{ asset('images/explore-trekora.png') }}" 
        alt="Explore Trekora" 
        class="footer-logo"
      />
      <span class="text-xl sm:text-2xl font-serif font-bold text-white tracking-tight">Explore <span class="text-t300 font-sans">Trekora</span></span>
    </a>
    <div class="so" aria-label="Social links">
      <a href="https://www.facebook.com/profile.php?id=61591155821513" target="_blank" rel="noopener noreferrer" class="so-btn so-fb" aria-label="Explore Trekora on Facebook">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
      </a>
      <a href="https://www.instagram.com/explore_trekora?utm_source=ig_web_button_share_sheet&amp;rpxt=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="so-btn so-ig" aria-label="Explore Trekora on Instagram">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
          <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
      </a>
    </div>
  </div>

  <div class="fc">
    <!-- 1. Quick Navigation Links -->
    <div class="ft-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="{{ route('home') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Home</a></li>
        <li><a href="{{ route('destinations') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Destinations</a></li>
        <li><a href="{{ route('tour-packages') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Tour Packages</a></li>
        <li><a href="{{ route('travel-guides') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Travel Guides</a></li>
        <li><a href="{{ route('about-us') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>About Us</a></li>
      </ul>
    </div>

    <div class="ft-col">
      <h4>Popular Destinations</h4>
      <ul>
        <li><a href="{{ route('destinations.show', 'adi-kailash-om-parvat') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Adi Kailash &amp; Om Parvat</a></li>
        <li><a href="{{ route('destinations.show', 'munsyari-kausani') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Munsyari &amp; Kausani</a></li>
        <li><a href="{{ route('destinations.show', 'dalhousie-dharamshala') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Dalhousie &amp; Dharamshala</a></li>
        <li><a href="{{ route('destinations') }}#dest-mount-abu-eco-getaway"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Mount Abu · Coming Soon</a></li>
        <li><a href="{{ route('destinations.show', 'khaliya-top-trek') }}"><svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>Khaliya Top Trek</a></li>
      </ul>
    </div>

    <!-- 2. Our Services -->
    <div class="ft-col">
      <h4>Our Services</h4>
      <ul>
        <li><a href="{{ route('tour-packages') }}#pkg-adventure"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg>Adventure &amp; Trekking</a></li>
        <li><a href="{{ route('tour-packages') }}#pkg-cultural"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg>Cultural &amp; Pilgrimage Tours</a></li>
        <li><a href="{{ route('tour-packages') }}#pkg-honeymoon"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg>Honeymoon Getaways</a></li>
        <li><a href="{{ route('tour-packages') }}#pkg-family"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg>Family Holiday Packages</a></li>
        <li><a href="{{ route('tour-packages') }}#pkg-weekend"><svg class="ic" aria-hidden="true"><use href="#i-check"/></svg>Weekend Nature Escapes</a></li>
      </ul>
    </div>

    <!-- 3. Newsletter Subscription -->
    <div class="ft-col nl">
      <h4>Travel Inspiration</h4>
      <p>Get travel ideas, destination guides, and updates on our latest journeys.</p>
      <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to Explore Trekora!');">
        <input type="email" placeholder="Your email address" aria-label="Email address" required>
        <button type="submit" aria-label="Subscribe to newsletter">
          <svg class="ic" aria-hidden="true"><use href="#i-send"/></svg>
        </button>
      </form>
    </div>
  </div>

  <div class="fb">
    <span>© 2026 Explore Trekora. All rights reserved.</span>
    <nav aria-label="Legal Navigation">
      <a href="{{ route('terms') }}">Terms &amp; conditions</a>
      <a href="{{ route('copyright') }}">Copyright Policy</a>
      <a href="{{ route('about-us') }}">About Us</a>
    </nav>
  </div>
</footer>
