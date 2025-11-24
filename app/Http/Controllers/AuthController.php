<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ログイン画面
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ログイン処理
    public function login(Request $request)
    {
        $message = '*メールアドレスかパスワードが違います。';
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => $message,
            'email.email' => $message,
            'password.required' => $message 
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors(['password' => $message]);
    }

    // ログアウト
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // ユーザー登録画面
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 登録処理
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required'      => 'ユーザー名を入力してください。',
            'name.max'           => '20文字以内で入力してください。',
            'email.required'     => 'メールアドレスを入力してください。',
            'email.email'        => '有効なメールアドレスを入力してください。',
            'email.unique'       => '有効なメールアドレスを入力してください。',
            'password.required'  => 'パスワードを入力してください。', 
            'password.min'       => '6文字以上で設定してください。', 
            'password.confirmed' => 'パスワードが一致しません。'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/login');
    }
}