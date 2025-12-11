<?php

namespace App\Providers;

use App\Settings\SiteSettings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share site settings with all views
        View::composer('*', function ($view) {
            try {
                $settings = app(SiteSettings::class);
                $view->with('siteSettings', $settings);
            } catch (\Exception $e) {
                // If settings are not yet initialized, provide a default object
                $view->with('siteSettings', null);
            }
        });
    }
}
