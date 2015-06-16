<?php
namespace Nfq;

class EventManagerAddTest extends \PHPUnit_Framework_TestCase
{
    /** @var EventManager $eventManager */
    private $eventManager;

    public function setUp()
    {
        $this->eventManager = new EventManager();
    }

    public function testAddEvent()
    {
        $name = "Todays Special";
        $event = $this->eventManager->addEvent($name, new \DateTime(), 15);
        $this->assertInstanceOf('\\Nfq\\DataTypes\\Event', $event);

        $this->assertEquals($name, $event->name);
        $this->assertInstanceOf('\\DateTime', $event->date);
    }

    public function testAddMultipleEvents() {
        $this->eventManager->addEvent("First event", new \DateTime(), 1);
        $this->eventManager->addEvent("Second event", new \DateTime(), 2);
        
        $this->assertEquals(2, $this->eventManager->getEventList()->count());
    }
}