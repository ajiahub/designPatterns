<?php

namespace ob;

/**
 * ---------------------------------------
 * ObserverFirst.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/27 14:48
 * ---------------------------------------
 */
class ObserverFirst implements \SplObserver
{
    /**
     * 观察者要实现的唯一方法
     * 也是被 Subject 调用的方法
     * @param Observable $subject
     */
    public function update(\SplSubject $subject)
    {
        $closure = $subject->property;
        var_dump($closure());
    }
}