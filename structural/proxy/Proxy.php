<?php

namespace structural\proxy;

/**
 * ---------------------------------------
 * Proxy.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 11:01
 * ---------------------------------------
 */
class Proxy extends RealSubject implements Subject
{
    public function request()
    {
        $this->preRequest();
        parent::request();
        $this->afterRequest();
    }

    public function preRequest()
    {
        echo "preRequest" . PHP_EOL;
    }

    public function afterRequest()
    {
        echo "afterRequest" . PHP_EOL;
    }
}