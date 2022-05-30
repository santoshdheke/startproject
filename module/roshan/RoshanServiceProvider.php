<?php

namespace Module\Roshan;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RoshanServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views/','roshan');

        Route::prefix('roshan')
            ->middleware('web')
            ->as('roshan.')
            ->namespace('Module\\Roshan\\Controllers')
            ->group(__DIR__.'/route.php');

    }
}
