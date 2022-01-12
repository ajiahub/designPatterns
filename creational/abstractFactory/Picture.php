<?php

namespace creational\abstractFactory;

/**
 * ---------------------------------------
 * Picture.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 14:12
 * ---------------------------------------
 */

/**
 * Picture类
 */
abstract class Picture implements MediaInterface
{

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $path
     * @param string $name
     */
    public function __construct($path, $name = '')
    {
        $this->name = (string)$name;
        $this->path = (string)$path;
    }
}