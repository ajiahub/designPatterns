<?php

namespace behavioral\mediator\Subsystem;

use behavioral\mediator\Colleague;

/**
 * ---------------------------------------
 * Database.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:49
 * ---------------------------------------
 */

/**
 * Database提供数据库服务
 */
class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return "World";
    }
}