<?php

namespace App\Providers;

use App\Http\Services\Contracts\PoemServiceContract;
use App\Http\Services\PoemService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $bindings = [
        PoemServiceContract::class => PoemService::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
