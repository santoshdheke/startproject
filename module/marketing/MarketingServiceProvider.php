<?php

namespace Module\Marketing;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Module\Marketing\Middleware\AuthMiddleware;
use Module\Marketing\Middleware\GueshAuthMiddleware;

class MarketingServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('marketingauth', AuthMiddleware::class);
        app('router')->aliasMiddleware('marketingguesh', GueshAuthMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/','marketingview');

        Route::domain(config('app.marketing_url'))
            ->middleware('web')
            ->as('marketing.')
            ->namespace('Module\\Marketing\\Controllers')
            ->group(__DIR__.'/route.php');

        /*Route::domain('pasapi.com')
            ->namespace('Module\\Marketing\\Controllers')
            ->group(__DIR__.'/route.php');*/
    }
}
