<?php

namespace structural\adapter;

/**
 * ---------------------------------------
 * EBookInterface.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 15:45
 * ---------------------------------------
 */

/**
 * EBookInterface 是电子书接口
 */
interface EBookInterface
{
    /**
     * 电子书翻页
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * 打开电子书
     *
     * @return mixed
     */
    public function pressStart();
}