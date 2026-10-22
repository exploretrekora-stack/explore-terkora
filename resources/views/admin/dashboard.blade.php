@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<style>
    /* ── Dashboard Custom Styling (Rich Animated Design with 100% Real Live Data) ── */
    :root {
        --dash-card: #ffffff;
        --dash-ink: #0f2b2a;
        --dash-mute: #6b7f7d;
        --dash-line: #e3ecea;
        --dash-pri: #0f766e;
        --dash-pri2: #14b8a6;
        --dash-soft: #d8f3ef;
        --dash-dark: #123f3c;
        --dash-star: #f59e0b;
    }

    .dash-header-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 22px;
    }

    .dash-header-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--dash-ink);
        letter-spacing: -0.02em;
        margin: 0;
    }

    .dash-header-subtitle {
        margin: 4px 0 0;
        color: var(--dash-mute);
        font-size: 13.5px;
    }

    .btn-replay-anim {
        font: inherit;
        cursor: pointer;
        border: 1px solid var(--dash-line);
        background: #ffffff;
        color: var(--dash-ink);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.04);
        transition: transform 0.18s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.18s, background 0.18s;
    }

    .btn-replay-anim:hover {
        transform: translateY(-2px);
        background: #fafcfb;
        box-shadow: 0 4px 12px rgba(15, 118, 110, 0.12);
    }

    .dash-grid {
        display: grid;
        gap: 16px;
    }

    .dash-grid.kpi-grid {
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        margin-bottom: 16px;
    }

    .dash-grid.two-col {
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        margin-top: 16px;
    }

    .dash-card {
        background: var(--dash-card);
        border: 1px solid var(--dash-line);
        border-radius: 16px;
        padding: 20px;
        transition: transform 0.28s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.28s;
        box-shadow: 0 1px 3px rgba(0,0,0,0.02);
    }

    .dash-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px -14px rgba(15, 118, 110, 0.35);
    }

    .rise {
        opacity: 0;
        transform: translateY(22px);
        animation: rise 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }

    @keyframes rise {
        to {
            opacity: 1;
            transform: none;
        }
    }

    /* ── Hero Welcome Banner ── */
    .hero-banner {
        background: linear-gradient(120deg, var(--dash-dark), var(--dash-pri));
        color: #ffffff;
        border: 0;
        position: relative;
        overflow: hidden;
        margin-bottom: 18px;
        padding: 22px 24px;
        border-radius: 16px;
    }

    .hero-banner::after {
        content: "";
        position: absolute;
        right: -60px;
        top: -60px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        animation: heroPulse 4s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes heroPulse {
        50% {
            transform: scale(1.25);
            opacity: 0.5;
        }
    }

    .hero-banner h2 {
        margin: 0 0 6px;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hero-banner p {
        margin: 0;
        opacity: 0.9;
        font-size: 14px;
        line-height: 1.5;
    }

    .hero-banner b {
        font-weight: 700;
        color: #d8f3ef;
    }

    /* ── Floating Icons & KPI Numbers ── */
    .kpi-grid .dash-card .ic {
        font-size: 24px;
        display: inline-block;
        animation: iconFloat 3s ease-in-out infinite;
        line-height: 1;
    }

    @keyframes iconFloat {
        50% {
            transform: translateY(-4px);
        }
    }

    .dash-num {
        font-size: 30px;
        font-weight: 700;
        margin: 8px 0 2px;
        color: var(--dash-ink);
        letter-spacing: -0.02em;
    }

    .dash-lbl {
        font-size: 13px;
        color: var(--dash-mute);
        font-weight: 500;
    }

    .dash-section-title {
        margin: 0 0 16px;
        font-size: 16px;
        font-weight: 700;
        color: var(--dash-ink);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dash-section-link {
        font-size: 12.5px;
        font-weight: 600;
        color: var(--dash-pri);
        text-decoration: none;
        transition: opacity 0.15s;
    }

    .dash-section-link:hover {
        opacity: 0.8;
        text-decoration: underline;
    }

    /* ── Vertical Bars (Inquiries per day) ── */
    .bars-chart {
        display: flex;
        align-items: flex-end;
        gap: 14px;
        height: 175px;
        padding-top: 14px;
    }

    .bar-col {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
        height: 100%;
        font-size: 11.5px;
        color: var(--dash-mute);
        gap: 6px;
        min-width: 0;
    }

    .bar-col b {
        font-size: 12px;
        font-weight: 700;
        color: var(--dash-ink);
    }

    .bar-col i {
        width: 100%;
        max-width: 46px;
        border-radius: 8px 8px 0 0;
        background: linear-gradient(var(--dash-pri2), var(--dash-pri));
        height: 0;
        transition: height 1.2s cubic-bezier(0.2, 0.8, 0.2, 1);
        min-height: 4px;
    }

    /* ── Horizontal Progress Tracks ── */
    .stat-row {
        margin: 12px 0;
    }

    .stat-row-info {
        display: flex;
        justify-content: space-between;
        font-size: 13px;
        margin-bottom: 6px;
        color: var(--dash-ink);
    }

    .stat-row-info b {
        font-weight: 600;
    }

    .stat-track {
        height: 8px;
        background: var(--dash-soft);
        border-radius: 8px;
        overflow: hidden;
    }

    .stat-track i {
        display: block;
        height: 100%;
        width: 0;
        background: linear-gradient(90deg, var(--dash-pri2), var(--dash-pri));
        border-radius: 8px;
        transition: width 1.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    /* ── Table Styling ── */
    .dash-scroll-table {
        overflow-x: auto;
        margin: 0 -4px;
    }

    .dash-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        min-width: 620px;
    }

    .dash-table th {
        text-align: left;
        font-size: 11px;
        letter-spacing: 0.06em;
        color: var(--dash-mute);
        padding: 10px 8px;
        border-bottom: 1px solid var(--dash-line);
        font-weight: 700;
        text-transform: uppercase;
    }

    .dash-table td {
        padding: 12px 8px;
        border-bottom: 1px solid var(--dash-line);
        color: var(--dash-ink);
        vertical-align: middle;
    }

    .dash-table tbody tr {
        transition: background 0.18s;
    }

    .dash-table tbody tr:hover {
        background: var(--dash-soft);
    }

    .dash-tag {
        background: var(--dash-soft);
        color: var(--dash-pri);
        padding: 4px 10px;
        border-radius: 99px;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
        display: inline-block;
    }

    /* ── Customer Reviews & Circular Ring ── */
    .dash-rev-row {
        padding: 12px 0;
        border-bottom: 1px solid var(--dash-line);
        font-size: 13px;
    }

    .dash-rev-row:last-child {
        border-bottom: 0;
    }

    .dash-rev-row b {
        font-size: 13.5px;
        color: var(--dash-ink);
    }

    .dash-stars {
        color: var(--dash-star);
        letter-spacing: 2px;
        float: right;
        font-size: 13px;
    }

    .dash-rev-quote {
        color: var(--dash-mute);
        margin-top: 4px;
        font-style: italic;
        line-height: 1.45;
    }

    .dash-ring-wrap {
        display: flex;
        align-items: center;
        gap: 18px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--dash-line);
        margin-bottom: 10px;
    }

    .dash-ring-wrap svg {
        transform: rotate(-90deg);
        flex-shrink: 0;
    }

    .dash-ring-wrap circle {
        fill: none;
        stroke-width: 12;
        stroke-linecap: round;
    }

    .dash-ring-wrap .ring-bg {
        stroke: var(--dash-soft);
    }

    .dash-ring-wrap .ring-fg {
        stroke: var(--dash-pri);
        stroke-dasharray: 314;
        stroke-dashoffset: 314;
        transition: stroke-dashoffset 1.6s cubic-bezier(0.2, 0.8, 0.2, 1);
    }

    @media (max-width: 768px) {
        .dash-grid.two-col {
            grid-template-columns: 1fr;
        }

        .bars-chart {
            gap: 8px;
        }
    }
</style>

<div id="dashboard-root">
    {{-- Header --}}
    <div class="dash-header-row">
        <div>
            <h1 class="dash-header-title">Dashboard</h1>
            <p class="dash-header-subtitle">Live overview of inquiries, travel statistics and reviews.</p>
        </div>
        <button type="button" id="replay" class="btn-replay-anim" title="Replay animations">
            ↻ Replay animation
        </button>
    </div>

    {{-- Hero Welcome Card with Real Database Figures --}}
    <div class="dash-card hero-banner rise">
        <h2>Welcome back 👋</h2>
        <p>You have <b id="hi" class="count-target" data-n="{{ $totalInquiries }}" data-d="0">{{ $totalInquiries }}</b> inquiries from <b id="ht" class="count-target" data-n="{{ $totalTravelers }}" data-d="0">{{ $totalTravelers }}</b> travellers waiting for a reply.</p>
    </div>

    {{-- 6 Real KPI Cards --}}
    <div class="dash-grid kpi-grid" id="kpis">
        <div class="dash-card rise" style="animation-delay: 0.08s">
            <span class="ic">💬</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ $totalInquiries }}" data-d="0">{{ $totalInquiries }}</span></div>
            <div class="dash-lbl">Total Inquiries</div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.14s">
            <span class="ic">🧳</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ $totalTravelers }}" data-d="0">{{ $totalTravelers }}</span></div>
            <div class="dash-lbl">Travellers Enquired</div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.20s">
            <span class="ic">🎒</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ (int) $travelStats->happy_travelers }}" data-d="0">{{ $travelStats->happy_travelers }}</span>+</div>
            <div class="dash-lbl">Happy Travelers</div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.26s">
            <span class="ic">⭐</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ (float) $travelStats->average_rating }}" data-d="1">{{ number_format($travelStats->average_rating, 1) }}</span></div>
            <div class="dash-lbl">Average Rating</div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.32s">
            <span class="ic">🏆</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ (int) $travelStats->years_of_experience }}" data-d="0">{{ $travelStats->years_of_experience }}</span>+</div>
            <div class="dash-lbl">Years of Experience</div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.38s">
            <span class="ic">👥</span>
            <div class="dash-num"><span class="kpi-num count-target" data-n="{{ (int) $travelStats->team_members }}" data-d="0">{{ $travelStats->team_members }}</span></div>
            <div class="dash-lbl">Team Members</div>
        </div>
    </div>

    {{-- Two Column Grid 1: Real Inquiries per Day & Real Popular Destinations --}}
    <div class="dash-grid two-col">
        <div class="dash-card rise" id="inq" style="animation-delay: 0.45s">
            <div class="dash-section-title">
                <span>💬 Inquiries per day</span>
                <a href="{{ route('admin.inquiries') }}" class="dash-section-link">View all →</a>
            </div>
            <div class="bars-chart" id="bars">
                @php
                    $maxBarVal = max(1, ...array_values($inquiriesPerDay));
                @endphp
                @foreach ($inquiriesPerDay as $day => $val)
                    <div class="bar-col">
                        <b>{{ $val }}</b>
                        <i class="bar-fill" data-h="{{ max(6, round(($val / $maxBarVal) * 100)) }}" style="height: 0%"></i>
                        <span>{{ $day }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="dash-card rise" style="animation-delay: 0.55s">
            <div class="dash-section-title">
                <span>📍 Popular destinations</span>
                <a href="{{ route('destinations') }}" target="_blank" class="dash-section-link">Explore site ↗</a>
            </div>
            <div id="dest">
                @php
                    $maxDestTravellers = $topDestinations->max('travellers') ?: 1;
                @endphp
                @forelse ($topDestinations as $dest)
                    @php
                        $travellersCount = (int) ($dest->travellers ?: $dest->total);
                        $pct = round(($travellersCount / $maxDestTravellers) * 100);
                    @endphp
                    <div class="stat-row">
                        <div class="stat-row-info">
                            <span>{{ $dest->destinations }}</span>
                            <b>{{ $travellersCount }} pax <span style="font-size:11.5px;color:var(--dash-mute);font-weight:400">({{ $dest->total }} {{ Str::plural('inquiry', $dest->total) }})</span></b>
                        </div>
                        <div class="stat-track">
                            <i class="track-fill" data-w="{{ $pct }}" style="width: 0%"></i>
                        </div>
                    </div>
                @empty
                    <div style="padding:24px 0;text-align:center;color:var(--dash-mute);font-size:13px">
                        No destination inquiries recorded yet.
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Latest Inquiries Table from Real Database Records --}}
    <div class="dash-card rise" style="margin-top: 16px; animation-delay: 0.65s">
        <div class="dash-section-title">
            <span>Latest inquiries</span>
            <a href="{{ route('admin.inquiries') }}" class="dash-section-link">View all inquiries →</a>
        </div>
        <div class="dash-scroll-table">
            <table class="dash-table">
                <thead>
                    <tr>
                        <th style="width: 45px">#</th>
                        <th>NAME</th>
                        <th>DESTINATION</th>
                        <th>TRAVEL DATE</th>
                        <th>TRAVELLERS</th>
                        <th>RECEIVED</th>
                        <th style="text-align: right; width: 60px">ACTION</th>
                    </tr>
                </thead>
                <tbody id="tb">
                    @forelse ($recentInquiries as $inquiry)
                        <tr>
                            <td style="color:#9ca3af;font-weight:600">#{{ $inquiry->id }}</td>
                            <td>
                                <b>{{ $inquiry->name }}</b>
                                @if ($inquiry->email)
                                    <div style="font-size:11.5px;color:var(--dash-mute)">{{ $inquiry->email }}</div>
                                @endif
                            </td>
                            <td><span class="dash-tag">{{ $inquiry->destinations ?: 'General Inquiry' }}</span></td>
                            <td>{{ $inquiry->date ? ($inquiry->date instanceof \DateTimeInterface ? $inquiry->date->format('d M Y') : (string) $inquiry->date) : 'Flexible' }}</td>
                            <td><b>{{ (int) ($inquiry->number_of_travellers ?: 1) }}</b> travellers</td>
                            <td style="color:var(--dash-mute)">{{ $inquiry->created_at->format('d M Y') }}</td>
                            <td style="text-align:right">
                                <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="dash-section-link" style="font-weight:600">View →</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align:center;padding:28px;color:var(--dash-mute);font-size:13.5px">
                                No inquiries received yet. Visitors can enquire from the website contact forms.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Two Column Grid 2: Live Travel Statistics & Live Customer Reviews --}}
    <div class="dash-grid two-col" id="stat">
        <div class="dash-card rise" style="animation-delay: 0.75s">
            <div class="dash-section-title">
                <span>📊 Travel statistics</span>
                <a href="{{ route('admin.travel-stats') }}" class="dash-section-link">Manage statistics →</a>
            </div>
            <div id="st">
                @php
                    $statsList = [
                        ['🎒', 'Happy Travelers', (int) $travelStats->happy_travelers, '+', 300],
                        ['⭐', 'Average Rating', (float) $travelStats->average_rating, ' / 5', 5],
                        ['🏆', 'Years of Experience', (int) $travelStats->years_of_experience, '+', 5],
                        ['👥', 'Team Members', (int) $travelStats->team_members, '', 6],
                        ['🗺️', 'Trips Completed', (int) $travelStats->trips_completed, '+', 50],
                        ['💬', 'Verified Reviews', (int) $travelStats->verified_reviews, '+', 120],
                    ];
                @endphp
                @foreach ($statsList as $item)
                    @php
                        $statPct = $item[1] === 'Average Rating'
                            ? round(($item[2] / 5) * 100)
                            : min(100, max(8, round(($item[2] / $item[4]) * 100)));
                    @endphp
                    <div class="stat-row">
                        <div class="stat-row-info">
                            <span>{{ $item[0] }} {{ $item[1] }}</span>
                            <b>{{ $item[2] }}{{ $item[3] }}</b>
                        </div>
                        <div class="stat-track">
                            <i class="track-fill" data-w="{{ $statPct }}" style="width: 0%"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="dash-card rise" id="rev" style="animation-delay: 0.85s">
            <div class="dash-section-title">
                <span>⭐ Customer reviews</span>
                <a href="{{ route('admin.reviews.index') }}" class="dash-section-link">Manage reviews →</a>
            </div>

            <div class="dash-ring-wrap">
                <svg width="110" height="110" viewBox="0 0 120 120">
                    <circle class="ring-bg" cx="60" cy="60" r="50"></circle>
                    <circle class="ring-fg" id="fg" cx="60" cy="60" r="50" style="stroke-dashoffset: 314"></circle>
                </svg>
                <div>
                    <div class="dash-num" style="margin: 0">{{ $averageRatingFormatted }} / 5</div>
                    <div class="dash-lbl">{{ $reviewsCount }} {{ Str::plural('review', $reviewsCount) }} · active shown</div>
                </div>
            </div>

            <div id="rl">
                @forelse ($recentReviews as $rev)
                    <div class="dash-rev-row">
                        <span class="dash-stars">{{ str_repeat('★', (int) $rev->rating) }}{{ str_repeat('☆', 5 - (int) $rev->rating) }}</span>
                        <b>{{ $rev->name }}</b> <span class="dash-tag" style="margin-left:6px">📍 {{ $rev->destination }}</span>
                        <div class="dash-rev-quote">“{{ Str::limit($rev->review, 100) }}”</div>
                    </div>
                @empty
                    <div style="padding:16px 0;text-align:center;color:var(--dash-mute);font-size:13px">
                        No customer reviews available yet.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<script>
    const avgRatingVal = {{ (float) $averageRatingFormatted }};
    const $ = id => document.getElementById(id);

    function countUp(el, to, dec) {
        if (!el) return;
        const t0 = performance.now();
        (function f(t) {
            const p = Math.min((t - t0) / 1400, 1);
            const e = 1 - Math.pow(1 - p, 3);
            el.textContent = (to * e).toFixed(dec);
            if (p < 1) requestAnimationFrame(f);
        })(t0);
    }

    function animateDashboard() {
        // Animate rolling number counters
        document.querySelectorAll(".count-target").forEach(el => {
            const n = parseFloat(el.dataset.n || 0);
            const d = parseInt(el.dataset.d || 0, 10);
            countUp(el, n, d);
        });

        // Reset progress widths & heights
        document.querySelectorAll(".bar-fill").forEach(e => {
            e.style.height = "0%";
        });
        document.querySelectorAll(".track-fill").forEach(e => {
            e.style.width = "0%";
        });

        const ringFg = $("fg");
        if (ringFg) {
            ringFg.style.strokeDashoffset = "314";
        }

        // Animate up smoothly
        setTimeout(() => {
            document.querySelectorAll(".bar-fill").forEach(e => {
                e.style.height = (e.dataset.h || 0) + "%";
            });
            document.querySelectorAll(".track-fill").forEach(e => {
                e.style.width = (e.dataset.w || 0) + "%";
            });
            if (ringFg) {
                const ratio = Math.min(1, Math.max(0, avgRatingVal / 5));
                ringFg.style.strokeDashoffset = 314 * (1 - ratio);
            }
        }, 280);
    }

    // Run animations on initial page load
    document.addEventListener("DOMContentLoaded", () => {
        animateDashboard();
    });
    if (document.readyState === "complete" || document.readyState === "interactive") {
        animateDashboard();
    }

    // Replay animation button click
    const replayBtn = $("replay");
    if (replayBtn) {
        replayBtn.onclick = () => {
            document.querySelectorAll(".rise").forEach(e => {
                e.style.animation = "none";
                e.offsetHeight; // force reflow
                e.style.animation = "";
            });
            animateDashboard();
        };
    }
</script>
@endsection
