<?php
/**
 * Created by PhpStorm.
 * User: LauraK
 * Date: 2015-06-16
 * Time: 15:36
 */

namespace Nfq\DataTypes;

/**
 * Class EventList
 * @package Nfq\DataTypes
 */
class EventList extends \ArrayIterator
{
    /**
     * @param \Closure $c
     * @return static
     */
    public function filter(\Closure $c)
    {
        return new static(array_filter($this->getArrayCopy(), $c));
    }

}
