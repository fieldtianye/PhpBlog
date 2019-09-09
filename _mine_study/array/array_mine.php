<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-5-30
 * Time: 下午3:09
 */

require_once '../_common.php';

// TODO 数组转字符串
$userList = [123, 456, 789];
println("'" . implode("','", $userList) . "'");

// 数组搜索
$a = array("a" => "red", "b" => "green", "c" => "blue");
println(array_search("green", $a));

// TODO 数组判断值
$aa = ['a' => 123];
var_dump($aa['b'] ?? '22222');

// TODO stdClass and array
$response = [];
for ($i = 0; $i < 5; $i++) {
    $item = new stdClass();
    $item->owner = $i;
    array_push($response, $item);
}
$ownerIds = [];
foreach ($response as $item) {
    // $ownerIds[] = $item->owner;
    array_push($ownerIds, $item->owner);
}
print_r($ownerIds);

// TODO 数组交集
$aa = [11,22,33,44,55];
$bb = [44,55,33,66,77];
$intersect = array_intersect($aa, $bb);
print_r($intersect);

// TODO 数组长度
$arr = [44,55,33];
println(count($arr));
$arr=array(
    0=>array('title' => '新闻1', 'viewnum' => 123, 'content' => 'ZAQXSWedcrfv'),
    1=>array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM')
);
println(count($arr, 0));
println(count($arr, 1));