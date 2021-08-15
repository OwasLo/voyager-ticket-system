<?php

namespace Owaslo\VoyagerTicketSystem;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Owaslo\VoyagerTicket\Skeleton\SkeletonClass
 */
class VoyagerTicketSystemFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'voyager-ticket-system';
    }
}
