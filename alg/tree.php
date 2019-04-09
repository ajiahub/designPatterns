<?php
/**
 * ---------------------------------------
 * 把返回二维数组数据集转换成Tree
 * Author: ligang <ligang@chexiu.cn>
 * Date: 2019/4/9 16:08
 * ---------------------------------------
 */

function ListToTree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    $tree = [];
    if (is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] =& $list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] =& $list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent =& $refer[$parentId];
                    $parent[$child][] =& $list[$key];
                }
            }
        }
    }
    return $tree;
}