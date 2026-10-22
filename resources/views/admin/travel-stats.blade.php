@extends('admin.layout')

@section('title', 'Travel Statistics')

@section('content')
<style>
    .stats-form-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
        flex-wrap: wrap;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .btn-stat-action {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px;
        border-radius: 9px;
        font-size: 13.5px;
        font-family: inherit;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
        border: none;
        white-space: nowrap;
    }

    .btn-save-stats {
        background: var(--primary);
        color: #ffffff;
        box-shadow: 0 2px 6px rgba(10, 55, 54, 0.25);
    }

    .btn-save-stats:hover:not(:disabled) {
        background: var(--primary-hover);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(10, 55, 54, 0.32);
    }

    .btn-save-stats:disabled {
        opacity: 0.55;
        cursor: not-allowed;
        box-shadow: none;
        transform: none;
    }

    .btn-reset-stats {
        background: var(--white);
        color: var(--text);
        border: 1.5px solid var(--border);
    }

    .btn-reset-stats:hover {
        background: #f1f5f9;
        border-color: #cbd5e1;
    }

    .stats-sync-banner {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        background: linear-gradient(135deg, #f0fdfa 0%, #e6f7f5 100%);
        border: 1px solid rgba(15, 139, 134, 0.28);
        border-radius: var(--radius);
        padding: 14px 18px;
        margin-bottom: 24px;
        color: #064e4b;
        font-size: 13px;
        line-height: 1.5;
    }

    .stats-sync-banner svg {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        color: var(--accent);
        margin-top: 2px;
    }

    .stats-edit-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    @media (max-width: 640px) {
        .stats-edit-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
    }

    .stat-editor-card {
        background: var(--white);
        border: 1.5px solid var(--border);
        border-radius: var(--radius);
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 16px;
        transition: border-color 0.2s, box-shadow 0.2s;
        position: relative;
    }

    .stat-editor-card:hover {
        border-color: #cbd5e1;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
    }

    .stat-editor-card.has-change {
        border-color: var(--accent);
        background: #fcfffe;
    }

    .card-top-info {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .card-header-line {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }

    .stat-field-label {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--text);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .stat-badge-saved {
        font-size: 11px;
        font-weight: 600;
        color: #475569;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        padding: 2px 7px;
        border-radius: 6px;
        white-space: nowrap;
    }

    .stat-badge-changed {
        display: none;
        font-size: 10.5px;
        font-weight: 700;
        color: #0d9488;
        background: #ccfbf1;
        border: 1px solid #99f6e4;
        padding: 2px 7px;
        border-radius: 6px;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    .has-change .stat-badge-changed {
        display: inline-block;
    }

    .stat-field-desc {
        font-size: 12.5px;
        color: var(--text-muted);
        line-height: 1.45;
    }

    /* Stepper Controls */
    .stepper-wrap {
        display: flex;
        align-items: center;
        border: 1.5px solid var(--border);
        border-radius: 10px;
        overflow: hidden;
        background: #ffffff;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .stepper-wrap:focus-within {
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(15, 139, 134, 0.12);
    }

    .btn-step {
        width: 44px;
        height: 44px;
        background: #f8fafc;
        border: none;
        color: var(--text);
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: background 0.15s, color 0.15s;
        flex-shrink: 0;
        user-select: none;
    }

    .btn-step:hover {
        background: #e2e8f0;
        color: var(--primary);
    }

    .btn-step:active {
        background: #cbd5e1;
    }

    .btn-step-minus {
        border-right: 1px solid var(--border);
    }

    .btn-step-plus {
        border-left: 1px solid var(--border);
    }

    .stepper-input {
        flex: 1;
        min-width: 0;
        height: 44px;
        border: none;
        outline: none;
        text-align: center;
        font-family: inherit;
        font-size: 17px;
        font-weight: 700;
        color: var(--primary);
        background: transparent;
        padding: 0 10px;
        -moz-appearance: textfield;
    }

    .stepper-input::-webkit-outer-spin-button,
    .stepper-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Live Preview Section */
    .stat-preview-box {
        background: #f8fafc;
        border: 1px solid var(--border-light);
        border-radius: 8px;
        padding: 10px 14px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .preview-header-label {
        font-size: 11px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .preview-val-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13.5px;
        font-weight: 700;
        color: var(--primary);
    }

    .preview-val-pill .chip-val {
        color: var(--accent-dark);
        background: #e6f7f5;
        padding: 2px 8px;
        border-radius: 6px;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .field-error-msg {
        font-size: 12px;
        color: #dc2626;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .status-floating-bar {
        position: sticky;
        bottom: 20px;
        background: rgba(10, 55, 54, 0.94);
        backdrop-filter: blur(10px);
        color: #ffffff;
        border-radius: 14px;
        padding: 12px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        box-shadow: 0 10px 30px rgba(10, 55, 54, 0.35);
        z-index: 80;
        margin-top: 10px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    @media (max-width: 640px) {
        .status-floating-bar {
            bottom: calc(var(--bottom-nav-h) + 12px);
            flex-direction: column;
            align-items: stretch;
            padding: 12px 14px;
            gap: 10px;
        }

        .status-floating-bar .header-actions {
            width: 100%;
            justify-content: space-between;
        }

        .status-floating-bar .btn-stat-action {
            flex: 1;
            justify-content: center;
        }
    }
</style>

<div class="stats-form-header">
    <div>
        <h1 class="page-title">Travel Statistics</h1>
        <p class="page-subtitle">Manage all 6 statistical figures displayed live across the website.</p>
    </div>
    <div class="header-actions">
        <button type="button" class="btn-stat-action btn-reset-stats" id="topResetBtn" onclick="resetFormToSaved()">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
            <span>Reset Changes</span>
        </button>
        <button type="button" class="btn-stat-action btn-save-stats" id="topSaveBtn" onclick="submitStatsForm()" disabled>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
            <span id="saveBtnText">Save Changes</span>
        </button>
    </div>
</div>

{{-- Single Source of Truth Synchronization Guarantee --}}
<div class="stats-sync-banner">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/>
    </svg>
    <div>
        <strong>Synchronized Source of Truth:</strong>
        Editing <strong>Years of Experience</strong> automatically syncs both website locations simultaneously:
        the <em>Experience Badge</em> (<code><span class="sync-exp-badge">{{ $travelStats->years_of_experience }}+</span> Years of experience</code>) and the <em>Success Story Section</em> (<code><span class="sync-exp-story">{{ $travelStats->years_of_experience }}+</span> years of trips travelers trust</code>).
    </div>
</div>

<form method="POST" action="{{ route('admin.travel-stats.update') }}" id="travelStatsForm">
    @csrf

    <div class="stats-edit-grid">
        {{-- 1. Happy Travelers --}}
        <div class="stat-editor-card" id="card-happy_travelers">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="happy_travelers" class="stat-field-label">
                        <span>🎒 Happy Travelers</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ $travelStats->happy_travelers }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Total traveler count displayed in the hero section and avatar bubble.</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepStat('happy_travelers', -5, 0)" aria-label="Decrease happy travelers">−</button>
                    <input
                        type="number"
                        name="happy_travelers"
                        id="happy_travelers"
                        class="stepper-input"
                        value="{{ old('happy_travelers', $travelStats->happy_travelers) }}"
                        data-original="{{ $travelStats->happy_travelers }}"
                        min="0"
                        max="10000000"
                        step="1"
                        required
                        oninput="onStatChange('happy_travelers')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepStat('happy_travelers', 5, 0)" aria-label="Increase happy travelers">+</button>
                </div>
                @error('happy_travelers')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Website Display Preview</span>
                <div class="preview-val-pill">
                    <span class="chip-val" id="prev-happy_travelers">{{ old('happy_travelers', $travelStats->happy_travelers) }}+</span>
                    <span>Happy travelers</span>
                </div>
            </div>
        </div>

        {{-- 2. Average Rating --}}
        <div class="stat-editor-card" id="card-average_rating">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="average_rating" class="stat-field-label">
                        <span>⭐ Average Rating</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ number_format($travelStats->average_rating, 1) }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Customer satisfaction score displayed in hero rating display (0.0 – 5.0).</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepDecimal('average_rating', -0.1, 0, 5.0)" aria-label="Decrease rating">−</button>
                    <input
                        type="number"
                        name="average_rating"
                        id="average_rating"
                        class="stepper-input"
                        value="{{ old('average_rating', number_format($travelStats->average_rating, 1)) }}"
                        data-original="{{ number_format($travelStats->average_rating, 1) }}"
                        min="0"
                        max="5.0"
                        step="0.1"
                        required
                        oninput="onStatChange('average_rating')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepDecimal('average_rating', 0.1, 0, 5.0)" aria-label="Increase rating">+</button>
                </div>
                @error('average_rating')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Website Display Preview</span>
                <div class="preview-val-pill">
                    <span class="chip-val" id="prev-average_rating">{{ old('average_rating', number_format($travelStats->average_rating, 1)) }} / 5</span>
                    <span>Average rating</span>
                </div>
            </div>
        </div>

        {{-- 3. Years of Experience (Single Source of Truth) --}}
        <div class="stat-editor-card" id="card-years_of_experience" style="border-color:rgba(15, 139, 134, 0.4);">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="years_of_experience" class="stat-field-label">
                        <span>🏆 Years of Experience</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ $travelStats->years_of_experience }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Central single source of truth for both Experience badge and Success story heading.</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepStat('years_of_experience', -1, 0)" aria-label="Decrease years of experience">−</button>
                    <input
                        type="number"
                        name="years_of_experience"
                        id="years_of_experience"
                        class="stepper-input"
                        value="{{ old('years_of_experience', $travelStats->years_of_experience) }}"
                        data-original="{{ $travelStats->years_of_experience }}"
                        min="0"
                        max="100"
                        step="1"
                        required
                        oninput="onStatChange('years_of_experience')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepStat('years_of_experience', 1, 0)" aria-label="Increase years of experience">+</button>
                </div>
                @error('years_of_experience')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Synchronized Dual Previews</span>
                <div style="display:flex;flex-direction:column;gap:4px">
                    <div class="preview-val-pill" style="font-size:12.5px">
                        <span>Badge:</span>
                        <span class="chip-val" id="prev-exp-badge">{{ old('years_of_experience', $travelStats->years_of_experience) }}+</span>
                        <span>Years of experience</span>
                    </div>
                    <div class="preview-val-pill" style="font-size:12.5px">
                        <span>Heading:</span>
                        <span class="chip-val" id="prev-exp-story">{{ old('years_of_experience', $travelStats->years_of_experience) }}+</span>
                        <span>years of trips travelers trust</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- 4. Team Members --}}
        <div class="stat-editor-card" id="card-team_members">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="team_members" class="stat-field-label">
                        <span>👥 Team Members</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ $travelStats->team_members }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Dedicated trek leaders, local guides, and travel coordinators.</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepStat('team_members', -1, 0)" aria-label="Decrease team members">−</button>
                    <input
                        type="number"
                        name="team_members"
                        id="team_members"
                        class="stepper-input"
                        value="{{ old('team_members', $travelStats->team_members) }}"
                        data-original="{{ $travelStats->team_members }}"
                        min="0"
                        max="10000"
                        step="1"
                        required
                        oninput="onStatChange('team_members')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepStat('team_members', 1, 0)" aria-label="Increase team members">+</button>
                </div>
                @error('team_members')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Website Display Preview</span>
                <div class="preview-val-pill">
                    <span class="chip-val" id="prev-team_members">{{ old('team_members', $travelStats->team_members) }}</span>
                    <span>Team members</span>
                </div>
            </div>
        </div>

        {{-- 5. Trips Completed --}}
        <div class="stat-editor-card" id="card-trips_completed">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="trips_completed" class="stat-field-label">
                        <span>🗺️ Trips Completed</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ $travelStats->trips_completed }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Completed expeditions, spiritual yatras, and mountain circuits.</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepStat('trips_completed', -5, 0)" aria-label="Decrease trips completed">−</button>
                    <input
                        type="number"
                        name="trips_completed"
                        id="trips_completed"
                        class="stepper-input"
                        value="{{ old('trips_completed', $travelStats->trips_completed) }}"
                        data-original="{{ $travelStats->trips_completed }}"
                        min="0"
                        max="10000000"
                        step="1"
                        required
                        oninput="onStatChange('trips_completed')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepStat('trips_completed', 5, 0)" aria-label="Increase trips completed">+</button>
                </div>
                @error('trips_completed')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Website Display Preview</span>
                <div class="preview-val-pill">
                    <span class="chip-val" id="prev-trips_completed">{{ old('trips_completed', $travelStats->trips_completed) }}+</span>
                    <span>Trips completed</span>
                </div>
            </div>
        </div>

        {{-- 6. Verified Reviews --}}
        <div class="stat-editor-card" id="card-verified_reviews">
            <div class="card-top-info">
                <div class="card-header-line">
                    <label for="verified_reviews" class="stat-field-label">
                        <span>💬 Verified Reviews</span>
                    </label>
                    <div style="display:flex;gap:4px;align-items:center">
                        <span class="stat-badge-changed">Modified</span>
                        <span class="stat-badge-saved">Saved: {{ $travelStats->verified_reviews }}</span>
                    </div>
                </div>
                <p class="stat-field-desc">Real traveler testimonials and authenticated ratings.</p>
            </div>

            <div>
                <div class="stepper-wrap">
                    <button type="button" class="btn-step btn-step-minus" onclick="stepStat('verified_reviews', -5, 0)" aria-label="Decrease verified reviews">−</button>
                    <input
                        type="number"
                        name="verified_reviews"
                        id="verified_reviews"
                        class="stepper-input"
                        value="{{ old('verified_reviews', $travelStats->verified_reviews) }}"
                        data-original="{{ $travelStats->verified_reviews }}"
                        min="0"
                        max="10000000"
                        step="1"
                        required
                        oninput="onStatChange('verified_reviews')"
                    >
                    <button type="button" class="btn-step btn-step-plus" onclick="stepStat('verified_reviews', 5, 0)" aria-label="Increase verified reviews">+</button>
                </div>
                @error('verified_reviews')
                    <p class="field-error-msg" style="margin-top:6px">{{ $message }}</p>
                @enderror
            </div>

            <div class="stat-preview-box">
                <span class="preview-header-label">Website Display Preview</span>
                <div class="preview-val-pill">
                    <span class="chip-val" id="prev-verified_reviews">{{ old('verified_reviews', $travelStats->verified_reviews) }}+</span>
                    <span>Verified reviews</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Sticky Action Bar --}}
    <div class="status-floating-bar" id="statusFloatingBar">
        <div style="display:flex;align-items:center;gap:10px">
            <span id="changesStatusDot" style="display:inline-block;width:9px;height:9px;border-radius:50%;background:#34d399"></span>
            <span id="changesStatusText" style="font-size:13.5px;font-weight:600">All values match database</span>
        </div>
        <div class="header-actions">
            <button type="button" class="btn-stat-action btn-reset-stats" onclick="resetFormToSaved()">
                Reset
            </button>
            <button type="submit" class="btn-stat-action btn-save-stats" id="bottomSaveBtn" disabled>
                Save Changes
            </button>
        </div>
    </div>
</form>

<script>
    const statFields = [
        'happy_travelers',
        'average_rating',
        'years_of_experience',
        'team_members',
        'trips_completed',
        'verified_reviews'
    ];

    function stepStat(id, delta, minVal) {
        const input = document.getElementById(id);
        if (!input) return;

        let current = parseInt(input.value, 10);
        if (isNaN(current)) current = 0;

        let next = current + delta;
        if (typeof minVal === 'number' && next < minVal) next = minVal;

        input.value = next;
        onStatChange(id);
    }

    function stepDecimal(id, delta, minVal, maxVal) {
        const input = document.getElementById(id);
        if (!input) return;

        let current = parseFloat(input.value);
        if (isNaN(current)) current = 0.0;

        let next = Math.round((current + delta) * 10) / 10;
        if (typeof minVal === 'number' && next < minVal) next = minVal;
        if (typeof maxVal === 'number' && next > maxVal) next = maxVal;

        input.value = next.toFixed(1);
        onStatChange(id);
    }

    function onStatChange(id) {
        const input = document.getElementById(id);
        if (!input) return;

        updatePreviews(id, input.value);
        checkDirtyState();
    }

    function updatePreviews(id, val) {
        if (id === 'happy_travelers') {
            const el = document.getElementById('prev-happy_travelers');
            if (el) el.textContent = (val || '0') + '+';
        } else if (id === 'average_rating') {
            const el = document.getElementById('prev-average_rating');
            if (el) {
                const num = parseFloat(val);
                el.textContent = (!isNaN(num) ? num.toFixed(1) : '0.0') + ' / 5';
            }
        } else if (id === 'years_of_experience') {
            const v = (val || '0') + '+';
            const b = document.getElementById('prev-exp-badge');
            const s = document.getElementById('prev-exp-story');
            if (b) b.textContent = v;
            if (s) s.textContent = v;
            document.querySelectorAll('.sync-exp-badge, .sync-exp-story').forEach(el => el.textContent = v);
        } else if (id === 'team_members') {
            const el = document.getElementById('prev-team_members');
            if (el) el.textContent = val || '0';
        } else if (id === 'trips_completed') {
            const el = document.getElementById('prev-trips_completed');
            if (el) el.textContent = (val || '0') + '+';
        } else if (id === 'verified_reviews') {
            const el = document.getElementById('prev-verified_reviews');
            if (el) el.textContent = (val || '0') + '+';
        }
    }

    function checkDirtyState() {
        let isDirty = false;
        let changeCount = 0;

        statFields.forEach(id => {
            const input = document.getElementById(id);
            const card = document.getElementById('card-' + id);
            if (!input || !card) return;

            const original = input.getAttribute('data-original');
            let current = input.value;

            // Normalize decimals for comparison if needed
            if (id === 'average_rating') {
                const curNum = parseFloat(current);
                const origNum = parseFloat(original);
                if (!isNaN(curNum) && !isNaN(origNum) && curNum !== origNum) {
                    card.classList.add('has-change');
                    isDirty = true;
                    changeCount++;
                } else {
                    card.classList.remove('has-change');
                }
            } else {
                if (current.trim() !== original.trim()) {
                    card.classList.add('has-change');
                    isDirty = true;
                    changeCount++;
                } else {
                    card.classList.remove('has-change');
                }
            }
        });

        const topSave = document.getElementById('topSaveBtn');
        const bottomSave = document.getElementById('bottomSaveBtn');
        const statusDot = document.getElementById('changesStatusDot');
        const statusText = document.getElementById('changesStatusText');

        if (topSave) topSave.disabled = !isDirty;
        if (bottomSave) bottomSave.disabled = !isDirty;

        if (isDirty) {
            if (statusDot) statusDot.style.background = '#f59e0b';
            if (statusText) statusText.textContent = `${changeCount} unsaved modification${changeCount > 1 ? 's' : ''} (click Save Changes to apply)`;
        } else {
            if (statusDot) statusDot.style.background = '#34d399';
            if (statusText) statusText.textContent = 'All values match database';
        }
    }

    function resetFormToSaved() {
        statFields.forEach(id => {
            const input = document.getElementById(id);
            if (!input) return;
            const original = input.getAttribute('data-original');
            input.value = original;
            updatePreviews(id, original);
        });
        checkDirtyState();
    }

    function submitStatsForm() {
        const form = document.getElementById('travelStatsForm');
        if (form) form.submit();
    }

    document.addEventListener('DOMContentLoaded', function() {
        checkDirtyState();
    });
</script>
@endsection
