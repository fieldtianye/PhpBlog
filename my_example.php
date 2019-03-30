<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-3-29
 * Time: 上午11:03
 */

class my_example
{
    public $Uio = "Uio";
    const FF = 0;

    public function __construct(string $init)
    {
        $this->Uio = $init;
        print $init;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "I destructed!\n";
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "my_example";
    }

    function print_info()
    {
        // echo $this->Uio;
        echo "FF => ", my_example::FF, "\n";

        $n = 11;
        $s = "22";
        $f = "22";

        printf("%d%s%f\n", $n, $s, $f); // 112222.000000
        echo "I am echo! <pre>\n";
        print "I am print!\n";

        $arr = [12, 23, 34, 45, 56];
        print_r($arr);
        var_dump($arr);

        // die("Finish\n");
        // exit(0);

        echo 1 << 32, "\n";
        echo 2 ** 32, "\n";
        echo 8 << 32, "\n";
    }
}

//$myEx = new my_example("Loading...\n");
//$myEx->print_info();
//echo str_repeat("=", 50), "\n";
//my_example::print_info();       // not call __construct() and __destruct()

include "vendor/autoload.php";

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