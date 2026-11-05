<?php

namespace Osamanagi\FilamentCalls\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Osamanagi\FilamentCalls\FilamentCalls
 */
class FilamentCalls extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Osamanagi\FilamentCalls\FilamentCalls::class;
    }
}
