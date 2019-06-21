<?php

namespace structural\proxy;
/**
 * ---------------------------------------
 * RealSubject.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 11:01
 * ---------------------------------------
 */
class RealSubject implements Subject
{
    public function request()
    {
        echo "do request" . PHP_EOL;
    }
}