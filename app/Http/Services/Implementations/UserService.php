<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/3/2018
 * Time: 6:12 PM
 */

namespace App\Http\Services\Implementations;

use App\Entities\User;
use App\Http\Services\Interfaces\IUserService;
use App\Repositories\Interfaces\IUserRepository;

class UserService implements IUserService
{
    protected $user_repository;

    public function __construct(IUserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    public function get()
    {
        return $this->user_repository->get();
    }

    public function getById($id)
    {
        return $this->user_repository->getById($id);
    }

    public function insert(User $user)
    {
        return $this->user_repository->insert($user);
    }
}