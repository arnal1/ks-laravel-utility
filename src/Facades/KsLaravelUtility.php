<?php

namespace Kastana\KsLaravelUtility\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kastana\KsLaravelUtility\KsLaravelUtility
 */
class KsLaravelUtility extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kastana\KsLaravelUtility\KsLaravelUtility::class;
    }
}
