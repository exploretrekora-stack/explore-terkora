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

// Secure web cache clear & asset sync (for shared hosting without SSH/terminal)
Route::get('/maintenance/clear-cache/{key}', function (string $key) {
    if ($key !== 'trekora-clear-2026' && $key !== config('app.key')) {
        abort(403, 'Unauthorized access.');
    }

    Artisan::call('optimize:clear');

    $syncLog = [];
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? rtrim($_SERVER['DOCUMENT_ROOT'], '/') : null;
    $publicPath = rtrim(public_path(), '/');

    if ($docRoot && realpath($docRoot) !== realpath($publicPath)) {
        $sourceBuild = $publicPath.'/build';
        $destBuild = $docRoot.'/build';

        if (is_dir($sourceBuild)) {
            $copiedCount = 0;
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($sourceBuild, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            );

            foreach ($iterator as $item) {
                $subPath = $iterator->getSubPathname();
                $target = $destBuild.'/'.$subPath;

                if ($item->isDir()) {
                    if (! is_dir($target)) {
                        mkdir($target, 0755, true);
                    }
                } else {
                    $targetDir = dirname($target);
                    if (! is_dir($targetDir)) {
                        mkdir($targetDir, 0755, true);
                    }
                    copy($item->getPathname(), $target);
                    $copiedCount++;
                }
            }
            $syncLog[] = "Synced {$copiedCount} build assets from {$sourceBuild} to {$destBuild}.";
        }
    }

    $responseMessage = "Explore Trekora: All caches cleared successfully!\n"
        .(! empty($syncLog) ? implode("\n", $syncLog)."\n" : "Build assets verified in public path.\n");

    return response($responseMessage, 200)
        ->header('Content-Type', 'text/plain');
})->name('maintenance.clear-cache');

// Fallback asset route for shared hosting where web document root (/public_html)
// has not been synced with the Laravel public/build directory
Route::get('/build/{path}', function (string $path) {
    if (str_contains($path, '..')) {
        abort(404);
    }

    $filePath = public_path('build/'.$path);
    if (! file_exists($filePath) || ! is_file($filePath)) {
        abort(404);
    }

    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css' => 'text/css; charset=utf-8',
        'js' => 'application/javascript; charset=utf-8',
        'json' => 'application/json',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'svg' => 'image/svg+xml',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
    ];

    $mime = $mimeTypes[$extension] ?? (mime_content_type($filePath) ?: 'application/octet-stream');

    return response()->file($filePath, [
        'Content-Type' => $mime,
        'Cache-Control' => 'public, max-age=31536000, immutable',
    ]);
})->where('path', '.*')->name('build.asset');
