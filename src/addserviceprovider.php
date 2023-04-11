<?php

namespace Ishu\demo;

use Illuminate\Support\ServiceProvider;

class addserviceprovider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

         $this->app->make('Ishu\demo\addcontroller');
        //  $this->loadViewsFrom(__DIR__.'/views','calculator');

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       include __DIR__.'/route.php';
    }
}
