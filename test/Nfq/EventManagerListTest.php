<?php
/**
 * Created by PhpStorm.
 * User: LauraK
 * Date: 2015-06-16
 * Time: 15:34
 */

namespace Nfq;

/**
 * Class Test
 * @package Nfq
 */
class EventManagerListTest extends \PHPUnit_Framework_TestCase
{
    public function testIfListOfEventsIsReturned()
    {
        $eventManager = new EventManager();

        $eventList = $eventManager->getEventList();

        $this->assertInstanceOf('\\Nfq\\DataTypes\\EventList', $eventList);
    }
}
