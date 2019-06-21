<?php
/**
 * 定义：将对象组合成树形结构以表示部分整体的关系，Composite使得用户对单个对象和组合对象的使用具有一致性。
 */

use structural\composite\Knife;
use structural\composite\Force;
use structural\composite\BasicRole;
use structural\composite\SuperRole;

spl_autoload_register(function ($class) {
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});


$role = new SuperRole;
if (!is_null($role->getComposite())) {
    $role->addEquipment(new BasicRole);
    $role->addEquipment(new Knife);
    $role->addEquipment(new Force);
}

echo "<pre>";
//print_r($role);
echo '组合前，我的攻击力是：', $role->attack();

$test = new SuperRole();
$test->addEquipment(new Knife);
$test->addEquipment(new Force);

$role->addEquipment($test);


//$role->removeEquipment(new Knife());
//print_r($role);
echo '组合后，我的攻击力是：', $role->attack();