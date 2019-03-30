<?php
/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-3-26
 * Time: 下午4:12
 */

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{

    /**
     * @param int $index
     * @return string
     */
    function getList(int $index): string
    {
        $jsonString = '{
                    "index": ' . $index . ', "user": "Field", "love": "Ice", "power": [1,2,3,4,5],
                    "other": {
                        "employees": [
                            { "firstName":"Bill" , "lastName":"Gates" },
                            { "firstName":"George" , "lastName":"Bush" },
                            { "firstName":"Thomas" , "lastName":"Carter" }
                        ]
                    }
                }';
        return $jsonString;
    }

    function getParams(Request $request) {
        $tmp = var_dump($request -> ip()) . "\n" .  var_dump($request -> ips());

        return $tmp;
    }
}
