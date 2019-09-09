<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-9-9
 * Time: 上午11:15
 */


function foreachArray()
{
    $aa = [
        '0' => ["1" => 1],
        '1' => ["1" => 3],
        '2' => ["1" => 4],
        '3' => ["1" => 5],
        '4' => ["1" => 6],
        '5' => ["1" => 7]
    ];
    foreach ($aa as $id => $value)
        echo $id . " | " . var_export($value, true) . "\n";

    $arr = ["friend", "10_follow_15", "15_follow_10"];

    foreach ($arr as $item)
        echo $item, "\n";

    // print_r($arr);
    foreach ($arr as $key => $value)
        echo $key, ' ', $value, "\n";

    $arr = array_flip($arr);
    // print_r($arr);

    foreach ($arr as $key => $value)
        echo $key, ' ', $value, "\n";

    $tt = ['ewr' => 'own'];
    // $tt['intimacy'] = 1;
    var_dump($tt['intimacy']);
    $tt['intimacy'] = null + 50;
    echo $tt['intimacy'] . "\n";
}


function test2()
{
    $json = '{"191355_follow_10":1553654268,"10_follow_191355":1553655774,"friend":1553655774}';

    $userA = 10;
    $userB = 191355;

    // $key = $this->getDetailKey(10, 191355);
    $originRelation = json_decode($json, true);

    $today = date('Y-m-d', time());
    $chat_count = $originRelation['chat_count'] ?? [];

    $aToB = true;

    if (!isset($chat_count[$today])) {
        $chat_count[$today] = [];
    }

    // 最近七天互动消息数
    // if ($aToB) {
    //     // A向B发的消息数
    //     $count = $chat_count[$today]["{$userA}_{$userB}"] ?? 0;
    //     $chat_count[$today]["{$userA}_{$userB}"] = $count + 2;
    // } else {
    //     // B向A发的消息数
    //     $count = $originRelation[$today]["{$userB}_{$userA}"] ?? 0;
    //     $originRelation[$today]["{$userB}_{$userA}"] = $count + 2;
    // }

    $yesterday = date('Y-m-d', strtotime('-1 day'));
    $tomorrow = date('Y-m-d', strtotime('+1 day'));

    // yesterday
    $count = $chat_count[$yesterday]["{$userA}_{$userB}"] ?? 0;
    $chat_count[$yesterday]["{$userA}_{$userB}"] = $count + 2;
    $count = $chat_count[$yesterday]["{$userB}_{$userA}"] ?? 0;
    $chat_count[$yesterday]["{$userB}_{$userA}"] = $count + 2;

    // today
    $count = $chat_count[$today]["{$userA}_{$userB}"] ?? 0;
    $chat_count[$today]["{$userA}_{$userB}"] = $count + 2;
    $count = $chat_count[$today]["{$userB}_{$userA}"] ?? 0;
    $chat_count[$today]["{$userB}_{$userA}"] = $count + 2;

    // tomorrow
    $count = $chat_count[$tomorrow]["{$userA}_{$userB}"] ?? 0;
    $chat_count[$tomorrow]["{$userA}_{$userB}"] = $count + 2;
    $count = $chat_count[$tomorrow]["{$userB}_{$userA}"] ?? 0;
    $chat_count[$tomorrow]["{$userB}_{$userA}"] = $count + 2;

    $originRelation['chat_count'] = $chat_count;

    // 总亲密度 +2
    $originRelation['intimacy'] = ($originRelation['intimacy'] ?? 0) + 2;

    print_r($originRelation);

    // $originRelation['intimacy_chat_2019-06-11'] = [51, 15];
    // $originRelation['intimacy_chat_2019-06-10'] = [70, 62];
    // $originRelation['intimacy_chat_2019-06-09'] = [25, 40];
    // $originRelation['intimacy_chat_2019-06-08'] = [22, 25];
    // $originRelation['intimacy_chat_2019-06-07'] = [36, 20];
    // $originRelation['intimacy_chat_2019-06-06'] = [11, 22];
    // $originRelation['intimacy_chat_2019-06-05'] = [42, 40];

    // try {
    //     $this->db->redis('user')->set($key, json_encode($originRelation));
    // } catch (\Exception $e) {
    //     \LogHelper::error('[聊天亲密度加分异常]' . $e->getTraceAsString());
    // }
}