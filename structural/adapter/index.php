<?php

use structural\adapter\EBookAdapter;
use structural\adapter\Kindle;

/**
 * ---------------------------------------
 * 定义：Adapter模式使得原本由于接口不兼容而不能一起工作那些类可以一起工作。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/20 15:42
 * ---------------------------------------
 */


spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

//$book = new Book();
// 我们在适配器中引入了电子书，实际工作中将由容器统一实例化
$book = new EBookAdapter(new Kindle());
$open = $book->open();
$turnPage = $book->turnPage();
echo "<Pre>";
print_r($book);