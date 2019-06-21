<?php
/**
 * ---------------------------------------
 * 定义：定义一个用于创建对象的接口，让子类决定实例化哪一个类，Factory Method使一个类的实例化延迟到了子类。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:45
 * ---------------------------------------
 */

use Creational\FactoryMethod\FactoryMethod;
use Creational\FactoryMethod\GermanFactory;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$shop = new GermanFactory();
$vehicle = $shop->create(FactoryMethod::CHEAP);
echo "<Pre>";
print_r($vehicle);