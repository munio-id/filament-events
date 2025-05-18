<?php

namespace Munio\FilamentEvents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Munio\FilamentEvents\FilamentEvents
 */
class FilamentEvents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Munio\FilamentEvents\FilamentEvents::class;
    }
}
