<?php
namespace Creational\FactoryMethod;
/**
 * ---------------------------------------
 * VehicleInterface.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:46
 * ---------------------------------------
 */
/**
 * VehicleInterface是车辆接口
 */
interface VehicleInterface
{
    /**
     * 设置车的颜色
     *
     * @param string $rgb
     */
    public function setColor($rgb);
}