<?php

namespace structural\bridge;
/**
 * ---------------------------------------
 * Motorcycle.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 16:50
 * ---------------------------------------
 */

/**
 * 经过改良的抽象实现：Motorcycle
 */
class Motorcycle extends Vehicle
{
    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        parent::__construct($workShop1, $workShop2);
    }

    public function manufacture()
    {
        print 'Motorcycle ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}