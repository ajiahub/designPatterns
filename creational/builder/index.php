<?php
/**
 * 定义：建造者模式将一个复杂的对象的构建与它的表示分离，使得同样的构建过程可以创建不同的表示。
 *
 * 建造者模式(生成器模式)
 * 生成器模式主要有三个角色  建造者(Builder)  产品（Norvel） 指导者(Direct)
 */

use creational\builder\Direct;
use creational\builder\norvel\Fengtian;
use creational\builder\norvel\Qiumo;
use creational\builder\norvel\Xianni;


spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});


/**
 * 三个具体建造者
 *
 * @var Qiumo
 */
$qiumo = new Qiumo;
$fengtian = new Fengtian;
$xianni = new Xianni;

//指导者实例
$direct = new Direct;
$direct->createNorvel($qiumo);
$direct->createNorvel($fengtian);
$direct->createNorvel($xianni);

