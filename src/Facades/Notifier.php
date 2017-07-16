<?php

namespace Aitor24\Notifier\Facades;
use Aitor24\Notifier\Builder;
use Illuminate\Support\Facades\Facade;

class Notifier extends Facade
{
    /**
     * Get the registered name of the component.
     */
    public static function getFacadeAccessor()
    {
        return Builder::class;
    }
}
