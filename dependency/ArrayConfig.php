<?php

namespace dependency;
/**
 * ---------------------------------------
 * ArrayConfig.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/29 14:09
 * ---------------------------------------
 */

/**
 * ArrayConfig类
 *
 * 使用数组作为数据源
 */
class ArrayConfig extends AbstractConfig implements Parameters
{
    /**
     * 获取参数
     *
     * @param string|int $key
     * @param null $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }
        return $default;
    }

    /**
     * 设置参数
     *
     * @param string|int $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}