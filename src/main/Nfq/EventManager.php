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

    public function getEventList()
    {
        if (empty($this->events)) {
            $this->events = new EventList();
        }

        return $this->events;
    }
}