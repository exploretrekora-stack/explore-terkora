<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EnquiryController;
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
    return redirect('/#guides');
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
