<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class IOC extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("App\\Repositories\\Interfaces\\IUserRepository", "App\\Repositories\\Implementations\\UserRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IUserService", "App\\Http\\Services\\Implementations\\UserService");
    }
}
