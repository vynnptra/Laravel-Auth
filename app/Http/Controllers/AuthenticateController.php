<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthenticateController extends Controller
{
    public function loginForm(){
        return view('auth.login');
    }

    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
        ]);

        return redirect()->route('login.form')->with('success', 'You account created succesfully');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login.form')->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.form');
    }
}
