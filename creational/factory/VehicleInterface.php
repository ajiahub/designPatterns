<?php
namespace creational\factory;
/**
 * ---------------------------------------
 * VehicleInterface.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/19 16:43
 * ---------------------------------------
 */

/**
 * VehicleInterface 是车子接口
 */
interface VehicleInterface
{
    /**
     * @param mixed $destination
     *
     * @return mixed
     */
    public function driveTo($destination);
}