<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Handler\testHandler;
use App\Handler\testZhHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // dd(testHandler::class);
        $this->app->bind(testHandler::class, function () {
            return new testZhHandler();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
