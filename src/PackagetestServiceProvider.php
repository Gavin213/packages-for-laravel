<?php

namespace Aex\Packagetest;

use Illuminate\Support\ServiceProvider;

class PackagetestServiceProvider extends ServiceProvider
{
//    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        $this->loadViewsFrom(__DIR__.'/views','Aex\Packagetest');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('packagetest', function($app){
            return new Packagetest();
        });
    }

//    public function provides()
//    {
//        return ['packagetest'];
//    }
}
