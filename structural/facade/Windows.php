<?php

namespace structural\facade;

/**
 * ---------------------------------------
 * Windows.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/21 9:58
 * ---------------------------------------
 */
class Windows implements BiosInterface
{
    public function execute()
    {
        echo "执行" . PHP_EOL;
    }

    public function waitForKeyPress()
    {
        echo "等待输入" . PHP_EOL;
    }

    public function launch(OsInterface $os)
    {
        echo "启动" . PHP_EOL;
    }

    public function powerDown()
    {
        echo "关机" . PHP_EOL;
    }
}