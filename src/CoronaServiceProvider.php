<?php

namespace Bungnewbie\Corona;

use Illuminate\Support\ServiceProvider;

class CoronaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if (function_exists('config_path')) {
        //     $this->publishes([
        //         __DIR__.'../config/covid.php' => config_path('covid.php'),
        //     ]);
        // }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Bungnewbie\Corona\Repositories\CoronaServiceRepository::class,
            \Bungnewbie\Corona\Services\CoronaService::class
        );
    }
}
