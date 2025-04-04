<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LaravelSocialiteController;
use App\Http\Controllers\ResetPasswordController;
use App\Mail\ForgetPassword;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::middleware('auth')->group( function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');

    Route::post('/logout', [AuthenticateController::class, 'logout'])->name('logout');

});

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.form');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password');

Route::middleware('guest')->group( function () {
    Route::get('/login', [AuthenticateController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [AuthenticateController::class, 'login'])->name('login');
    Route::get('/register', [AuthenticateController::class, 'registerForm'])->name('register.form');
    Route::post('/register', [AuthenticateController::class, 'register'])->name('register');

    Route::get('auth/redirection/{provider}', [LaravelSocialiteController::class, 'authRedirection'])->name('auth.redirection');
    Route::get('auth/{provider}/callback', [LaravelSocialiteController::class, 'providerAuthentication'])->name('auth.callback');

});
