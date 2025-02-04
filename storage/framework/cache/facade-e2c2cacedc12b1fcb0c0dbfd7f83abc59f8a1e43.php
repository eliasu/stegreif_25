<?php

namespace Facades\Statamic\CP\Navigation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\CP\Navigation\NavItemIdHasher
 */
class NavItemIdHasher extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Statamic\CP\Navigation\NavItemIdHasher';
    }
}
