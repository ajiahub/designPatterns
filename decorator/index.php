<?php

/**
 * ---------------------------------------
 * index.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 11:05
 * ---------------------------------------
 */

use decorator\Webservice;
use decorator\RenderInJson;
use decorator\RenderInXml;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

class Index
{
    private $service;

    /**
     * @inheritdoc
     * Index constructor.
     */
    public function __construct()
    {
        $this->service = new Webservice(array('foo' => 'bar'));
    }

    /**
     * 正常输出数据
     * @return string
     */
    public function renderData()
    {
        return $this->service->renderData();
    }

    /**
     * 输出json数据
     * @return mixed|string
     */
    public function renderJsonData()
    {
        $test = new RenderInJson($this->service);
        echo "<pre>";
        print_r($test);
        return $test->renderData();
    }

    /**
     * 输出xml数据
     * @return mixed|string
     */
    public function renderXmlData()
    {
        return (new RenderInXml($this->service))->renderData();
    }
}

$index = new Index();
echo "<Pre>";
print_r($index);
print_r($index->renderData());
print_r($index->renderJsonData());
print_r($index->renderXmlData());


