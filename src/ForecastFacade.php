<?php

namespace Pxpm\ForecastIO;

use Illuminate\Support\Facades\Facade;

class ForecastFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Pxpm\ForecastIO\Forecast';
    }

    
}