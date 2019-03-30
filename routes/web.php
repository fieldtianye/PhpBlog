<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/user/{id}', function ($id) use ($router) {
    if ($id == "wd") {
        return 'Hello, world!';
    } else {
        return 'Hello, ' . $id . '!';
    }
});

$router->get('/api/get-list/{index}', ['as' => 'get-lister', 'uses' => 'UserController@getlist']);
$router->get('/api/get-parameters', ['as' => 'get-parameters', 'uses' => 'UserController@getParams']);

echo "\n", route("get-lister"), "\n";
echo route("get-parameters"), "\n\n";
echo app('user')->test(), "\n";