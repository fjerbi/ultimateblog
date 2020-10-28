<?php

namespace fjerbi\ultimateblog;

use illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'ultimateblog'); 
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/front' => public_path('vendor/fjerbi/ultimateblog'),
        ], 'public');
        $this->publishes([
            __DIR__.'ultimateblog/database/migrations/' => database_path('migrations')
        ], 'migrations');

    }
    public function register()
    {
        
    }
}