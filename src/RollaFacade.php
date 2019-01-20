<?php

namespace Desemax\Rolla;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Desemax\Rolla\Rolla
 */
class RollaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rolla';
    }
}
