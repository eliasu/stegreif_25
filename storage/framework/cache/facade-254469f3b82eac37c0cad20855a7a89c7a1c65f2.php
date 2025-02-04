<?php

namespace Facades\Statamic\Entries;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Entries\InitiatorStack
 */
class InitiatorStack extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'Statamic\Entries\InitiatorStack';
    }
}
