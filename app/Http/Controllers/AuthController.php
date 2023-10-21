<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(AuthService $auth_service)
    {
        $this->auth_service = $auth_service;
    }
    // public function showForm()
    // {
    //   return view('user.auth.register');
    // }
    public function register(RegisterRequest $request)
    {
        $this->auth_service->register($request);
        return redirect()->route('login');
    }
    // public function loginForm()
    // {
    //     return view('user.auth.login');
    // }
    public function login(Request $request)
    {
        $this->auth_service->login($request);
        return('login');
        return redirect()->route('home');
    }
    public function logout()
    {
        $this->auth_service->logout();
        return redirect()->route('login');
    }
}
