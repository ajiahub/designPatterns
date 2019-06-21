<?php

namespace creational\abstractFactory\json;

use creational\abstractFactory\Picture as BasePicture;

/**
 * ---------------------------------------
 * Picture.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 14:15
 * ---------------------------------------
 */

/**
 * Picture类
 *
 * 该类是以 JSON 格式输出的具体图片组件类
 */
class Picture extends BasePicture
{
    /**
     * JSON 格式输出
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('title' => $this->name, 'path' => $this->path));
    }
}