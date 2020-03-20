<?php

namespace Bungnewbie\Corona\Providers;

use Illuminate\Support\ServiceProvider;

class CoronaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Bungnewbie\Corona\Repositories\CoronaServiceRepository::class,
            \Bungnewbie\Corona\Services\CoronaService::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../Config/bungnewbie.php' => config_path('bungnewbie.php'),
        ]);
    }
}
