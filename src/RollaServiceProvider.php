<?php

namespace Desemax\Rolla;

use Illuminate\Support\ServiceProvider;

class RollaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/rolla.php' => config_path('rolla.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'rolla');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/rolla'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'rolla');
    }
}
