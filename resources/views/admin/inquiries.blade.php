@extends('admin.layout')

@section('title', 'Inquiries')

@section('content')
    <div class="page-header-row">
        <div>
            <p class="page-title">Inquiries</p>
            <p class="page-subtitle">All customer inquiries submitted through the website.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <span class="card-title">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;color:var(--accent)"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                All Inquiries ({{ $inquiries->total() }})
            </span>
            <form method="GET" action="{{ route('admin.inquiries') }}" class="search-bar">
                <input
                    type="text"
                    name="search"
                    class="search-input"
                    placeholder="Search name, email, phone…"
                    value="{{ $search }}"
                >
                <button type="submit" class="btn-search">Search</button>
                @if ($search)
                    <a href="{{ route('admin.inquiries') }}" class="link-view" style="white-space:nowrap;font-size:12.5px">Clear</a>
                @endif
            </form>
        </div>

        <div class="table-wrap">
            @if ($inquiries->isEmpty())
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    @if ($search)
                        No inquiries found matching "<strong>{{ $search }}</strong>".
                    @else
                        No inquiries yet.
                    @endif
                </div>
            @else
                <table style="min-width: 720px">
                    <thead>
                        <tr>
                            <th style="width:50px">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Destination</th>
                            <th>Travel Date</th>
                            <th style="text-align:center">Travellers</th>
                            <th>Received</th>
                            <th style="width:60px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inquiries as $inquiry)
                            <tr>
                                <td style="color:#9ca3af;font-weight:600">{{ $inquiry->id }}</td>
                                <td style="font-weight:600;white-space:nowrap">{{ $inquiry->name }}</td>
                                <td style="color:#4b5563">{{ $inquiry->email }}</td>
                                <td style="color:#4b5563;white-space:nowrap">{{ $inquiry->phone_number ?: '—' }}</td>
                                <td>
                                    @if ($inquiry->destinations)
                                        <span class="badge badge-teal">{{ Str::limit($inquiry->destinations, 26) }}</span>
                                    @else
                                        <span style="color:#9ca3af">—</span>
                                    @endif
                                </td>
                                <td style="white-space:nowrap;font-size:13px;color:#4b5563">
                                    {{ $inquiry->date ? $inquiry->date->format('d M Y') : '—' }}
                                </td>
                                <td style="text-align:center">{{ $inquiry->number_of_travellers ?: '—' }}</td>
                                <td style="white-space:nowrap;font-size:12.5px;color:#6b7280">
                                    {{ $inquiry->created_at->format('d M Y') }}<br>
                                    <span style="font-size:11px;color:#9ca3af">{{ $inquiry->created_at->format('h:i A') }}</span>
                                </td>
                                <td style="white-space:nowrap;text-align:right">
                                    <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="link-view">View →</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        @if ($inquiries->hasPages())
            <div class="pagination-wrap">
                <span>Showing {{ $inquiries->firstItem() }}–{{ $inquiries->lastItem() }} of {{ $inquiries->total() }}</span>
                {{ $inquiries->links() }}
            </div>
        @endif
    </div>
@endsection
