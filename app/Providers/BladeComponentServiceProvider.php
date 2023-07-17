<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Blade::component('livewire.frontend.appfront', 'frontend-layout');
        Blade::component('layouts.app', 'admin-layout');
   
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
