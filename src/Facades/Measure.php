<?php

namespace Spatie\OpenTelemetry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\OpenTelemetry\Support\Measure
 */
class Measure extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Spatie\OpenTelemetry\Support\Measure::class;
    }
}
