<?php
/**
 * ---------------------------------------
 * index.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:10
 * ---------------------------------------
 */

use closure\MyObservable;
use closure\ObserverFirst;
use closure\ObserverSecond;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
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