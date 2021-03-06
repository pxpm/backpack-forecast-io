<?php

namespace Pxpm\BackpackFullCalendar;

use Illuminate\Support\ServiceProvider;
use Pxpm\BackpackFullCalendar\Calendar;

class BackpackFullCalendarServiceProvider extends ServiceProvider
{

    public $defer = true;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        // Register Views from your package
        $this->loadViewsFrom(__DIR__.'/resources/views', 'backpack-fullcalendar');
        // Regiter migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
       
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
       

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        
    }
}
