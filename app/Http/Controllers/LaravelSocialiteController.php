<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class LaravelSocialiteController extends Controller
{
    public function google() {
        return Socialite::driver('google')->redirect();
    }


    public function googleAuthentication(){
        $googleAuth = Socialite::driver('google')->user();

        $user = User::where('email', $googleAuth->email)->first();

        if ( $user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $userData = User::create([
                'name' => $googleAuth->name,
                'email' => $googleAuth->email,
                'google_id' => $googleAuth->id,
                'password' => Hash::make('password')
            ]);

            if ($userData) {
                Auth::login($userData);
                return redirect()->route('dashboard');
            }
        };
    }
}
