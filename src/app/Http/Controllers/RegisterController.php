<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{  public function register()
    {
        return view('register');
    }
   
    public function registerPost(RegisterRequest $request)
    {
    $user = app(\Laravel\Fortify\Contracts\CreatesNewUsers::class)->create($request->validated());

    // 登録完了したらログインページへリダイレクト
    return redirect('/register')->with('success', '登録が完了しました');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // ログイン成功 → 管理画面へリダイレクト
        return redirect()->intended('/admin');
    }
    // ログイン失敗 → 元のフォームに戻し、エラーメッセージ表示
    return back()->withErrors([
        'email' => 'メールアドレスまたはパスワードが間違っています。',
    ])->withInput();
}

    public function admin()
    {
        return view('admin');
    }
}
