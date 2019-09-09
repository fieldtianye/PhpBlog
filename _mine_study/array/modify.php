<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-9-9
 * Time: 上午11:18
 */


function test_modify_array()
{
    $tt = [
        1 => ['aa' => 2, 'bb' => 2],
        2 => ['aa' => 2, 'bb' => 2],
        3 => ['aa' => 2, 'bb' => 2],
        4 => ['aa' => 2, 'bb' => 2],
        5 => ['aa' => 2, 'bb' => 2],
    ];
    foreach ($tt as $id => &$item) {
        if ($id == 4)
            $item['bb'] = 5;
    }
    print_r($tt);
}



function test_rand_array()
{
    echo md5(time() . mt_rand(1, 1000000)) . "\n";
    echo uniqid('[Field]', true) . "\n";

    $a = array("a" => "Dog", "b" => "Cat", "c" => "Horse");
    print_r(array_rand($a, 3));

    $str = '{"1": 2,"2": 5,"3": 10,"7": 258}';
    // $obj = json_decode($str, true);
    $obj = json_decode($str);
    foreach ($obj as $type => $valueId)
        echo $type, ' | ', $valueId, "\n";

    $originRelation = [];
    $originRelation['intimacy'] = 100;
    $originRelation['intimacy'] = ($originRelation['intimacy'] ?? 0) + 50;
    echo $originRelation['intimacy'] . "\n";
}