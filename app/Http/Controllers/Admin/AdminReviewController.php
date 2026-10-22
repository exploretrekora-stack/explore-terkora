<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminReviewController extends Controller
{
    /**
     * Display a listing of customer reviews.
     */
    public function index(Request $request): View
    {
        $search = trim((string) $request->input('search', ''));

        $query = Review::query()->ordered();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('destination', 'like', "%{$search}%")
                    ->orWhere('review', 'like', "%{$search}%");
            });
        }

        $reviews = $query->paginate(15)->withQueryString();

        return view('admin.reviews.index', compact('reviews', 'search'));
    }

    /**
     * Show the form for creating a new review.
     */
    public function create(): View
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created review in storage.
     */
    public function store(ReviewRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active', true);
        $data['rating'] = (int) ($data['rating'] ?? 5);

        Review::create($data);
        Review::clearCache();

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'Review added successfully and published to website.');
    }

    /**
     * Show the form for editing the specified review.
     */
    public function edit(Review $review): View
    {
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified review in storage.
     */
    public function update(ReviewRequest $request, Review $review): RedirectResponse
    {
        $data = $request->validated();
        $data['is_active'] = $request->boolean('is_active', true);
        $data['rating'] = (int) ($data['rating'] ?? 5);

        $review->update($data);
        Review::clearCache();

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroy(Review $review): RedirectResponse
    {
        $review->delete();
        Review::clearCache();

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'Review deleted successfully.');
    }
}
