<?php
/**
 * ---------------------------------------
 * 定义：一个用于创建对象的接口，让接口子类通过工厂方法决定实例化哪一个类。
 *
 * 工厂角色：简单工厂模式的核心，它负责实现创建所有实例的内部逻辑；
 * 抽象产品角色:所有产品的父类，它负责描述所有实例所共有的公共接口；
 * 具体产品角色：简单工厂模式所创建的具体实例对象；
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/19 16:41
 * ---------------------------------------
 */

use creational\factory\ConcreteFactory;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

class Factory
{
    /** @var ConcreteFactory */
    protected $factory;

    public function __construct()
    {
        $this->factory = new ConcreteFactory();
    }

    public function create($type)
    {
        return $this->factory->createVehicle($type);
    }
}

$factory = new Factory();
$obj = $factory->create('bicycle');
echo "<pre>";
print_r($obj);