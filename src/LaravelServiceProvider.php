<?php

declare(strict_types=1);

namespace Boson\Bridge\Laravel\Provider;

use Illuminate\Support\ServiceProvider;

final class LaravelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            \dirname(__DIR__) . '/resources/config/octane.php',
            'octane'
        );
    }

    public function boot(): void
    {
        $this->publishes([
            \dirname(__DIR__) . '/resources/config/octane.php' => config_path('octane.php'),
            \dirname(__DIR__) . '/resources/stubs/boson' => base_path('boson'),
        ]);
    }
}
