<?php

namespace ob;
/**
 * ---------------------------------------
 * ObserverSecond.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/27 14:44
 * ---------------------------------------
 */

/**
 * ObserverSecond 类（观察者对象）
 */
class ObserverSecond implements \SplObserver
{
    /**
     * 观察者要实现的唯一方法
     * 也是被 Subject 调用的方法
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}