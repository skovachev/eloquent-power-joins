<?php

namespace KirschbaumDevelopment\EloquentJoins;

use Illuminate\Support\ServiceProvider;

class EloquentJoinsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        EloquentJoins::registerEloquentMacros();
    }
}
