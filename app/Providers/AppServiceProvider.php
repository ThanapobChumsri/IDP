<?php

namespace App\Providers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //  // Run migrations and seeders when the application is booted
        //  if (!Schema::hasTable('material_types' || !Schema::hasTable('materials'))) {
        //     Artisan::call('migrate --seed');
        // }
    }
}
