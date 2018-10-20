<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-20
 * Time: 7.17.MD
 */

namespace App\Http\Services\Interfaces;


interface ILoginService
{
    public function __construct(IUserService $userService);

    public function login($credentials);

    public function logout();
}