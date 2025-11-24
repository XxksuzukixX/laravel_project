<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;


// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [AuthController::class, 'showLoginForm']);

//ログイン
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

//新規登録
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

//ログアウト
Route::get('/logout', [AuthController::class, 'logout']);

//ダッシュボード
Route::get('/dashboard',  function () {
    return view('dashboard.index');
});

