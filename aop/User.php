<?php

namespace aop;

/**
 * ---------------------------------------
 * User.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/18 15:40
 * ---------------------------------------
 */
class User
{
    public function register($data, $type)
    {
        echo 'register done<br/>';
        return compact('data', 'type');
    }
}