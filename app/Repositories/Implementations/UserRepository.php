<?php

namespace App\Repositories\Implementations;

use App\Entities\User;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{
    public function __construct()
    {

    }

    public function get()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function insert(User $user)
    {
        $user->password = bcrypt($user->password);
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }
}