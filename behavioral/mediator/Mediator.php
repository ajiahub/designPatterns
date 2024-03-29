<?php

namespace behavioral\mediator;

use behavioral\mediator\Subsystem\Client;
use behavioral\mediator\Subsystem\Database;
use behavioral\mediator\Subsystem\Server;

/**
 * ---------------------------------------
 * Mediator.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 13:47
 * ---------------------------------------
 */

/**
 * Mediator是中介者模式的具体实现类
 * In this example, I have made a "Hello World" with the Mediator Pattern.
 */
class Mediator implements MediatorInterface
{
    /**
     * @var Subsystem\Database
     */
    public $database;
    /**
     * @var Subsystem\Client
     */
    protected $client;
    /**
     * @var Subsystem\Server
     */
    private $server;

    /**
     * @param Subsystem\Database $db
     * @param Subsystem\Client   $cl
     * @param Subsystem\Server   $srv
     */
    public function setColleague(Database $db, Client $cl, Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    /**
     * 发起请求
     */
    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * 查询数据库
     *
     * @return mixed
     */
    public function queryDb()
    {
        return $this->database->getData();
    }

    /**
     * 发送响应
     *
     * @param string $content
     */
    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}