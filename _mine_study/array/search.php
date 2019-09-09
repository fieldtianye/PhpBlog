<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-9-9
 * Time: 上午11:19
 */


function array_multiple()
{
    $arr = [
        ["gender" => "FEMALE", "age" => 27, "ques_id" => 46434, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 22, "ques_id" => 131027, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 19, "ques_id" => 52019, "city_level" => 2, "tellyou" => 0, "role_type" => "STUDENT"],
        ["gender" => "MALE", "age" => 21, "ques_id" => 133518, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 31, "ques_id" => 133940, "city_level" => 2, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 20, "ques_id" => 132900, "city_level" => 1, "tellyou" => 0, "role_type" => "STUDENT"],
        ["gender" => "MALE", "age" => 26, "ques_id" => 135191, "city_level" => 2, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 19, "ques_id" => 134467, "city_level" => 3, "tellyou" => 0, "role_type" => "STUDENT"],
        ["gender" => "FEMALE", "age" => 29, "ques_id" => 137099, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 26, "ques_id" => 46104, "city_level" => 1, "tellyou" => 1, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 29, "ques_id" => 90213, "city_level" => 2, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 23, "ques_id" => 52019, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 22, "ques_id" => 97471, "city_level" => 1, "tellyou" => 1, "role_type" => "STUDENT"],
        ["gender" => "FEMALE", "age" => 29, "ques_id" => 52019, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 28, "ques_id" => 67188, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 23, "ques_id" => 137978, "city_level" => 1, "tellyou" => 0, "role_type" => "STUDENT"],
        ["gender" => "MALE", "age" => 18, "ques_id" => 134587, "city_level" => 3, "tellyou" => 1, "role_type" => "STUDENT"],
        ["gender" => "FEMALE", "age" => 17, "ques_id" => 133213, "city_level" => 1, "tellyou" => 0, "role_type" => "STUDENT"],
        ["gender" => "MALE", "age" => 31, "ques_id" => 136157, "city_level" => 3, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 27, "ques_id" => 92106, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"]
    ];
    // print_r($arr);
    // $key = array_search('346', array_column($arr, 'city'));
    // var_dump($key);
    // $key = array_search('erytiurytt', array_column($arr, 'city'));
    // var_dump($key);

    // 多维数据根据字段查询
    $field = 'role_type';
    $key = 'STUDENT';
    $found = array_filter($arr, function ($element) use ($field, $key) {
        return $element[$field] == $key;
    });
    print_r($found);

    $aa = [
        ["gender" => "FEMALE", "age" => 23, "ques_id" => 52019, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 22, "ques_id" => 97471, "city_level" => 1, "tellyou" => 1, "role_type" => "STUDENT"],
        ["gender" => "FEMALE", "age" => 29, "ques_id" => 52019, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "FEMALE", "age" => 28, "ques_id" => 67188, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 23, "ques_id" => 137978, "city_level" => 1, "tellyou" => 0, "role_type" => "STUDENT"]
    ];
    $bb = [
        ["gender" => "FEMALE", "age" => 23, "ques_id" => 52019, "city_level" => 1, "tellyou" => 0, "role_type" => "GRADUATE"],
        ["gender" => "MALE", "age" => 22, "ques_id" => 97471, "city_level" => 1, "tellyou" => 1, "role_type" => "STUDENT"],
        ["gender" => "MALE", "age" => 22, "ques_id" => 97471, "city_level" => 1, "tellyou" => 1, "role_type" => "tfetr"],
    ];

    // 多维数组差集
    //$tt = array_udiff($aa, $bb, function ($aa, $bb) {
    //    return strcmp(implode("", $aa), implode("", $bb));
    //});
    //print_r($tt);

    // 多维数组交集
    $tt = array_uintersect($aa, $bb, function ($aa, $bb) {
        return strcmp(implode("", $aa), implode("", $bb));
    });
    print_r($tt);
}

function array_search_test()
{
    $arr = [
        ["id" => 12, "name" => 'abc'],
        ["id" => 34, "name" => 'def'],
        ["id" => 56, "name" => 'ghi'],
        ["id" => 78, "name" => 'jkl'],
        ["id" => 90, "name" => 'mn']
    ];

    $search = [34, 56];
    $searchArr = [];
    foreach ($search as $id) {
        $key = array_search($id, array_column($arr, 'id'));
        array_push($searchArr, $arr[$key]);
        array_splice($arr, $key, 1);
    }

    $arr = array_merge($searchArr, $arr);
    print_r($arr);
}

function in_array_test()
{
    $arr = [];
    for ($i = 0; $i < 10000; $i++) {
        array_push($arr, random_int(10, 200000));
    }

    //print_r($arr);
    echo '初始化完成', "\n";
    array_flip($arr);


    echo '[BEGIN]', $time = date('Y-m-d H:i:s', time()) . "\n";

    $count = 0;
    //while(true){
    for ($i = 0; $i < 10000000; $i++) {
        array_flip($arr);
        $count++;
    }

    /*
    while (true) {
    for ($i = 0;$i< 10000000;$i++) {
        // $tt = isset($arr[random_int(10, 200000)]);
        var_dump(isset($arr[rando// m_int(10, 200000)]));
        // var_dump(array_key_exists(random_int(10, 200000), $arr));
    }
    */

    /*
    while (true) {
    // for ($i = 0;$i< 1000000;$i++) {
        // $tt = in_array(random_int(10, 200000), $arr);
        var_dump(in_array(random_int(10, 200000), $arr));
    }*/

    echo '[FINISH]', $time = date('Y-m-d H:i:s', time()) . "\n";
}