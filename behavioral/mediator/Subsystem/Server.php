<?php

namespace behavioral\mediator\Subsystem;

/**
 * ---------------------------------------
 * Server.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:51
 * ---------------------------------------
 */

use behavioral\mediator\Colleague;

/**
 * Server用于发送响应
 */
class Server extends Colleague
{
    /**
     * process on server
     */
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}