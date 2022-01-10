<?php

namespace Denisburkin\HeyBroClient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Denisburkin\HeyBroClient\Skeleton\SkeletonClass
 */
class HeyBroClientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'heybro-client';
    }
}
