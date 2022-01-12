<?php

namespace behavioral\observer;

/**
 * ---------------------------------------
 * ObserverFirst.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:10
 * ---------------------------------------
 */
class ObserverSecond implements Observer
{
    /**
     * @inheritdoc
     *
     * @param Observable $observable
     */
    public function undo(Observable $observable)
    {
        echo get_class($observable);
    }
}