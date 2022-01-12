<?php

namespace Creational\FactoryMethod;

/**
 * ---------------------------------------
 * ItalianFactory.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 10:46
 * ---------------------------------------
 */

/**
 * ItalianFactory是意大利的造车厂
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Ferrari();
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}