<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-5-30
 * Time: 下午3:09
 */


$str = '2019012321.txt';
println(substr($str, 0, 10));


function str_common()
{
    $content = '多岁的esdraesrf';
    var_dump(strstr($content, '多岁的'));

    echo str_replace('多岁的', '', $content);
}