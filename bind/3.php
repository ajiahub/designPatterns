<?php

/**
 * ---------------------------------------
 * 利用bindTo实现一个简单的模板引擎
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/9 15:37
 * ---------------------------------------
 */
class Article
{
    private $title = "This is an article";
}

class Post
{
    private $title = "This is a post";
}

class Template
{
    function render($context, $tpl)
    {
        $closure = function ($tpl) {
            //ob_start();
            include $tpl;
            //return ob_end_flush();
        };

        $closure = $closure->bindTo($context, $context);
        $closure($tpl);

    }
}

$art = new Article();
$post = new Post();
$template = new Template();

$template->render($art, '3-tpl.php');
$template->render($post, '3-tpl.php');
?>
