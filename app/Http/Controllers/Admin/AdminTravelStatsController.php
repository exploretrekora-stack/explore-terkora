<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTravelStatsRequest;
use App\Models\TravelStat;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminTravelStatsController extends Controller
{
    /**
     * Show the Travel Statistics management page.
     */
    public function index(): View
    {
        $travelStats = TravelStat::first() ?? TravelStat::create(TravelStat::defaultValues());

        return view('admin.travel-stats', compact('travelStats'));
    }

    /**
     * Persist updated travel statistics to database and clear cache.
     */
    public function update(UpdateTravelStatsRequest $request): RedirectResponse
    {
        $travelStats = TravelStat::first() ?? TravelStat::create(TravelStat::defaultValues());
        $travelStats->update($request->validated());
        TravelStat::clearCache();

        return redirect()
            ->route('admin.travel-stats')
            ->with('success', 'Travel statistics updated successfully.');
    }
}
