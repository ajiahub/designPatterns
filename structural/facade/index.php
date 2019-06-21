<?php

use structural\facade\Facade;

/**
 * ---------------------------------------
 * 定义：为子系统中的一组接口提供一致的界面，facade提供了一高层接口，这个接口使得子系统更容易使用。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 9:51
 * ---------------------------------------
 */


spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$bios = new \structural\facade\Windows();
$os = new \structural\facade\CentOS();
$facade = new Facade($bios, $os);
echo "开机：";
$facade->turnOn();
echo "关机：";
$facade->turnOff();