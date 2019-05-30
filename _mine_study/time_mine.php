<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-5-30
 * Time: 下午3:10
 */

require_once '_common.php';


// date_default_timezone_set('UTC');
$start_time = date('Y-m-d H:i:s', time());
println(date("Y-m-d"));
println($start_time);
println(strtotime('now'));


function heartbeat()
{
    function m_sectime()
    {
        list($msec, $sec) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        // return (int)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    }

    $m_sectime = m_sectime();
    echo $m_sectime . "\n";
}

heartbeat();