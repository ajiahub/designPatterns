<?php

namespace behavioral\observer;
/**
 * ---------------------------------------
 * ObserverFirst.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:10
 * ---------------------------------------
 */
class ObserverFirst implements Observer
{
    /**
     * @inheritdoc
     * @param Observable $observable
     */
    public function undo(Observable $observable)
    {
        $property = $observable->property;
        var_dump($property());
    }
}