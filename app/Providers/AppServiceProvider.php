<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Enable strict mode for Eloquent models
        Model::shouldBeStrict(!app()->isProduction());
        DB::prohibitDestructiveCommands(!app()->isProduction());
        Model::unguard();

        View::share('navbarServices', Service::all());  
        View::share('settingsGlobal', SiteSetting::first());  
    }
}
