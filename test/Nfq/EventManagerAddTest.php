<?php
namespace Nfq;

class EventManagerAddTest extends \PHPUnit_Framework_TestCase
{
    /** @var  EventManager $eventManager */
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
}