<?php
/**
 * ---------------------------------------
 * index.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:52
 * ---------------------------------------
 */

/**
 * 中介者模式
 * 中介者模式是用来降低多个对象和类之间的通信复杂性。这种模式提供了一个中介类，该类通常处理不同类之间的通信，并支持松耦合，使代码易于维护
 */
use mediator\Mediator;
use mediator\Subsystem\Client;
use mediator\Subsystem\Server;
use mediator\Subsystem\Database;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
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
