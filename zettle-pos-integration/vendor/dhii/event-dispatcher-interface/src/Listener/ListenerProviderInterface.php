<?php
declare(strict_types=1);

namespace Dhii\Events\Listener;

use Traversable;

/**
 * Mapper from an event to the listeners that are applicable to that event.
 */
interface ListenerProviderInterface
{
    /**
     * @param object $event
     *   An event for which to return the relevant listeners.
     * @return Traversable[callable]
     *   A list of callables. Each
     *   callable MUST be type-compatible with $event.
     */
    public function getListenersForEvent($event) : Traversable;
}
