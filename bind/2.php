<?php
/**
 * ---------------------------------------
 * bindTo和bind的区别
 * 参考：https://www.cnblogs.com/eleven24/p/7487923.html
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/9 15:37
 * ---------------------------------------
 */
$closure = function ($name, $age) {
    static::$name = $name;
    static::$age = $age;
};

class Person
{
    static $name;
    static $age;

    public static function say()
    {
        echo "My name is " . static::$name . ", I'm " . static::$age . " years old.\n";
    }
}

//把$closure中的static绑定为Person类
//这样在$bound_closure中设置name和age的时候实际上是设置Person的name和age
//也就是绑定了指定的static(Person)

$bound_closure = $closure->bindTo(null, Person::class);
//$bound_closure = Closure::bind($closure, null, Person::class);
$bound_closure('php', 100);
Person::say();