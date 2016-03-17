<?php

namespace Spatie\Valuestore;

use Illuminate\Support\ServiceProvider;

class ValuestoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/valuestore.php' => config_path('valuestore.php'),
        ], 'config');


        /*
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
        ], 'views');
        */
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/valuestore.php', 'valuestore');

        $this->app->bind(
            'valuestore',
            'Spatie\Valuestore\Valuestore'
        );
    }
}
