<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-4-13
 * Time: 下午5:03
 */

class lumen_test
{

}

include "../vendor/autoload.php";

// TODO 检查一下消息是否命中spam关键字并且需要过滤或者替换
$client = new \GuzzleHttp\Client(['base_uri' => 'http://39.96.206.29:9005']);
$text = '{"body": { "text": "辅导辅导费习近平"}}';
$response = $client->request("POST", "/search", ['body' => $text]);
$body = $response->getBody();
// Implicitly cast the body to a string and echo it
echo $body, "\n";

// Read 10 bytes from the body
// $tenBytes = $body->read(10);
// Read the remaining contents of the body as a string
// $remainingBytes = $body->getContents();

// Explicitly cast the body to a string
$stringBody = (string)$body;
echo $stringBody, "\n";
$map = json_decode($stringBody, true);
var_dump($map["valid"]);