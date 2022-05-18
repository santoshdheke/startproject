<?php

namespace Module\Common;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Admin\Middleware\AuthMiddleware;
use Module\Admin\Middleware\GueshAuthMiddleware;

class CommonServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
