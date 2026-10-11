@props([
    'block' => false,
])

<a href="{{ route('destinations') }}" {{ $attributes->class(['start-exploring', 'start-exploring-block' => $block]) }}>
    <span class="start-exploring-plane" aria-hidden="true">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
            <path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 0 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"></path>
        </svg>
    </span>
    <span class="start-exploring-label">Explore Destinations</span>
    <span class="start-exploring-arrow" aria-hidden="true">
        <svg viewBox="0 0 16 16" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 8h10M9 4l4 4-4 4"/>
        </svg>
    </span>
    <span class="start-exploring-trail" aria-hidden="true"></span>
</a>
