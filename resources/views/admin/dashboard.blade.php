@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header-row">
        <div>
            <p class="page-title">Dashboard</p>
            <p class="page-subtitle">Overview of inquiries and activity on Explore Trekora.</p>
        </div>
    </div>

    {{-- Stats Cards (Optimized for small mobile 340px-440px & desktop) --}}
    <div class="stats-grid">
        <div class="stat-card">
            <p class="stat-label">Total Inquiries</p>
            <p class="stat-value">{{ $totalInquiries }}</p>
            <p class="stat-note">All time</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Today</p>
            <p class="stat-value">{{ $todayInquiries }}</p>
            <p class="stat-note">{{ now()->format('d M Y') }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">This Week</p>
            <p class="stat-value">{{ $thisWeekInquiries }}</p>
            <p class="stat-note">{{ now()->startOfWeek()->format('d M') }} – {{ now()->endOfWeek()->format('d M') }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">This Month</p>
            <p class="stat-value">{{ $thisMonthInquiries }}</p>
            <p class="stat-note">{{ now()->format('F Y') }}</p>
        </div>
    </div>

    <div class="grid-2col">
        {{-- Recent Inquiries --}}
        <div class="card">
            <div class="card-header">
                <span class="card-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;color:var(--accent)"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    Recent Inquiries
                </span>
                <a href="{{ route('admin.inquiries') }}" class="link-view">View all →</a>
            </div>
            <div class="table-wrap">
                @if ($recentInquiries->isEmpty())
                    <div class="empty-state">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        No inquiries yet.
                    </div>
                @else
                    <table style="min-width: 420px">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th style="width:50px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recentInquiries as $inquiry)
                                <tr>
                                    <td>
                                        <strong style="color:var(--text);font-size:13.5px">{{ $inquiry->name }}</strong><br>
                                        <span style="font-size:11.5px;color:#6b7280">{{ $inquiry->email }}</span>
                                    </td>
                                    <td>
                                        @if ($inquiry->destinations)
                                            <span class="badge badge-teal">{{ Str::limit($inquiry->destinations, 22) }}</span>
                                        @else
                                            <span class="badge badge-gray">—</span>
                                        @endif
                                    </td>
                                    <td style="font-size:12px;color:#6b7280;white-space:nowrap">
                                        {{ $inquiry->created_at->format('d M Y') }}
                                    </td>
                                    <td style="text-align:right">
                                        <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="link-view">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>

        {{-- Top Destinations --}}
        <div class="card">
            <div class="card-header">
                <span class="card-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;color:var(--accent)"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/></svg>
                    Top Destinations
                </span>
            </div>
            <div class="table-wrap">
                @if ($topDestinations->isEmpty())
                    <div class="empty-state">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"/></svg>
                        No data yet.
                    </div>
                @else
                    <table style="min-width: 320px">
                        <thead>
                            <tr>
                                <th style="width:40px">#</th>
                                <th>Destination</th>
                                <th style="text-align:right">Inquiries</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topDestinations as $i => $dest)
                                <tr>
                                    <td style="color:#9ca3af;font-weight:600">{{ $i + 1 }}</td>
                                    <td style="font-weight:500">{{ $dest->destinations }}</td>
                                    <td style="text-align:right">
                                        <span class="badge badge-teal">{{ $dest->total }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
