<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: tianye
 * Date: 19-3-29
 * Time: 下午4:04
 */
class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('user', function () {
            return new UserFactory();
        });
    }
}

class UserFactory
{
    public function Test()
    {
        return 'test';
    }
}