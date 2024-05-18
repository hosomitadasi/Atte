<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use App\Models\Rest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class UserController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    //会員登録画面表示

    

    public function postRegister(RegisterRequest $request )
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            event(new Registered($user));

            return redirect()->route('login')->with('status', 'Verification email sent!');
        } catch (\Exception $e) {
            \Log::error($e);
            dd($e);
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

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function showMonthlyAttendance($userId, $month)
    {
        dd($userId, $month);
        $user = User::findOrFail($userId);

        $works = Work::where('user_id', $userId)->whereMonth('date', $month)->get();

        foreach ($works as $work) {
            $work->rests = Rest::where('work_id', $work->id)->get();
        }

        return view('users.monthly_attendance', compact('user', 'works', 'month'));
    }
}
