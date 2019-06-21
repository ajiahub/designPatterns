<?php

namespace creational\abstractFactory\html;

use creational\abstractFactory\Text as BaseText;

/**
 * ---------------------------------------
 * Text.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 14:16
 * ---------------------------------------
 */

/**
 * Class Text
 *
 * 该类是以 JSON 格式输出的具体文本组件类
 */
class Text extends BaseText
{
    /**
     * 以 JSON 格式输出的渲染
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}
