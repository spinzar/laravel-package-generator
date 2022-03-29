<?php

namespace Spinzar\LaravelPackageGenerator;

use Spinzar\LaravelPackageGenerator\Commands\PackageNew;
use Spinzar\LaravelPackageGenerator\Commands\PackageRemove;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__.'/../config/package-generator.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('package-generator.php'),
        ], 'config');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageNew::class,
                PackageRemove::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'package-generator'
        );
    }
}
