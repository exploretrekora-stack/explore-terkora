@extends('admin.layout')

@section('title', 'Customer Reviews')

@section('content')
<style>
    .reviews-header-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 24px;
        flex-wrap: wrap;
    }

    .btn-create-review {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--primary);
        color: #ffffff;
        padding: 9px 18px;
        border-radius: 9px;
        font-size: 13.5px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.15s, transform 0.15s;
        box-shadow: 0 2px 6px rgba(10, 55, 54, 0.2);
    }

    .btn-create-review:hover {
        background: var(--primary-hover);
        transform: translateY(-1px);
        color: #ffffff;
    }

    .review-quote-cell {
        max-width: 420px;
        line-height: 1.45;
        font-size: 13px;
        color: #374151;
    }

    .btn-action-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 7px;
        border: 1px solid var(--border);
        background: #ffffff;
        color: var(--text-muted);
        cursor: pointer;
        transition: all 0.15s;
        text-decoration: none;
    }

    .btn-action-icon:hover {
        border-color: #cbd5e1;
        background: #f8fafc;
        color: var(--primary);
    }

    .btn-action-delete:hover {
        border-color: #fecaca;
        background: #fef2f2;
        color: #dc2626;
    }

    .stars-display {
        color: #f59e0b;
        font-size: 12px;
        letter-spacing: 1px;
    }
</style>

<div class="reviews-header-row">
    <div>
        <h1 class="page-title">Customer Reviews</h1>
        <p class="page-subtitle">Manage customer reviews and traveler stories shown on the website home page.</p>
    </div>
    <a href="{{ route('admin.reviews.create') }}" class="btn-create-review">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        <span>Add New Review</span>
    </a>
</div>

<div class="card">
    <div class="card-header">
        <span class="card-title">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;color:var(--accent)"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            All Reviews ({{ $reviews->total() }})
        </span>
        <form method="GET" action="{{ route('admin.reviews.index') }}" class="search-bar">
            <input
                type="text"
                name="search"
                class="search-input"
                placeholder="Search name, destination, text…"
                value="{{ $search }}"
            >
            <button type="submit" class="btn-search">Search</button>
            @if ($search)
                <a href="{{ route('admin.reviews.index') }}" class="link-view" style="white-space:nowrap;font-size:12.5px">Clear</a>
            @endif
        </form>
    </div>

    <div class="table-wrap">
        @if ($reviews->isEmpty())
            <div class="empty-state">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                @if ($search)
                    No reviews found matching "<strong>{{ $search }}</strong>".
                @else
                    No customer reviews found. Click "Add New Review" to create your first review.
                @endif
            </div>
        @else
            <table style="min-width: 740px">
                <thead>
                    <tr>
                        <th style="width:50px">#</th>
                        <th style="width:180px">Reviewer Name</th>
                        <th style="width:200px">Destination</th>
                        <th>Review Quote</th>
                        <th style="width:90px;text-align:center">Rating</th>
                        <th style="width:100px;text-align:right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reviews as $rev)
                        <tr>
                            <td style="color:#6b7280;font-size:12px;font-weight:600">
                                #{{ $rev->id }}
                            </td>
                            <td>
                                <strong style="color:var(--text);font-size:14px">{{ $rev->name }}</strong>
                            </td>
                            <td>
                                <span class="badge badge-teal" style="font-weight:600">
                                    📍 {{ $rev->destination }}
                                </span>
                            </td>
                            <td>
                                <div class="review-quote-cell">
                                    “{{ $rev->review }}”
                                </div>
                            </td>
                            <td style="text-align:center">
                                <span class="stars-display">{{ str_repeat('★', $rev->rating ?? 5) }}</span>
                            </td>
                            <td>
                                <div style="display:flex;align-items:center;justify-content:flex-end;gap:6px">
                                    <a href="{{ route('admin.reviews.edit', $rev) }}" class="btn-action-icon" title="Edit review">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:14px;height:14px"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.reviews.destroy', $rev) }}" onsubmit="return confirm('Are you sure you want to delete this review from {{ $rev->name }}?');" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action-icon btn-action-delete" title="Delete review">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:14px;height:14px"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($reviews->hasPages())
                <div class="pagination-wrap">
                    <span>Showing {{ $reviews->firstItem() }} to {{ $reviews->lastItem() }} of {{ $reviews->total() }} reviews</span>
                    {{ $reviews->links() }}
                </div>
            @endif
        @endif
    </div>
</div>
@endsection
