<?php

use structural\proxy\Proxy;
use structural\proxy\RealSubject;

/**
 * ---------------------------------------
 * 定义：代理模式为对象的间接访问提供了一套方案，可以对对象访问进行控制，也能监控对象访问相关的数据信息。代理模式（Proxy）就是给某一个对象提供代理，在由代理控制原对象的访问。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 10:15
 * ---------------------------------------
 */

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$realSubject = new RealSubject();
print_r($realSubject->request());

$proxy = new Proxy();
print_r($proxy->request());