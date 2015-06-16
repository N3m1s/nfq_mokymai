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

    public function addEvent($eventName, $date)
    {
        $event = new Event();
        return $event;
    }
}