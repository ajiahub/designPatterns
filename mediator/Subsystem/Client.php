<?php

namespace mediator\Subsystem;

use mediator\Colleague;
use mediator\MediatorInterface;

/**
 * ---------------------------------------
 * Client.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:49
 * ---------------------------------------
 */

/**
 * Client是发起请求&获取响应的客户端
 */
class Client extends Colleague
{
    protected $test;

    private $test3;

    public function __construct(MediatorInterface $mediator)
    {
        $this->test = new Test();
        $this->test3 = function () {
            return new Test();
        };
        parent::__construct($mediator);
    }

    /**
     * request
     */
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    /**
     * output content
     *
     * @param string $content
     */
    public function output($content)
    {
        echo $content;
    }
}