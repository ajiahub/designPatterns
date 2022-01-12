<?php

/**
 * ---------------------------------------
 * index.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 14:07
 * ---------------------------------------
 */
spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use structural\dependency\ArrayConfig;
use structural\dependency\Connection;

class Index
{
    protected $config;
    protected $source;

    /**
     * @inheritdoc
     * Index constructor.
     */
    public function __construct()
    {
        $this->source = include 'config.php';
        $this->config = new ArrayConfig($this->source);
//        $this->config->set('test2', function () {
//            return $this->source;
//        });
        echo "<pre>";
        print_r($this->config);
    }

    /**
     * @inheritdoc
     */
    public function testDependencyInjection()
    {
        $connection = new Connection($this->config);
        echo "<pre>";
        print_r($connection);
        $connection->connect();
        echo "<pre>";
        print_r($connection);
        return $connection->getHost();
    }
}

$index = new Index();
$test = $index->testDependencyInjection();
print_r($test);