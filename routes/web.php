<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;


// Route::get('/', function () {
//     return view('auth.login');
// });


//ログアウト
Route::get('/logout', [AuthController::class, 'logout']);

//ダッシュボード
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',  function () {
        return view('dashboard.index');
    })->name('dashboard');
});

Route::middleware('guest')->group(function () {

    Route::get('/', [AuthController::class, 'showLoginForm']);

    //ログイン
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    //新規登録
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    //パスワードリセット
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
        ->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])
        ->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
});
