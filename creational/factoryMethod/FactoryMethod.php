<?php
namespace Creational\FactoryMethod;
/**
 * ---------------------------------------
 * FactoryMethod.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:46
 * ---------------------------------------
 */

/**
 * 工厂方法抽象类
 */
abstract class FactoryMethod
{

    const CHEAP = 1;
    const FAST = 2;

    /**
     * 子类必须实现该方法
     *
     * @param string $type a generic type
     *
     * @return VehicleInterface a new vehicle
     */
    abstract protected function createVehicle($type);

    /**
     * 创建新的车辆
     *
     * @param int $type
     *
     * @return VehicleInterface a new vehicle
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");

        return $obj;
    }
}