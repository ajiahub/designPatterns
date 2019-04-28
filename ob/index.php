<?php

/**
 * ---------------------------------------
 * index.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/27 14:49
 * ---------------------------------------
 */

use ob\Observable;
use ob\ObserverFirst;
use ob\ObserverSecond;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$subject = new Observable();
$first = new ObserverFirst();
$second = new ObserverSecond();

$subject->property = function () {
    return "this is a closure";
};

$subject->attach($first);
$subject->attach($second);

$subject->notify();