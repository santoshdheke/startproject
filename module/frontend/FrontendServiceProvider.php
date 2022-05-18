<?php

namespace Module\Frontend;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Frontend\Middleware\AuthMiddleware;
use Module\Frontend\Middleware\GueshAuthMiddleware;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('frontendauth', AuthMiddleware::class);
        app('router')->aliasMiddleware('frontendguesh', GueshAuthMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/','frontendview');

        Route::domain(config('app.url'))
            ->middleware('web')
            ->namespace('Module\\Frontend\\Controllers')
            ->group(__DIR__.'/route.php');

        /*Route::domain('pasapi.com')
            ->namespace('Module\\Frontend\\Controllers')
            ->group(__DIR__.'/route.php');*/
    }
}
