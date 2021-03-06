<?php

namespace App\Providers;

use App\Aspect\LoggingAspect;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LoggingAspect::class, function (Application $app) {
            return new LoggingAspect($app->make(LoggerInterface::class));
        });

        $this->app->tag([LoggingAspect::class], 'goaop.aspect');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
