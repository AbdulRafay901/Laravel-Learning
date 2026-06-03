<?php

namespace App\Providers;

use App\Services\DependencyClass;
use Illuminate\Support\ServiceProvider;

class ServiceContainerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Singleton Bhi samajhna he jaab Ai se
        $this->app->bind('ServiceContainerLearn', function ($app) {
            return new DependencyClass();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
