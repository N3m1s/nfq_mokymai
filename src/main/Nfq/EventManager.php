<?php

namespace Nfq;
use Nfq\DataTypes\Event;

use Nfq\DataTypes\EventList;

/**
 * Class EventManager
 * @package Nfq
 */
class EventManager
{
    /**
     * @var EventList
     */
    private $events;

    /**
     * @return EventList
     */
    public function getEventList()
    {
        if (empty($this->events)) {
            $this->events = new EventList();
        }

        return $this->events;
    }

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
