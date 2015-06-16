<?php
/**
 * Created by PhpStorm.
 * User: LauraK
 * Date: 2015-06-16
 * Time: 16:00
 */

namespace Nfq;

use Nfq\DataTypes\EventList;

/**
 * Class EventListTest
 * @package Nfq
 */
class EventListTest extends \PHPUnit_Framework_TestCase
{
    public function testIfFilterClosureIsApplied()
    {
        $eventList = new EventList();

        $eventList->append(1);
        $eventList->append(4);
        $eventList->append(6);
        $eventList->append(7);

        //Allow only ones which divide from two
        $eventListFiltered = $eventList->filter(function($item) {
            return $item % 2 == 0;
        });

        $this->assertSame(2, $eventListFiltered->count());
    }
}
