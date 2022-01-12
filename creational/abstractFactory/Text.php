<?php

namespace creational\abstractFactory;

/**
 * ---------------------------------------
 * Text.php
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 14:12
 * ---------------------------------------
 */

/**
 * Text类
 */
abstract class Text implements MediaInterface
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = (string)$text;
    }
}