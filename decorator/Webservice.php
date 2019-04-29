<?php

namespace decorator;
/**
 * ---------------------------------------
 * Webservice.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 10:35
 * ---------------------------------------
 */

/**
 * Webservice类
 */
class Webservice implements RendererInterface
{
    /**
     * @var mixed
     */
    protected $data;

    /**
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function renderData()
    {
        return $this->data;
    }
}