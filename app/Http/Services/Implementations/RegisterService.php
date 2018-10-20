<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-20
 * Time: 5.34.MD
 */

namespace App\Http\Services\Implementations;


use App\Entities\User;
use App\Http\Services\Interfaces\IRegisterService;
use App\Repositories\Interfaces\IUserRepository;

class RegisterService implements IRegisterService
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function insert(User $user)
    {
        //client role
        $user->role_id = 2;
        return $this->userRepository->insert($user);
    }

}