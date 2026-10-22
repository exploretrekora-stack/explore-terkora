<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminInquiryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/enquiries', [EnquiryController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('enquiries.store');

Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations');
Route::get('/destinations/{slug}', [DestinationController::class, 'show'])->name('destinations.show');

Route::get('/tour-packages', function () {
    return view('tour-packages');
})->name('tour-packages');

Route::get('/tour-packages/{slug}', [DestinationController::class, 'showPackage'])->name('tour-packages.show');

Route::get('/travel-guides', function () {
    return view('travel-guides');
})->name('travel-guides');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name('terms');

Route::get('/copyright-policy', function () {
    return view('copyright');
})->name('copyright');

// ─── Admin Panel ──────────────────────────────────────────────────────────────
Route::get('/admin', fn () => redirect()->route('admin.login'))->name('admin');

Route::prefix('admin')->name('admin.')->group(function () {
    // Guest-only routes (redirect if already logged in)
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');

    // Protected admin routes
    Route::middleware('admin')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/inquiries', [AdminInquiryController::class, 'index'])->name('inquiries');
        Route::get('/inquiries/{inquiry}', [AdminInquiryController::class, 'show'])->name('inquiries.show');
        Route::get('/clear-cache', function () {
            Artisan::call('optimize:clear');

            return back()->with('success', 'All caches cleared successfully!');
        })->name('clear-cache');
    });
});

// Secure web cache clear (for shared hosting without SSH/terminal)
Route::get('/maintenance/clear-cache/{key}', function (string $key) {
    if ($key !== 'trekora-clear-2026' && $key !== config('app.key')) {
        abort(403, 'Unauthorized access.');
    }

    Artisan::call('optimize:clear');

    return response("Explore Trekora: All caches (config, routes, views, and app cache) cleared successfully!\n", 200)
        ->header('Content-Type', 'text/plain');
})->name('maintenance.clear-cache');
