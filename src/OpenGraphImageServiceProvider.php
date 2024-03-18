<?php

declare(strict_types=1);

namespace Fractal512\LaravelOpenGraphImage;

use Illuminate\Support\ServiceProvider;

class OpenGraphImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            /* Publishing config */
            $this->publishes([
              __DIR__ . '/../config/open-graph-image.php' => config_path('open-graph-image.php'),
            ], 'open-graph-image-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        /* Automatically apply the package configuration */
        $this->mergeConfigFrom(__DIR__ . '/../config/open-graph-image.php', 'open-graph-image');

        /* Register the main class to use with the facade */
        $this->app->singleton('laravel-open-graph-image', function () {
            return new OpenGraphImage();
        });
    }
}
