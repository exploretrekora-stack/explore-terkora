<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Review;
use App\Models\TravelStat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Show the admin dashboard with live analytics, charts, stats, and reviews.
     */
    public function index(): View
    {
        $totalInquiries = Inquiry::count();
        $totalTravelers = (int) (Inquiry::sum('number_of_travellers') ?: 0);
        $todayInquiries = Inquiry::whereDate('created_at', today())->count();
        $thisWeekInquiries = Inquiry::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $thisMonthInquiries = Inquiry::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $recentInquiries = Inquiry::latest()->take(10)->get();

        // Real Inquiries per day from database records
        $allInquiries = Inquiry::orderBy('created_at', 'asc')->get();
        $daysWithInquiries = $allInquiries->groupBy(fn ($i) => $i->created_at->format('d M'))->map->count();

        $daysRange = collect();
        if ($daysWithInquiries->isNotEmpty()) {
            foreach ($daysWithInquiries as $day => $count) {
                $daysRange->put($day, $count);
            }
        }

        // Include recent days up to today so the timeline is continuous
        $today = Carbon::today();
        for ($i = 4; $i >= 0; $i--) {
            $label = (clone $today)->subDays($i)->format('d M');
            if (! $daysRange->has($label)) {
                $daysRange->put($label, 0);
            }
        }
        $inquiriesPerDay = $daysRange->all();

        // Top destinations by total travellers and inquiries
        $topDestinations = Inquiry::selectRaw('destinations, count(*) as total, sum(number_of_travellers) as travellers')
            ->whereNotNull('destinations')
            ->where('destinations', '!=', '')
            ->groupBy('destinations')
            ->orderByDesc('travellers')
            ->take(6)
            ->get();

        // Live Travel Statistics & Customer Reviews from database
        $travelStats = TravelStat::current();
        $reviewsCount = Review::active()->count();
        $averageRating = Review::active()->avg('rating');
        $averageRatingFormatted = $averageRating ? number_format((float) $averageRating, 1) : number_format((float) $travelStats->average_rating, 1);
        $recentReviews = Review::active()->ordered()->take(5)->get();

        // Pre-formatted arrays for interactive animated charts
        $inquiriesChartData = $recentInquiries->map(fn ($inq) => [
            $inq->id,
            $inq->name,
            $inq->destinations ?: 'General Inquiry',
            $inq->date ? ($inq->date instanceof \DateTimeInterface ? $inq->date->format('d M Y') : (string) $inq->date) : 'Flexible',
            (int) ($inq->number_of_travellers ?: 1),
            $inq->created_at->format('d M'),
            route('admin.inquiries.show', $inq),
        ])->values()->all();

        $destinationsChartData = $topDestinations->map(fn ($d) => [
            'name' => $d->destinations,
            'count' => (int) $d->total,
            'travellers' => (int) ($d->travellers ?: $d->total),
        ])->values()->all();

        $statsChartData = [
            ['🎒', 'Happy Travelers', (int) $travelStats->happy_travelers, '+'],
            ['⭐', 'Average Rating', (float) $travelStats->average_rating, ''],
            ['🏆', 'Years of Experience', (int) $travelStats->years_of_experience, '+'],
            ['👥', 'Team Members', (int) $travelStats->team_members, ''],
            ['🗺️', 'Trips Completed', (int) $travelStats->trips_completed, '+'],
            ['💬', 'Verified Reviews', (int) $travelStats->verified_reviews, '+'],
        ];

        $reviewsChartData = $recentReviews->map(fn ($r) => [
            $r->name,
            $r->destination,
            Str::limit($r->review, 95),
            (int) $r->rating,
        ])->values()->all();

        return view('admin.dashboard', compact(
            'totalInquiries',
            'totalTravelers',
            'todayInquiries',
            'thisWeekInquiries',
            'thisMonthInquiries',
            'recentInquiries',
            'inquiriesPerDay',
            'topDestinations',
            'travelStats',
            'reviewsCount',
            'averageRatingFormatted',
            'recentReviews',
            'inquiriesChartData',
            'destinationsChartData',
            'statsChartData',
            'reviewsChartData',
        ));
    }
}
