<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    //会員登録画面表示

    public function create(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        //データの保存

        $tokenService = new TokenService();
        $tokenService ->create($request);
        //トークンの発行

        $email = $request->email;
        $url = request()->getSchemeAndHttpHost(). "/user/register?token=". $tokenService->getToken();

        Mail::to($email)->send(new AuthMail($url));
        //メール送信

        return redirect('login')->with('email', $email, 'result', '会員登録が完了しました');
        //ログイン画面へリダイレクト
    }

    public function postRegister(RegisterRequest $request)
    {
        try {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            return redirect('login')->with('result', '会員登録が完了しました');
        } catch (\Throwable $th) {
            return redirect('register')->with('result', 'エラーが発生しました');
        }
    }
    //会員登録処理createで入力すべき項目を指定、問題なく処理が完了したら次のreturn redirect('login')->with()で結果を表示、エラーが出たら次の文を表示

    public function getlogin()
    {
        return view('login');
    }
    //ログイン画面表示

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        } else {
            return redirect('login')->with('result', 'メールアドレスまたはパスワードが間違っております');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect("login");
    }
}
