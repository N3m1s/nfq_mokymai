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
    private $eventManager;

    public function setUp()
    {
        $this->eventManager = new EventManager();
    }

    public function testIfListOfEventsIsReturned()
    {
        $eventList = $this->eventManager->getEventList();

        $this->assertInstanceOf('\\Nfq\\DataTypes\\EventList', $eventList);
    }

    public function testIfListOfEventsForGivenDateIsReturned()
    {
        $today = new \DateTime();
        $eventList = $this->eventManager->getEventList($today);

        $this->assertInstanceOf('\\Nfq\\DataTypes\\EventList', $eventList);
    }
}
