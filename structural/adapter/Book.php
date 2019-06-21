<?php

namespace structural\adapter;

/**
 * ---------------------------------------
 * Book.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 15:43
 * ---------------------------------------
 */

/**
 * Book 是纸质书实现类
 */
class Book implements PaperBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
        echo "打开书本";
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
        echo "下一页";
    }
}