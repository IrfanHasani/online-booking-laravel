<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 18-10-20
 * Time: 7.18.MD
 */

namespace App\Http\Services\Implementations;

use Illuminate\Support\Facades\Auth;

use App\Http\Services\Interfaces\ILoginService;
use App\Http\Services\Interfaces\IUserService;

class LoginService implements ILoginService
{
    public function __construct(IUserService $userService)
    {

    }

    public function login($credentials)
    {
        if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]) ) {
            session()->flash('error-message','Wrong email address or password');
            return redirect()->back();
        }
        //success login
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

}