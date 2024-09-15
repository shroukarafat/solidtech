<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    
        public function boot()
{
    // Set the locale from session or default to 'en'
    app()->setLocale(session('locale', config('app.locale')));
}

    }

