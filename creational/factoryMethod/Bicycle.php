<?php
namespace Creational\FactoryMethod;
/**
 * ---------------------------------------
 * Bicycle.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:47
 * ---------------------------------------
 */
/**
 * Bicycle（自行车）
 */
class Bicycle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $color;

    /**
     * 设置自行车的颜色
     *
     * @param string $rgb
     */
    public function setColor($rgb)
    {
        $this->color = $rgb;
    }
}