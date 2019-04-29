<?php

namespace dependency;
/**
 * ---------------------------------------
 * AbstractConfig.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 14:07
 * ---------------------------------------
 */

/**
 * AbstractConfig类
 */
abstract class AbstractConfig
{
    /**
     * @var Storage of data
     */
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}