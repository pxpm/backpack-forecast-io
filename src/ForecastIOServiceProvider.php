<?php

namespace Pxpm\ForecastIO;

use Illuminate\Support\ServiceProvider;
use Pxpm\ForecastIO\Forecast;
use Pxpm\ForecastIO\ForecastFacade;

class ForecastIOServiceProvider extends ServiceProvider
{

    public $defer = true;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    public function boot()
    {

        $this->app->singleton(Forecast::class, function () {
            $forecast = new Forecast(config('settings.forecast_api_key'));
            if (! empty(config('settings.forecast_options'))) {
                $forecast->setOptions(config('settings.forecast_options'));
            }
            return $forecast;
        });
       
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(ForecastFacade::class, 'Forecast');

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['forecast'];
    }
}
