<?php

namespace Nfq;
use Nfq\DataTypes\Event;

/**
 * Class EventManager
 * @package Nfq
 */
class EventManager
{
    /**
     * @var Events[]
     */
    protected $events;

    public function addEvent($eventName, $date, $length)
    {
        $event = new Event();
        $event->name = $eventName;
        $event->date = $date;
        $event->length = $length;

        $this->events->append($event);

        return $event;
    }
}