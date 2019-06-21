<?php

namespace structural\facade;
/**
 * ---------------------------------------
 * CentOS.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 9:59
 * ---------------------------------------
 */
class CentOS implements OsInterface
{
    public function halt()
    {
        echo "停止" . PHP_EOL;
    }

    public function getName(): string
    {
        echo "centOS 7" . PHP_EOL;
    }
}