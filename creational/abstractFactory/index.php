<?php

use creational\abstractFactory\JsonFactory;

/**
 * ---------------------------------------
 * 定义：抽象工厂模式为一组相关或相互依赖的对象创建提供接口，而无需指定其具体实现类。抽象工厂的客户端不关心如何创建这些对象，只关心如何将它们组合到一起。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 14:09
 * ---------------------------------------
 */

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

// * 这里是工厂的客户端，我们无需关心传递过来的是什么工厂类，
// * 只需以我们想要的方式渲染任意想要的组件即可。
$factory = new JsonFactory();
//$factory = new HtmlFactory();

$text = $factory->createText('Laravel学院');
$picture = $factory->createPicture('/image.jpg', 'laravel-academy');
echo "<Pre>";
print_r($text);
print_r($picture);