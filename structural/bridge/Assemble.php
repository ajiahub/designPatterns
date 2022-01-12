<?php

namespace structural\bridge;

/**
 * ---------------------------------------
 * Assemble.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 16:49
 * ---------------------------------------
 */

/**
 * 具体实现：Assemble
 */
class Assemble implements Workshop
{
    public function work()
    {
        print 'Assembled';
    }
}