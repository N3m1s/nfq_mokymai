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
        $event = $this->eventManager->addEvent("Todays Special", new \DateTime());
        $this->assertInstanceOf('\\Nfq\\DataTypes\\Event', $event);
        $this->assertClassHasAttribute('name', $event);
        $this->assertClassHasAttribute('date', $event);
    }
}