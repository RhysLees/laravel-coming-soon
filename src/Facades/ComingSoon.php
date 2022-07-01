<?php

namespace RhysLees\ComingSoon\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RhysLees\ComingSoon\ComingSoon
 */
class ComingSoon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-coming-soon';
    }
}
