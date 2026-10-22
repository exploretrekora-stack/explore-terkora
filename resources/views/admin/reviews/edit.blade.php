@extends('admin.layout')

@section('title', 'Edit Review')

@section('content')
<style>
    .form-card {
        background: var(--white);
        border: 1.5px solid var(--border);
        border-radius: var(--radius);
        padding: 28px;
        max-width: 760px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .form-label {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--text);
    }

    .form-input,
    .form-textarea,
    .form-select {
        width: 100%;
        padding: 10px 14px;
        border: 1.5px solid var(--border);
        border-radius: 9px;
        font-size: 14px;
        font-family: inherit;
        background: #f8fafc;
        color: var(--text);
        outline: none;
        transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
    }

    .form-input:focus,
    .form-textarea:focus,
    .form-select:focus {
        border-color: var(--accent);
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(15, 139, 134, 0.12);
    }

    .form-textarea {
        resize: vertical;
        min-height: 110px;
        line-height: 1.5;
    }

    .form-hint {
        font-size: 12px;
        color: var(--text-muted);
    }

    .form-actions-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px solid var(--border-light);
    }

    .btn-submit-form {
        background: var(--primary);
        color: #ffffff;
        padding: 10px 22px;
        border-radius: 9px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: background 0.15s, transform 0.15s;
    }

    .btn-submit-form:hover {
        background: var(--primary-hover);
        transform: translateY(-1px);
    }

    .btn-cancel-form {
        color: var(--text-muted);
        padding: 10px 16px;
        border-radius: 9px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.15s, color 0.15s;
    }

    .btn-cancel-form:hover {
        background: #f1f5f9;
        color: var(--text);
    }
</style>

<div class="page-header-row">
    <div>
        <a href="{{ route('admin.reviews.index') }}" class="link-view" style="margin-bottom:8px;display:inline-flex">
            ← Back to all reviews
        </a>
        <h1 class="page-title">Edit Review #{{ $review->id }}</h1>
        <p class="page-subtitle">Update reviewer name, destination, or testimonial quote.</p>
    </div>
</div>

<div class="form-card">
    <form method="POST" action="{{ route('admin.reviews.update', $review) }}">
        @csrf
        @method('PUT')

        {{-- Reviewer Name --}}
        <div class="form-group">
            <label for="name" class="form-label">Reviewer Name <span style="color:#ef4444">*</span></label>
            <input
                type="text"
                name="name"
                id="name"
                class="form-input"
                placeholder="e.g. Aarav Sharma"
                value="{{ old('name', $review->name) }}"
                required
                maxlength="120"
                autofocus
            >
            <span class="form-hint">The full name of the customer or traveler.</span>
            @error('name')
                <span class="field-error-msg">{{ $message }}</span>
            @enderror
        </div>

        {{-- Destination / Trip --}}
        <div class="form-group">
            <label for="destination" class="form-label">Destination / Trip Name <span style="color:#ef4444">*</span></label>
            <select
                name="destination"
                id="destination"
                class="form-select"
                required
            >
                <option value="">-- Select Destination / Trip --</option>
                @foreach (\App\Models\Review::availableDestinations() as $dest)
                    <option value="{{ $dest }}" @selected(old('destination', $review->destination) === $dest)>{{ $dest }}</option>
                @endforeach
                @if ($review->destination && !in_array($review->destination, \App\Models\Review::availableDestinations()))
                    <option value="{{ $review->destination }}" selected>{{ $review->destination }} (Current)</option>
                @endif
            </select>
            <span class="form-hint">Choose the destination or tour taken by the reviewer.</span>
            @error('destination')
                <span class="field-error-msg">{{ $message }}</span>
            @enderror
        </div>

        {{-- Review Content --}}
        <div class="form-group">
            <label for="review" class="form-label">Review / Customer Story <span style="color:#ef4444">*</span></label>
            <textarea
                name="review"
                id="review"
                class="form-textarea"
                placeholder="Write the customer's testimonial or feedback quote..."
                required
                rows="4"
            >{{ old('review', $review->review) }}</textarea>
            <span class="form-hint">The quote displayed in the testimonial carousel card.</span>
            @error('review')
                <span class="field-error-msg">{{ $message }}</span>
            @enderror
        </div>

        {{-- Rating & Sort Order Row --}}
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
            <div class="form-group">
                <label for="rating" class="form-label">Rating</label>
                <select name="rating" id="rating" class="form-select">
                    <option value="5" {{ old('rating', $review->rating) == 5 ? 'selected' : '' }}>5 Stars ★★★★★</option>
                    <option value="4" {{ old('rating', $review->rating) == 4 ? 'selected' : '' }}>4 Stars ★★★★☆</option>
                    <option value="3" {{ old('rating', $review->rating) == 3 ? 'selected' : '' }}>3 Stars ★★★☆☆</option>
                </select>
                @error('rating')
                    <span class="field-error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="sort_order" class="form-label">Display Order</label>
                <input
                    type="number"
                    name="sort_order"
                    id="sort_order"
                    class="form-input"
                    placeholder="0"
                    value="{{ old('sort_order', $review->sort_order) }}"
                    min="0"
                >
                <span class="form-hint">Lower numbers display first.</span>
                @error('sort_order')
                    <span class="field-error-msg">{{ $message }}</span>
                @enderror
            </div>
        </div>

        {{-- Active Status --}}
        <div class="form-group" style="margin-top:10px">
            <label style="display:flex;align-items:center;gap:10px;cursor:pointer">
                <input
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ old('is_active', $review->is_active) ? 'checked' : '' }}
                    style="width:18px;height:18px;accent-color:var(--accent)"
                >
                <span style="font-size:14px;font-weight:600;color:var(--text)">Show this review on website (Active)</span>
            </label>
        </div>

        {{-- Form Actions --}}
        <div class="form-actions-row">
            <button type="submit" class="btn-submit-form">
                Update Review
            </button>
            <a href="{{ route('admin.reviews.index') }}" class="btn-cancel-form">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
