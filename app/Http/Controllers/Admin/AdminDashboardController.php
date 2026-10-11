<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Show the admin dashboard with stats.
     */
    public function index(): View
    {
        $totalInquiries = Inquiry::count();
        $todayInquiries = Inquiry::whereDate('created_at', today())->count();
        $thisWeekInquiries = Inquiry::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $thisMonthInquiries = Inquiry::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $recentInquiries = Inquiry::latest()->take(5)->get();

        $topDestinations = Inquiry::selectRaw('destinations, count(*) as total')
            ->whereNotNull('destinations')
            ->groupBy('destinations')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalInquiries',
            'todayInquiries',
            'thisWeekInquiries',
            'thisMonthInquiries',
            'recentInquiries',
            'topDestinations',
        ));
    }
}
