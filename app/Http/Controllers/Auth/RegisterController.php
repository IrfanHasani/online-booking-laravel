<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Entities\User;
use App\Http\Requests\RegisterValidation;
use App\Http\Services\Interfaces\IRegisterService;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $registerService;

    /**
     * RegisterController constructor.
     *
     * @param IRegisterService $registerService
     */
    public function __construct(IRegisterService $registerService)
    {
        $this->registerService = $registerService;
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param RegisterValidation $request
     * @return \Illuminate\Http\JsonResponse
     */
    protected function store(RegisterValidation $request)
    {
        $this->registerService->insert(new User($request->all()));
        session()->flash('message','Your registration is completed. Please check your email address to confirm.');
        return route('welcome');
    }
}
