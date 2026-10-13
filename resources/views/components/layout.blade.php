<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Explore Trekora – Your Journey to Peace Begins Here</title>
    <meta name="description" content="Explore Trekora – Plan your perfect escape with handpicked trips in 40+ countries, local guides, seamless booking, and complete visa support.">
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=2" sizes="48x48">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/explore-trekora-favicon-32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/explore-trekora-favicon-192.png') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/explore-trekora-favicon-180.png') }}?v=2">

    <!-- Google Fonts: Plus Jakarta Sans, Fraunces & Caveat for authentic script accents -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Fraunces:ital,opsz,wght@0,9..144,400..900;1,9..144,400..900&family=Plus+Jakarta+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-ink font-sans antialiased selection:bg-t500 selection:text-white">
    <x-svg-symbols />

    <div id="page-shell">
        {{ $slot }}
    </div>

    <script>
        // 10 Interactive Trekker Stories & Photos (Auto-rotating with Manual Navigation)
        const reviews = [
            {
                quote: "Standing in front of the sacred Om Parvat gave us goosebumps. Trekora handled all the inner line permits and high-altitude logistics seamlessly.",
                author: "Rajesh Patel",
                trip: "Adikailash & Om Parvat Yatra",
                tag: "Adikailash & Om Parvat",
                image: "{{ asset('images/story-1.jpg') }}"
            },
            {
                quote: "Waking up to the 360-degree panoramic view of Panchachuli peaks from Khaliya Top was the highlight of our trek. Superbly organized camp!",
                author: "Aarav Sharma",
                trip: "Khaliya Top, Munsyari",
                tag: "Khaliya Top Trek",
                image: "{{ asset('images/story-2.jpg') }}"
            },
            {
                quote: "The rugged Johar Valley trails were thrilling and awe-inspiring. Our trek lead was exceptionally skilled and safety was never compromised.",
                author: "Vikram Desai",
                trip: "Milam Glacier Expedition",
                tag: "Milam Glacier Trek",
                image: "{{ asset('images/story-3.jpg') }}"
            },
            {
                quote: "Camping beside the crystal clear glacial waters of Kareri Lake under a sky full of stars was truly a dream come true.",
                author: "Priya Shah",
                trip: "Kareri Lake, Himachal",
                tag: "Kareri Lake Trek",
                image: "{{ asset('images/story-4.jpg') }}"
            },
            {
                quote: "A serene vacation amidst pine-scented woods, colonial charm, and Tibetan monasteries. Everything was punctual and hassle-free.",
                author: "Sneha Kulkarni",
                trip: "Dalhousie & Dharamshala Tour",
                tag: "Dalhousie & Dharamshala",
                image: "{{ asset('images/story-6.jpg') }}"
            },
            {
                quote: "Ascending the sacred 10,000 steps of Mount Girnar at sunrise was unforgettable. Well-planned halts and comfortable stays made it effortless.",
                author: "Bhavik Dave",
                trip: "Girnar Hill Trek & Junagadh Exploration",
                tag: "Girnar Summit",
                image: "{{ asset('images/story-7.jpg') }}"
            },
            {
                quote: "Exploring hidden trails through the Aravalli hills away from the tourist crowd was refreshing. Cozy eco-cottages and delicious meals!",
                author: "Ananya Mehta",
                trip: "Mount Abu",
                tag: "Mount Abu Trails",
                image: "{{ asset('images/story-8.jpg') }}"
            },
            {
                quote: "Dense monsoon teak forests, secret waterfalls, and warm tribal hospitality. Explore Trekora made our Dang family trip deeply memorable.",
                author: "Hardik Trivedi",
                trip: "Dang Forest Circuit",
                tag: "Dang Waterfalls",
                image: "{{ asset('images/story-9.jpg') }}"
            },
            {
                quote: "Pure untouched wilderness in Shoolpaneshwar. River treks, clean homestays, and pristine waterfalls made this our best weekend escape.",
                author: "Amit Vora",
                trip: "Dediyapada Wilderness Trek",
                tag: "Dediyapada Forest Trail",
                image: "{{ asset('images/story-10.jpg') }}"
            },
            {
                quote: "Scuba diving around Sindhudurg and sunset kayaking at Khavane beach was magical. Fresh Malvani food and coastal hospitality made it a perfect trip.",
                author: "Tanvi Sawant",
                trip: "Gateway to Malvan",
                tag: "Sindhudurg & Watersports",
                image: "{{ asset('images/trips/gateway-to-malvan/1.jpg') }}"
            }
        ];

        let currentStoryIdx = 0;
        let storyTimer = null;

        function sq(index) {
            if (index < 0) index = reviews.length - 1;
            if (index >= reviews.length) index = 0;
            currentStoryIdx = index;

            const rev = reviews[index];
            const quoteEl = document.getElementById('qt');
            const authorEl = document.getElementById('qn');
            const tripEl = document.getElementById('qr');
            const metaEl = document.getElementById('au-meta');
            const iconEl = document.getElementById('story-avatar-icon');
            const imgEl = document.getElementById('story-main-img');
            const tagEl = document.getElementById('story-tag-text');

            if (quoteEl && authorEl && tripEl && rev) {
                quoteEl.style.opacity = '0';
                if (metaEl) metaEl.style.opacity = '0';
                if (tagEl) tagEl.style.opacity = '0';
                if (iconEl) iconEl.style.transform = 'scale(0.88)';

                setTimeout(() => {
                    quoteEl.textContent = rev.quote;
                    authorEl.textContent = rev.author;
                    tripEl.textContent = rev.trip;
                    if (metaEl) metaEl.style.opacity = '1';
                    if (tagEl) {
                        tagEl.textContent = '📍 ' + rev.tag;
                        tagEl.style.opacity = '1';
                    }
                    if (iconEl) iconEl.style.transform = 'scale(1)';
                    quoteEl.style.opacity = '1';
                }, 180);

                if (imgEl && rev.image) {
                    imgEl.style.opacity = '0.35';
                    imgEl.style.transform = 'scale(1.04)';
                    setTimeout(() => {
                        imgEl.src = rev.image;
                        imgEl.alt = rev.trip;
                        imgEl.style.opacity = '1';
                        imgEl.style.transform = 'scale(1)';
                    }, 180);
                }

                const dots = document.querySelectorAll('.dots button');
                dots.forEach((btn, k) => {
                    btn.className = (k === index) ? 'on' : '';
                });
            }
        }

        function nextStory() {
            sq(currentStoryIdx + 1);
        }

        function prevStory() {
            sq(currentStoryIdx - 1);
        }

        function startStoryAutoplay() {
            stopStoryAutoplay();
            storyTimer = setInterval(() => {
                nextStory();
            }, 4500);
        }

        function stopStoryAutoplay() {
            if (storyTimer) {
                clearInterval(storyTimer);
                storyTimer = null;
            }
        }

        function syncPageWidgets() {
            const storiesSection = document.getElementById('stories');
            stopStoryAutoplay();

            if (storiesSection && storiesSection.dataset.storiesBound !== 'true') {
                storiesSection.addEventListener('mouseenter', stopStoryAutoplay);
                storiesSection.addEventListener('mouseleave', startStoryAutoplay);
                storiesSection.dataset.storiesBound = 'true';
            }

            if (storiesSection) {
                startStoryAutoplay();
            }

            renderCalendar();
        }

        document.addEventListener('DOMContentLoaded', syncPageWidgets);
        document.addEventListener('page:loaded', syncPageWidgets);

        // Interactive Passenger Counter
        let passengersCount = 3;
        function travelersForPassengerCount(count) {
            if (count <= 1) {
                return '1 solo adventurer';
            }
            if (count === 2) {
                return '2 adults';
            }
            return '4 adults group';
        }
        function stp(delta) {
            passengersCount = Math.max(1, Math.min(9, passengersCount + delta));
            const paxEl = document.getElementById('pax');
            const travelersEl = document.getElementById('book-travelers');
            if (paxEl) {
                paxEl.textContent = ('0' + passengersCount).slice(-2);
            }
            if (travelersEl) {
                travelersEl.value = travelersForPassengerCount(passengersCount);
            }
        }

        // Mobile Drawer Controller (Slide-in from Right)
        function openMobileMenu() {
            document.body.classList.add('drawer-open', 'drawer-locked');
            const burger = document.getElementById('burger-btn');
            if (burger) burger.setAttribute('aria-expanded', 'true');
        }

        function closeMobileMenu() {
            document.body.classList.remove('drawer-open', 'drawer-locked');
            const burger = document.getElementById('burger-btn');
            if (burger) burger.setAttribute('aria-expanded', 'false');
        }

        function toggleMobileMenu() {
            if (document.body.classList.contains('drawer-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        }

        function toggleDrawerAccordion(id) {
            const target = document.getElementById(id);
            if (!target) return;
            const isOpen = target.classList.contains('is-open');

            // Close other open accordion items in the drawer
            document.querySelectorAll('.drawer-accordion-item.is-open').forEach(el => {
                if (el !== target) {
                    el.classList.remove('is-open');
                    const trigger = el.querySelector('.drawer-accordion-trigger');
                    if (trigger) trigger.setAttribute('aria-expanded', 'false');
                }
            });

            if (isOpen) {
                target.classList.remove('is-open');
                const trigger = target.querySelector('.drawer-accordion-trigger');
                if (trigger) trigger.setAttribute('aria-expanded', 'false');
            } else {
                target.classList.add('is-open');
                const trigger = target.querySelector('.drawer-accordion-trigger');
                if (trigger) trigger.setAttribute('aria-expanded', 'true');
            }
        }

        // Navbar Dropdown Controller (Strictly single active dropdown at all times)
        let navDropdownCloseTimer = null;

        function openNavDropdown(id) {
            cancelCloseNavDropdown();
            document.querySelectorAll('.nav-drop').forEach(el => {
                if (el.id === id) {
                    el.classList.add('is-open');
                    const btn = el.querySelector('.nav-drop-btn');
                    if (btn) btn.setAttribute('aria-expanded', 'true');
                } else {
                    el.classList.remove('is-open');
                    const btn = el.querySelector('.nav-drop-btn');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });
        }

        function scheduleCloseNavDropdown() {
            if (navDropdownCloseTimer) clearTimeout(navDropdownCloseTimer);
            navDropdownCloseTimer = setTimeout(() => {
                closeAllNavDropdowns();
            }, 300);
        }

        function cancelCloseNavDropdown() {
            if (navDropdownCloseTimer) {
                clearTimeout(navDropdownCloseTimer);
                navDropdownCloseTimer = null;
            }
        }

        function toggleNavDropdown(id, event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            cancelCloseNavDropdown();
            const target = document.getElementById(id);
            if (!target) return;
            const isOpen = target.classList.contains('is-open');

            // Close every other dropdown first
            document.querySelectorAll('.nav-drop').forEach(el => {
                if (el !== target) {
                    el.classList.remove('is-open');
                    const btn = el.querySelector('.nav-drop-btn');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });

            if (isOpen) {
                target.classList.remove('is-open');
                const btn = target.querySelector('.nav-drop-btn');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            } else {
                target.classList.add('is-open');
                const btn = target.querySelector('.nav-drop-btn');
                if (btn) btn.setAttribute('aria-expanded', 'true');
            }
        }

        function closeAllNavDropdowns() {
            cancelCloseNavDropdown();
            document.querySelectorAll('.nav-drop.is-open').forEach(el => {
                el.classList.remove('is-open');
                const btn = el.querySelector('.nav-drop-btn');
                if (btn) btn.setAttribute('aria-expanded', 'false');
            });
        }

        function handleNavClick() {
            closeAllNavDropdowns();
            closeMobileMenu();
        }

        // Custom Dropdown & Calendar Controller
        function closeAllDropdowns() {
            document.querySelectorAll('.custom-dropdown-field.open').forEach(field => {
                field.classList.remove('open');
                const trigger = field.querySelector('.custom-dropdown-trigger');
                if (trigger) trigger.setAttribute('aria-expanded', 'false');
            });
            const searchBar = document.getElementById('trip-search-bar');
            if (searchBar) searchBar.classList.remove('is-active');
        }

        function toggleDropdown(wrapperId) {
            const wrapper = document.getElementById(wrapperId);
            if (!wrapper) return;
            const isOpen = wrapper.classList.contains('open');
            closeAllDropdowns();
            if (!isOpen) {
                wrapper.classList.add('open');
                const trigger = wrapper.querySelector('.custom-dropdown-trigger');
                if (trigger) trigger.setAttribute('aria-expanded', 'true');
                const searchBar = document.getElementById('trip-search-bar');
                if (searchBar) searchBar.classList.add('is-active');
            }
        }

        function selectDestination(val, btnEl) {
            const displayEl = document.getElementById('dest-display-val');
            const selectEl = document.getElementById('d');
            const slug = btnEl && btnEl.getAttribute('data-slug') ? btnEl.getAttribute('data-slug') : val;
            if (displayEl) displayEl.textContent = val;
            if (selectEl) {
                selectEl.value = slug;
                selectEl.dispatchEvent(new Event('change'));
            }
            if (btnEl) {
                const container = btnEl.closest('.dest-dropdown-grid') || btnEl.closest('.custom-dropdown-panel') || btnEl.closest('.custom-dropdown-list');
                if (container) {
                    container.querySelectorAll('.dropdown-item-btn').forEach(btn => btn.classList.remove('selected'));
                    btnEl.classList.add('selected');
                }
            }
            closeAllDropdowns();
        }

        function selectTravelers(val, btnEl) {
            const displayEl = document.getElementById('travelers-display-val');
            const selectEl = document.getElementById('g');
            if (displayEl) displayEl.textContent = val;
            if (selectEl) {
                selectEl.value = val;
                selectEl.dispatchEvent(new Event('change'));
            }
            if (btnEl) {
                const list = btnEl.closest('.custom-dropdown-list');
                if (list) {
                    list.querySelectorAll('.dropdown-item-btn').forEach(btn => btn.classList.remove('selected'));
                    btnEl.classList.add('selected');
                }
            }
            closeAllDropdowns();
        }

        // Custom Datepicker State & Logic
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        let calYear = 2026;
        let calMonth = 9; // October (0-indexed)
        let selectedDate = new Date(2026, 9, 16); // 16 Oct 2026
        const todayDate = new Date(2026, 9, 9); // 9 Oct 2026

        function renderCalendar() {
            const monthTitleEl = document.getElementById('cal-month-title');
            const gridEl = document.getElementById('cal-days-grid');
            if (!monthTitleEl || !gridEl) return;

            monthTitleEl.textContent = `${months[calMonth]} ${calYear}`;
            gridEl.innerHTML = '';

            const firstDayIndex = new Date(calYear, calMonth, 1).getDay();
            const daysInMonth = new Date(calYear, calMonth + 1, 0).getDate();

            // Blank filler days
            for (let i = 0; i < firstDayIndex; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.className = 'cal-day';
                emptyCell.style.pointerEvents = 'none';
                gridEl.appendChild(emptyCell);
            }

            // Days of current month
            for (let day = 1; day <= daysInMonth; day++) {
                const dayDate = new Date(calYear, calMonth, day);
                const dayBtn = document.createElement('button');
                dayBtn.type = 'button';
                dayBtn.className = 'cal-day';
                dayBtn.textContent = day;

                const isToday = dayDate.toDateString() === todayDate.toDateString();
                const isSelected = selectedDate && dayDate.toDateString() === selectedDate.toDateString();
                const isPast = dayDate < new Date(todayDate.getFullYear(), todayDate.getMonth(), todayDate.getDate());

                if (isToday) dayBtn.classList.add('today');
                if (isSelected) dayBtn.classList.add('selected');
                if (isPast) {
                    dayBtn.disabled = true;
                } else {
                    dayBtn.onclick = () => {
                        selectCalendarDate(calYear, calMonth, day);
                    };
                }

                gridEl.appendChild(dayBtn);
            }
        }

        function changeMonth(delta) {
            calMonth += delta;
            if (calMonth < 0) {
                calMonth = 11;
                calYear--;
            } else if (calMonth > 11) {
                calMonth = 0;
                calYear++;
            }
            renderCalendar();
        }

        function selectCalendarDate(year, month, day) {
            selectedDate = new Date(year, month, day);
            const formattedDisplay = selectedDate.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
            const yyyy = selectedDate.getFullYear();
            const mm = String(selectedDate.getMonth() + 1).padStart(2, '0');
            const dd = String(selectedDate.getDate()).padStart(2, '0');
            const isoVal = `${yyyy}-${mm}-${dd}`;

            const dateDisplayEl = document.getElementById('date-display-val');
            const dateInputEl = document.getElementById('dt');
            if (dateDisplayEl) dateDisplayEl.textContent = formattedDisplay;
            if (dateInputEl) dateInputEl.value = isoVal;

            renderCalendar();
            closeAllDropdowns();
        }

        function selectPresetDate(daysAhead) {
            const target = new Date(todayDate);
            target.setDate(target.getDate() + daysAhead);
            calYear = target.getFullYear();
            calMonth = target.getMonth();
            selectCalendarDate(target.getFullYear(), target.getMonth(), target.getDate());
        }

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.custom-dropdown-field')) {
                closeAllDropdowns();
            }
            if (!e.target.closest('.nav-drop')) {
                closeAllNavDropdowns();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeAllDropdowns();
                closeAllNavDropdowns();
                closeMobileMenu();
            }
        });
    </script>

    <x-whatsapp-float />
</body>
</html>
