<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-9-9
 * Time: 上午11:20
 */


function test_object()
{
    $tt = ['aa' => 'bb', 'cc' => 'dd'];
    $obj = new \stdClass();
    $obj->aa = 'bb';
    $obj->bb = 'cc';
    $obj->cc = 'dd';
    echo '[Parameter] ----- ' . http_build_query($obj) . "\n";

    var_dump(isset($obj->dd));
}