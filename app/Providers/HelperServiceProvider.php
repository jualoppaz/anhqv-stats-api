<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('utils', function()
        {
            return new App\Helpers\Utils;
        });
    }
}
