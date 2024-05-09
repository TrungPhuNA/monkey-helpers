<?php

namespace Monkey\Helpers;
use Illuminate\Support\ServiceProvider;

/**
 * Created By PhpStorm
 * User: trungphuna
 * Date: 5/10/24
 * Time: 12:31 AM
 */
class MonkeyHelpersService extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}