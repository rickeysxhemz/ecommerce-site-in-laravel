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
    public function registerForm()
    {
      return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $this->auth_service->register($request);
        return redirect()->route('login');
    }
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        if ($this->auth_service->login($request)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Login failed. Please try again.');
        }
    }
    public function logout()
    {
        $this->auth_service->logout();
        return redirect()->route('home');
    }
}
