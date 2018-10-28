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

        $this->app->bind("App\\Repositories\\Interfaces\\IEmployeeRepository", "App\\Repositories\\Implementations\\EmployeeRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IEmployeeService", "App\\Http\\Services\\Implementations\\EmployeeService");

        $this->app->bind("App\\Repositories\\Interfaces\\IServiceRepository", "App\\Repositories\\Implementations\\ServiceRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IService", "App\\Http\\Services\\Implementations\\ServiceService");

        $this->app->bind("App\\Repositories\\Interfaces\\IWorkingHourRepository", "App\\Repositories\\Implementations\\WorkingHourRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IWorkingHourService", "App\\Http\\Services\\Implementations\\WorkingHourService");

        $this->app->bind("App\\Repositories\\Interfaces\\IServiceEmployeeRepository", "App\\Repositories\\Implementations\\ServiceEmployeeRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IServiceEmployeeService", "App\\Http\\Services\\Implementations\\ServiceEmployeeService");

        $this->app->bind("App\\Repositories\\Interfaces\\IAppointmentRepository", "App\\Repositories\\Implementations\\AppointmentRepository");
        $this->app->bind("App\\Http\\Services\\Interfaces\\IAppointmentService", "App\\Http\\Services\\Implementations\\AppointmentService");


        $this->app->bind("App\\Http\\Services\\Interfaces\\IRegisterService", "App\\Http\\Services\\Implementations\\RegisterService");

        $this->app->bind("App\\Http\\Services\\Interfaces\\ILoginService", "App\\Http\\Services\\Implementations\\LoginService");
    }
}
