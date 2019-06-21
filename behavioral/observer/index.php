<?php
/**
 * ---------------------------------------
 * 定义：观察者模式有时也被称作发布/订阅模式，该模式用于为对象实现发布/订阅功能：一旦主体对象状态发生改变，与之关联的观察者对象会收到通知，并进行相应操作。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:10
 * ---------------------------------------
 */

use behavioral\observer\MyObservable;
use behavioral\observer\ObserverFirst;
use behavioral\observer\ObserverSecond;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$subject = new MyObservable();
$subject->property = function () {
    return "this is a closure";
};

$subject->attach(function () {
    return new ObserverFirst();
});
$subject->attach(function () {
    return new ObserverSecond();
});

$subject->notify();