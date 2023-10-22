<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class AuthService{
    public function register($request)
    {
        try{
        DB::beginTransaction();
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        $user_role = Role::findByName('user');
            $user_role->users()->attach($user->id);
        DB::commit();
        return true;
        }catch(\Exception $e){
            DB::rollBack();
            $error = "Error: Message: " . $e->getMessage() . " File: " . $e->getFile() . " Line #: " . $e->getLine();
            Helper::errorLogs("AuthService->register()", $error);
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function login($request)
    {
        try{
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return true;
        }
        return false;
        }catch(\Exception $e){
            $error = "Error: Message: " . $e->getMessage() . " File: " . $e->getFile() . " Line #: " . $e->getLine();
            Helper::errorLogs("AuthService->login()", $error);
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    public function logout()
    {
        try{
        auth()->logout();
        return true;
        }catch(\Exception $e){
            $error = "Error: Message: " . $e->getMessage() . " File: " . $e->getFile() . " Line #: " . $e->getLine();
            Helper::errorLogs("AuthService->logout()", $error);
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}