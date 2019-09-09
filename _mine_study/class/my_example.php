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