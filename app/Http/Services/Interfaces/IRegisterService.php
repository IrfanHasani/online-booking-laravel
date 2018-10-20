<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-20
 * Time: 5.34.MD
 */

namespace App\Http\Services\Interfaces;


use App\Entities\User;
use App\Repositories\Interfaces\IUserRepository;

interface IRegisterService
{
    public function __construct(IUserRepository $userRepository);

    public function insert(User $user);

}