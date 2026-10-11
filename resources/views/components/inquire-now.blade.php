@props([
    'type' => 'button',
])

<button type="{{ $type }}" {{ $attributes->class(['inquire-now']) }}>
    <span class="inquire-now-mark" aria-hidden="true">
        <svg viewBox="0 0 24 24" width="16" height="16" fill="none">
            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"></circle>
            <path d="M14.7 9.3 13.05 13.05 9.3 14.7 10.95 10.95 14.7 9.3Z" fill="currentColor"></path>
        </svg>
    </span>
    <span class="inquire-now-label">Inquire Now</span>
    <span class="inquire-now-arrow" aria-hidden="true">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="M13 6l6 6-6 6"></path>
        </svg>
    </span>
</button>
