<?php
/**
 * ---------------------------------------
 * 用AOPproxy代理类，组织这些类工作，类之间通讯思想与于中介者模式相似，但是原理截然不同。
 * AOP参考：https://www.zhihu.com/question/24863332
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/6/18 15:40
 * ---------------------------------------
 */

use aop\Sms;
use aop\User;
use aop\Mail;
use aop\AOPProxy;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});
/**
 * 模拟用户注册完成后，发邮件及短信
 * User, Mail, Sms在代码输写时不交互，这些类之间没有依赖关系
 * 通过APO代理，执行user->register时，执行了mail->send, sms->send
 */
$proxy = new AOPProxy(new User());
$proxy->setBefore('register', [new Mail, 'send']);
// $proxy->setAfter('register', [new Sms, 'afterDo']);
// $proxy->setAfter('register', [new Sms, 'afterDo']);
$proxy->setAfter('register', [new Sms, 'send']);

$user_type = 1;
$ret = $proxy->register(['username' => '13999999999'], $user_type);

echo '<pre>';
print_r($ret);
exit('</pre>');