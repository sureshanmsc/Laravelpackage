<?php

namespace Suresh\Samppackage;

use Illuminate\Support\ServiceProvider;

class SamppackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Suresh\Samppackage\SamppackageController');
        $this->loadViewsFrom(__DIR__."/views","samppackage");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       include __DIR__."/routes.php";
    }
}
