<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-4-13
 * Time: 下午5:05
 */

var_dump(date('Y-m-d H:i:s',time()));

// 0, '0', null is false, other is true
$tmp = 0;
if ($tmp)
    echo "true\n\n";
else
    echo "false\n\n";


$obj = ["data" => 100];
echo "\ndata =====> ", $obj['data'];
// echo "\ndata =====> ", $obj->data;  // syntax wrong

class My {
    var $data = 'default';
}

$my = new My();
echo "\nnew my =====> ", $my->data;
// echo "\nnew my =====> ", $my['data'];  // syntax wrong

$operator_list = [1,2,3,4,5,6,7,8,9];
echo "\noperator_list =====> ", implode($operator_list, "','");



echo number_format(2888 / 41917792, 10, '.', '');