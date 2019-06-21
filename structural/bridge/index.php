<?php

use structural\bridge\Car;
use structural\bridge\Produce;
use structural\bridge\Assemble;
use structural\bridge\Motorcycle;

/**
 * ---------------------------------------
 * 定义：将抽象部分与它的实现部分相分离，使他们可以独立的变化。
 *
 * 桥梁模式完全是为了解决继承的缺点而提出的设计模式。在该模式下，实现可以不受抽象的约束，不用再绑定在一个固定的抽象层次上。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 16:47
 * ---------------------------------------
 */

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$vehicle = new Car(new Produce(), new Assemble());
//$vehicle = new Motorcycle(new Produce(), new Assemble());
echo "<pre>";
print_r($vehicle);
$vehicle->manufacture();