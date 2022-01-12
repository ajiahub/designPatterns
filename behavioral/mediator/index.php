<?php

use behavioral\mediator\Mediator;
use behavioral\mediator\Subsystem\Client;
use behavioral\mediator\Subsystem\Database;
use behavioral\mediator\Subsystem\Server;

/**
 * ---------------------------------------
 * 定义：中介者模式通常用于处理不同类之间的通信，该模式提供了一个中介类，使各对象不需要显式地相互引用，并支持松耦合，使代码易于维护
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:52
 * ---------------------------------------
 */

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

class Index
{
    public $client;

    public function __construct()
    {
        $media = new Mediator();
        $this->client = new Client($media);
        echo "<pre>";
        print_r($this->client);
        $media->setColleague(new Database($media), $this->client, new Server($media));
        echo "<pre>";
        print_r($this->client);
    }
}

$test = new Index();
$test->client->request();
