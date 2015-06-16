<?php

namespace Nfq;

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
     * @param \DateTime $date
     * @return EventList
     */
    public function getEventList(\DateTime $date = null)
    {
        if (empty($this->events)) {
            $this->events = new EventList();
        }

        return $this->events;
    }

    public function addEvent($eventName, $date)
    {

    }
}
