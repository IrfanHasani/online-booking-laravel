<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/3/2018
 * Time: 6:07 PM
 */

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
        return $user->save();
    }
}