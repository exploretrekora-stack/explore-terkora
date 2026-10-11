<?php

namespace App\Http\Controllers;

use App\Services\DestinationRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display the all destinations listing page.
     */
    public function index(Request $request): View|RedirectResponse
    {
        $slug = $request->string('destination')->toString();

        if (isset(DestinationRepository::tripFinder()[$slug])) {
            return redirect()->route('destinations.show', array_filter([
                'slug' => $slug,
                'travel_date' => $request->string('travel_date')->toString(),
                'travelers' => $request->string('travelers')->toString(),
            ], fn (string $value): bool => $value !== ''));
        }

        return view('destinations');
    }

    /**
     * Display the destination details page.
     */
    public function show(string $slug): View
    {
        return $this->detail($slug, false);
    }

    /**
     * Display the same destination details inside Tour Packages.
     */
    public function showPackage(string $slug): View
    {
        if (! in_array($slug, DestinationRepository::packageSlugs(), true)) {
            abort(404);
        }

        return $this->detail($slug, true);
    }

    /**
     * Render one destination detail page.
     */
    private function detail(string $slug, bool $fromTourPackage): View
    {
        $destination = DestinationRepository::find($slug);

        if (! $destination) {
            abort(404, 'Destination not found.');
        }

        $allDestinations = DestinationRepository::all();
        $related = array_filter($allDestinations, fn ($d) => $d['slug'] !== $slug);

        return view('destination-detail', [
            'destination' => $destination,
            'related' => array_slice($related, 0, 3),
            'fromTourPackage' => $fromTourPackage,
        ]);
    }
}
