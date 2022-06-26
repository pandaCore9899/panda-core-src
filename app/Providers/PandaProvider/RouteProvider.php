<?php

namespace App\Providers\PandaProvider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Route::macro('withAuth', function($route,$method){

        });
        Route::macro('import', function($prefix,$controller){
            Route::get("{$prefix}.import.index", [$controller, 'importIndex'])->name("{$prefix}.import.index");

        });
        Route::macro('crud', function($prefix, $controller){
            Route::get("{$prefix}.index", [$controller, 'index'])->name("{$prefix}.index");
            Route::get("{$prefix}.show", [$controller, 'index'])->name("{$prefix}.show");
            Route::post("{$prefix}.create", [$controller, 'create'])->name("{$prefix}.create");
            Route::put("{$prefix}.update", [$controller, 'index'])->name("{$prefix}.update");
            Route::get("{$prefix}.delete", [$controller, 'index'])->name("{$prefix}.show");
        });
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
