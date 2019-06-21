<?php

namespace behavioral\mediator;
/**
 * ---------------------------------------
 * Colleague.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:48
 * ---------------------------------------
 */

/**
 * Colleague是一个抽象的同事类，但是它只知道中介者Mediator，而不知道其他同事
 */
abstract class Colleague
{
    /**
     * this ensures no change in subclasses
     *
     * @var MediatorInterface
     */
    private $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function __construct(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    // for subclasses
    protected function getMediator()
    {
        return $this->mediator;
    }
}