<?php

namespace App\Providers;

use App\Services\TravelvelaService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(\App\Services\TravelvelaApiService::class, function ($app) {
            return new \App\Services\TravelvelaApiService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
