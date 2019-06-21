<?php

namespace structural\bridge;
/**
 * ---------------------------------------
 * Produce.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 16:50
 * ---------------------------------------
 */

/**
 * 具体实现：Produce
 */
class Produce implements Workshop
{
    public function work()
    {
        print 'Produced ';
    }
}