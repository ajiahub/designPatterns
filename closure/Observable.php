<?php

namespace closure;
/**
 * ---------------------------------------
 * Observable.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/28 10:12
 * ---------------------------------------
 */
interface Observable
{
    public function attach(\Closure $closure);

    public function detach(\Closure $closure);

    public function notify();
}