<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidation;
use App\Http\Services\Interfaces\ILoginService;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    protected $loginService;

    /**
     * LoginController constructor.
     *
     * @param ILoginService $loginService
     */
    public function __construct(ILoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * Handle a login request to the application after success validation.
     *
     * @param LoginValidation $request
     *
     * @return mixed
     */
    public function login(LoginValidation $request)
    {
        return $this->loginService->login($request->only('email','password'));
    }

    /**
     * Log the user out of the application.
     *
     * @return mixed
     */
    public function logout()
    {
        return $this->loginService->logout();
    }
}
