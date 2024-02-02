@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <form action="/html/data.html" method="get">
        <div class="login__form">
            <div class="login__form-header">
                <div class="login__form-logo">
                    <p>ログイン</p>
                </div>
            </div>

            <div class="login__form-input">
                <input type="text" name="email" placeholder="メールアドレス">
            </div>

            <div class="login__form-input">
                <input type="text" name="password" placeholder="パスワード">
            </div>

            <div class="login__button">
                <button class="login__button-submit" type="submit">ログイン</button>
            </div>

        </div>
    </form>

    <div class="register__form">
        <div class="register__logo">
            <p>アカウントをお持ちでない方はこちらから</p>
        </div>
        <form>
            <a>会員登録</a>
        </form>
    </div>
</div>
@endsection