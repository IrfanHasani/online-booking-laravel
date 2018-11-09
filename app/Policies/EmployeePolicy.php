<?php

namespace App\Policies;

use App\Entities\Role;
use App\Entities\User;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view, create, edit and delete employees.
     *
     * @param  \App\Entities\User  $user
     * @return mixed
     */
    public function employee(User $user)
    {
        $role = Role::where('name','admin')->first();
        if($user->role_id === $role->id)
            return true;
        return false;
    }
}
