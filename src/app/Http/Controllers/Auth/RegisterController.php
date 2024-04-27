<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verifi_token' => hash("sha256", uniqid(rand(), true)),
        ]);

        $email = new EmailVerification($user);
        Mail::to($user->email)->send($email);

        return $user;
    }

    public function register(Request $request)
    {
        event(new Registered($user = $this->create( $request->all() )));

        return view('login');
    }

    // メール認証用URLをクリックされたら
    public function verify($email_token)
    {
        // メールに記載されたURLトークンをキーに、ユーザ情報を取得
        $user = User::where('email_verify_token', $email_token)->first();

        $dt_now = new Carbon();
        $dt_create = new Carbon($user->created_at);
        $dt_limit = $dt_create->addHour();


        // 登録されているトークンか？
        if (!$user) {
            $verify_message = '無効なトークンです。';

            // メール認証済ユーザーか？
        } else if ($user->email_verified) {
            $verify_message = 'すでに本登録されています。ログインして利用してください。';

            // メール認証の発行から一時間以上経過している？
        } else if ($dt_now->gt($dt_limit)) {
            $verify_message = 'メール認証の発行から一時間以上経過しています。新規アカウントを作成して下さい';

            // まだメール未認証ユーザなら
        } else {
            // メール認証済にして、上書き保存
            $user->email_verified = true;
            if ($user->save()) {
                $verify_message = 'メール認証されました。ログインして利用してください。';
            } else {
                $verify_message = 'メール認証に失敗しました。再度、メールからリンクをクリックしてください。';
            }
        }
        // メール認証の結果を画面を表示(ログイン画面へのリンク付き)
        return view('auth.email_verify_result')->with('verify_message', $verify_message);
    }
}
