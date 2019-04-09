<?php

/**
 * ---------------------------------------
 * Closure::bindTo — 复制当前闭包对象，绑定指定的$this对象和类作用域。
 * 创建并返回一个 匿名函数， 它与当前对象的函数体相同、绑定了同样变量，但可以绑定不同的对象，也可以绑定新的类作用域。
 * 从我个人理解，和js里面的call函数有点类似。可以改变闭包对象及其指定的作用域。
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/9 15:37
 * ---------------------------------------
 */
trait DynamicDefinition
{
    public function __call($name, $args)
    {
        if (is_callable($this->$name)) {
            return call_user_func($this->$name, $args);
        } else {
            throw new \RuntimeException("Method {$name} does not exist");
        }
    }

    public function __set($name, $value)
    {
        $this->$name = is_callable($value) ?
            $value->bindTo($this, $this) :
            $value;
    }
}

class Foo
{
    use DynamicDefinition;
    protected $privateValue = 'I am private';
}

$foo = new Foo;
$foo->bar = function () {
    return $this->privateValue;
};

// prints 'I am private'
print $foo->bar();
?>