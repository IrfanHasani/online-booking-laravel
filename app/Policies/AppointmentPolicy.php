<?php

namespace App\Policies;

use App\Entities\Role;
use App\Entities\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine whether the user can view, create, edit and delete appointments.
     *
     * @param  \App\Entities\User  $user
     * @return mixed
     */
    public function appointments(User $user)
    {
        $role = Role::where('name','admin')->first();
        if($user->role_id === $role->id)
            return true;
        return false;
    }
}
