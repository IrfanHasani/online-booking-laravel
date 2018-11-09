<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('employees', 'App\Policies\EmployeePolicy@employee');
        Gate::define('customers', 'App\Policies\CustomerPolicy@customers');
        Gate::define('services', 'App\Policies\ServicePolicy@services');
        Gate::define('appointments', 'App\Policies\AppointmentPolicy@appointments');
    }
}
