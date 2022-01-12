<?php

namespace behavioral\observer;

/**
 * ---------------------------------------
 * Observer.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:15
 * ---------------------------------------
 */
interface Observer
{
    public function undo(Observable $observable);
}