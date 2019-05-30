<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-5-30
 * Time: 下午3:10
 */


const SEPARATE_LINE = "==================================================";

function println(string $str)
{
    echo "{$str}\n" . SEPARATE_LINE . "\n";
}