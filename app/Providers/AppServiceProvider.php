<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \URL::forceScheme('https'); //デプロイ時はコメントアウトを外す。開発環境ではコメントアウトをする。
        $this->app['request']->server->set('HTTPS','on'); //デプロイ時はコメントアウトを外す。開発環境ではコメントアウトをする。
        Paginator::useBootstrap();
        //Paginator::useBootstrapFive();
        //Paginator::useBootstrapFour();
    }
}
