<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-5-30
 * Time: 下午3:12
 */


// json转换
$idList = '[5468,"",34,"",546]';
$tt = json_decode($idList);
var_dump($tt);
var_dump(array_filter($tt));