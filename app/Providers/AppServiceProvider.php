<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\EnsureUserIsAuthenticated;

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
        // Register your middleware globally or for specific groups
        app('router')->aliasMiddleware('auth.authenticated', EnsureUserIsAuthenticated::class);
    }
}
