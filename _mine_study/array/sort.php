<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-9-9
 * Time: 上午11:20
 */


function multiple_sort()
{
    $data = array(
        array(
            'id' => 5698,
            'first_name' => 'Bill',
            'last_name' => 'Gates',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Steve',
            'last_name' => 'Aobs',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Mark',
            'last_name' => 'Zuckerberg',
        )
    );

//根据字段last_name对数组$data进行降序排列
    $last_names = array_column($data, 'last_name');
    array_multisort($last_names, SORT_DESC, $data);

    var_dump($data);


    // 二位数组排序 column 为 index
    $rr = [
        ['a', 2.1, [11, 12]],
        ['b', 5.2, [11, 12]],
        ['c', 9.3, [11, 12]],
        ['d', 4.4, [11, 12]],
        ['e', 7.5, [11, 12]],
        ['f', 6.6, [11, 12]],
        ['g', 1.7, [11, 12]],
    ];
    $distance = array_column($rr, '1');
    print_r($distance);
    array_multisort($distance, SORT_ASC, $rr);
    echo(json_encode($rr));
}

function test_array_sort()
{
    $data = [];
    $timeMake = date('Y-m-d H:i:s', time());
    for ($i = 0; $i < 1000000; $i++)
        array_push($data, ['abc' . random_int(-100000, -1), random_int(1, 1000000), [11, 12]]);

    $timeStart = date('Y-m-d H:i:s', time());
    $distance = array_column($data, '1');
    // print_r($distance);
    array_multisort($distance, SORT_ASC, $data);
    $timeEnd = date('Y-m-d H:i:s', time());
    // foreach ($data as $item)
    //     echo json_encode($item) . "\n";
    echo $timeMake . ' ----- ' . $timeStart . ' ----- ' . $timeEnd;
}