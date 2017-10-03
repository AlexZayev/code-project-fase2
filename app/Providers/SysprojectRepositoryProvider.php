<?php

namespace Sysproject\Providers;

use Illuminate\Support\ServiceProvider;

class SysprojectRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Sysproject\Repositories\ClientRepository::class,
            \Sysproject\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \Sysproject\Repositories\ProjectRepository::class,
            \Sysproject\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
