<?php

namespace Notch\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Notch\Core\Core
 */
class Core extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Notch\Core\Core::class;
    }
}
