<?php

namespace App\Providers;

use App\Services\DependencyClass;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;

class ServiceContainerProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Acha yaha bind ki jaga singleton bhi use hota he
        // singleton se jis class ka object banega wo hamesha same rahegi

        // Or bind se jis class ka object banega wo har bar fresh hogi
        // Har bar fresh class melegi jese
        // user 1 aya iusne cart me product add kadiya
        // Ab 2 user aya iusne cart me product kara to ab new object bana
        // Or 2 user ka product iuski cart wali class me add howa
        $this->app->bind('ServiceContainerLearn', function ($app) {
            return new DependencyClass();
        });
    }

    /**
     * Bootstrap services.
     */

    // Acha Ab ye Service Providers kya hota he ?
    // dekho service Provider isliye use hota he jese  example Hamne pagination use kari
    // Thk hena paginator::all() Ab ye pagination use kari he tailwand css ki
    // Ab hamhe chaiye ye pagination bootstrap me to ham ye chezze change kr skhte hen
    // Providers me se Boot me se hamne banate hen register me or kuch change ya modify
    // Krna hoto boot me se krte hen
    public function boot(): void
    {
        // Ab ye  pagination ki css boostrap me hojaygei Globally puri website me
        // Paginator::useBootstrapFive();
    }
}
