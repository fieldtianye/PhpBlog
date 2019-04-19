<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-4-19
 * Time: 上午11:35
 */

class my_class
{
    static function test($obj)
    {
        if (gettype($obj) == 'object')
            $obj->tt2 = "ttt";
        else
            $obj['tt2'] = "ttt";

    }
}


$obj = new stdClass();
$obj->tt = "123";
$obj->tt1 = "234";
$obj->tt2 = "456";

my_class::test($obj);   // 引用地址调用
var_dump($obj);

$arr = array(['tt' => "123", 'tt1' => "234", 'tt2' => "456"]);
my_class::test($arr);   // 值拷贝调用
var_dump($arr);