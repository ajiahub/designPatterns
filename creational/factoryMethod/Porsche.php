<?php
namespace Creational\FactoryMethod;
/**
 * ---------------------------------------
 * Porsche.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:47
 * ---------------------------------------
 */
/**
 * Porsche（保时捷）
 */
class Porsche implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }

    /**
     * 尽管只有奔驰汽车挂有AMG品牌，这里我们提供一个空方法仅作代码示例
     */
    public function addTuningAMG()
    {
    }
}