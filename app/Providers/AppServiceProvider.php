<?php

namespace App\Providers;

use App\Mail\SmtpMailManager;
use App\Models\Review;
use App\Models\TravelStat;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->extend('mail.manager', function ($manager, $app) {
            return new SmtpMailManager($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['welcome', 'components.landing-content', 'components.layout', 'about-us'], function ($view) {
            $view->with('travelStats', TravelStat::current());
            $view->with('activeReviews', Review::allActiveCached());
        });
    }
}
