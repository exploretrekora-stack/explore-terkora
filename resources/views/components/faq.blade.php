<!-- FAQ Section Component -->
<section class="sec" id="faq" aria-labelledby="faq-heading">
  <div class="fq">
    <!-- Container 1 (Left): Visuals & Story Card -->
    <div class="faq-visuals">
      <div class="fl">
        <div class="fr">
          <img src="{{ asset('images/faq-bike.jpg') }}" alt="Traveler exploring scenic waterfall trail" loading="lazy">
        </div>
        <div class="da">
          <i><svg class="ic" aria-hidden="true"><use href="#i-globe"/></svg></i>
          <div>
            <strong>Every Trail Tells a Story</strong>
            <small>Discover hidden trails, breathtaking views, and unforgettable moments.</small>
          </div>
        </div>
      </div>

      <div class="fm">
        <div class="fr">
          <img src="{{ asset('images/faq-canyon.jpg') }}" alt="Peaceful eco-stay cottages in the green hills" loading="lazy">
        </div>
        <div class="fr">
          <img src="{{ asset('images/faq-eiffel.jpg') }}" alt="Spectacular Himalayan mountain peak at night" loading="lazy">
        </div>
      </div>
    </div>

    <!-- Container 2 (Right): FAQ Content & Accordion -->
    <div class="fa">
      <span class="ey faq-eyebrow">
        Ask question
        <svg class="kicker-line" viewBox="0 0 160 14" fill="none" preserveAspectRatio="none" aria-hidden="true">
          <path d="M2.5 7.5 C 35 3, 85 3.2, 157 6.8 C 115 9.2, 55 9.8, 18 11.2" stroke="#0d9488" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      <h2 class="h2" id="faq-heading" style="margin-bottom:26px">Answers before you pack</h2>

      <div class="faq-accordion" id="faq-accordion">
        <!-- FAQ 1 -->
        <details name="trekora-faq" open>
          <summary>
            What is included in an Explore Trekora package?
            <span class="tg"><svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg></span>
          </summary>
          <p>Our tour packages may include accommodation, transportation, sightseeing, and guided activities depending on the selected trip. Please check the individual package details for exact inclusions and exclusions.</p>
        </details>

        <!-- FAQ 2 -->
        <details name="trekora-faq">
          <summary>
            How can I book a tour package?
            <span class="tg"><svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg></span>
          </summary>
          <p>Explore our destinations, choose your preferred tour package, and contact our team to discuss your travel dates, group size, and requirements. Our team will guide you through the next steps.</p>
        </details>

        <!-- FAQ 3 -->
        <details name="trekora-faq">
          <summary>
            Can I customize my travel itinerary?
            <span class="tg"><svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg></span>
          </summary>
          <p>We can discuss itinerary preferences based on your chosen destination, travel dates, and group requirements. Customization options depend on the package and availability.</p>
        </details>

        <!-- FAQ 4 -->
        <details name="trekora-faq">
          <summary>
            Are your trekking packages suitable for beginners?
            <span class="tg"><svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg></span>
          </summary>
          <p>Some treks may be suitable for beginners, while others require good fitness and prior trekking experience. Review the difficulty level, altitude, duration, and preparation requirements before booking.</p>
        </details>

        <!-- FAQ 5 -->
        <details name="trekora-faq">
          <summary>
            What should I carry for my trip?
            <span class="tg"><svg class="ic" aria-hidden="true"><use href="#i-chev"/></svg></span>
          </summary>
          <p>Pack comfortable clothing, suitable footwear, personal essentials, identification, and any destination-specific equipment. For mountain trips, bring warm layers, rain protection, and a basic first-aid kit.</p>
        </details>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const faqContainer = document.getElementById('faq-accordion');
    if (!faqContainer) return;
    const items = faqContainer.querySelectorAll('details');
    items.forEach((item) => {
      item.addEventListener('toggle', () => {
        if (item.open) {
          items.forEach((other) => {
            if (other !== item && other.open) {
              other.removeAttribute('open');
            }
          });
        }
      });
    });
  });
</script>
