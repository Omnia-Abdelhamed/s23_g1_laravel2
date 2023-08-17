<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function handleRegister(Request $request){
        $request->validate([
            'name'=>'required|max:100|min:2',
            'email'=>'required|unique:users|email',
            'password'=>'required|max:30|min:6'
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('index');
    }

    public function handleLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $is_login=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);

        if(! $is_login){
            return back();
        }

        if(Auth::user()->is_admin==0){
            return redirect()->route('index');
        }

        if(Auth::user()->is_admin==1){
            return redirect()->route('employees.index');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
