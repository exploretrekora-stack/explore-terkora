@extends('admin.layout')

@section('title', 'Inquiry #' . $inquiry->id)

@section('content')
    <a href="{{ route('admin.inquiries') }}" class="btn-back">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:14px;height:14px"><polyline points="15 18 9 12 15 6"/></svg>
        Back to Inquiries
    </a>

    <div class="page-header-row">
        <div>
            <p class="page-title">Inquiry #{{ $inquiry->id }}</p>
            <p class="page-subtitle">Received on {{ $inquiry->created_at->format('d M Y, h:i A') }}</p>
        </div>
    </div>

    <div class="grid-2col" style="grid-template-columns: 1fr">
        {{-- Details --}}
        <div class="card">
            <div class="card-header">
                <span class="card-title">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:16px;height:16px;color:var(--accent)"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    Inquiry Information
                </span>
                <a href="{{ $inquiry->whatsAppUrl() }}" target="_blank" class="btn-wa">
                    <svg viewBox="0 0 24 24" fill="currentColor" style="width:15px;height:15px"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                    Contact via WhatsApp
                </a>
            </div>

            <div class="detail-grid">
                <div class="detail-label">Full Name</div>
                <div class="detail-value"><strong>{{ $inquiry->name }}</strong></div>

                <div class="detail-label">Email</div>
                <div class="detail-value">
                    <a href="mailto:{{ $inquiry->email }}" style="color:var(--accent);text-decoration:none">{{ $inquiry->email }}</a>
                </div>

                <div class="detail-label">Phone Number</div>
                <div class="detail-value">
                    @if ($inquiry->phone_number)
                        <a href="tel:{{ $inquiry->phone_number }}" style="color:var(--accent);text-decoration:none;font-weight:600">{{ $inquiry->phone_number }}</a>
                    @else
                        <span style="color:#9ca3af">—</span>
                    @endif
                </div>

                <div class="detail-label">Address</div>
                <div class="detail-value">{{ $inquiry->address ?: '—' }}</div>

                <div class="detail-label">Destination</div>
                <div class="detail-value">
                    @if ($inquiry->destinations)
                        <span class="badge badge-teal">{{ $inquiry->destinations }}</span>
                    @else
                        <span style="color:#9ca3af">—</span>
                    @endif
                </div>

                <div class="detail-label">Travel Date</div>
                <div class="detail-value">
                    {{ $inquiry->date ? $inquiry->date->format('d M Y') : '—' }}
                </div>

                <div class="detail-label">No. of Travellers</div>
                <div class="detail-value">{{ $inquiry->number_of_travellers ?: '—' }}</div>

                <div class="detail-label">Received</div>
                <div class="detail-value">{{ $inquiry->created_at->format('d M Y, h:i A') }}</div>

                @if ($inquiry->message)
                    <div class="detail-label" style="border-bottom:none">Message</div>
                    <div class="detail-value" style="border-bottom:none;white-space:pre-line;line-height:1.6">{{ $inquiry->message }}</div>
                @endif
            </div>
        </div>
    </div>
@endsection
