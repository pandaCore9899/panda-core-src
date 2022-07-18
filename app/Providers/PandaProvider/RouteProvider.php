<?php

namespace App\Providers\PandaProvider;

use Illuminate\Routing\Router;
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

        Router::macro('import', function ($prefix, $controller) {
            Route::get("{$prefix}.import", [$controller, "importIndex"])->middleware('auth')->name("import.index");
            Route::post("{$prefix}.import", [$controller, "import"])->middleware('auth')->name("import.save");
            Route::post("{$prefix}.import.confirm", [$controller, "confirmIndex"])->middleware('auth')->name("confirm.confirm");
            Route::get("{$prefix}.import.result", [$controller, "confirmResult"])->middleware('auth')->name("confirm.result");
        });
    
        Route::macro("crud", function ($prefix, $controller) {
            Route::group(
                    [
                        'prefix' => $prefix,
                        'as' => $prefix . '.'
                    ],
                    function () use ($prefix,$controller) {
                        Route::get("", [$controller, 'index'])->name("index"); //show list
                        Route::get("show", [$controller, 'index'])->name("show"); //show item 
                        Route::get("create", [$controller, 'create'])->name("create");// show form create
                        Route::post("store",  [$controller, 'store'])->name("store"); // save to db
                        Route::put("update", [$controller, 'index'])->name("update");// update data
                        Route::delete("delete", [$controller, 'delete'])->name("delete");// delete
                    }
                );
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
