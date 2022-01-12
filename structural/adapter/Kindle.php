<?php

namespace structural\adapter;

/**
 * ---------------------------------------
 * Kindle.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 15:45
 * ---------------------------------------
 */

/**
 * Kindle 是电子书实现类
 */
class Kindle implements EBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
        echo "下一页";
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
        echo "打开电子书";
    }
}