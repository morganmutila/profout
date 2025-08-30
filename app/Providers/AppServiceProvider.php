<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

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

        // Cache the queries
        View::share('navbarServices', Cache::rememberForever('navbar_services', function () {
            return Service::all();
        }));  
        View::share('settingsGlobal', Cache::rememberForever('settings_global', function () {
            return SiteSetting::first();
        }));

        // Clear cache when models are updated
        Service::saved(function () {
            Cache::forget('navbar_services');
        });
        Service::deleted(function () {
            Cache::forget('navbar_services');
        });

        SiteSetting::saved(function () {
            Cache::forget('settings_global');
        });
        SiteSetting::deleted(function () {
            Cache::forget('settings_global');
        });
    }
}
