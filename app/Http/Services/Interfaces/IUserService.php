<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/3/2018
 * Time: 6:09 PM
 */

namespace App\Http\Services\Interfaces;

use App\Entities\User;
use App\Repositories\Interfaces\IUserRepository;

interface IUserService
{
    public function __construct(IUserRepository $user_repository);

    public function get();

    public function getById($id);

    public function insert(User $user);

    public function delete($id);

}