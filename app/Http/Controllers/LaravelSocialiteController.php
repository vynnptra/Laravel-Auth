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
    public function authRedirection($provider) {

        if ($provider) {
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }


    public function providerAuthentication($provider){
        try {

        $providerAuth = Socialite::driver($provider)->user();
        
        $user = User::where('email', $providerAuth->email)->first();

        if ( $user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            $userData = User::create([
                'name' => $providerAuth->name,
                'email' => $providerAuth->email,
                'auth_provider' => $provider,
                'auth_provider_id' => $providerAuth->id,
                'auth_provider_token' => $providerAuth->token,
                'password' => Hash::make('password')
            ]);

            if ($userData) {
                Auth::login($userData);
                return redirect()->route('dashboard');
            }
        };
            
        } catch (\Throwable $th) {

        }
    }
}
