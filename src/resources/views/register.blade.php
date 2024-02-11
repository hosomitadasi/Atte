@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__form-content">
    <div class="register__form-logo">
        <h2>会員登録</h2>
    </div>

    <form action="/register" method="post">
        @csrf
        <div class="register__form-group">
            <div class="register__input">
                <input type="taxt" name="name" value="{{ $members ?? 'name'}}" placeholder="名前" />
            </div>

            <div class="register__input">
                <input type="taxt" name="email" value="{{ $members ?? 'email' }}" placeholder="メールアドレス" />
            </div>

            <div class="register__input">
                <input type="taxt" name="password" value="{{ $members ?? 'password'}}" placeholder="パスワード" />
            </div>

            <div class="register__input">
                <input type="taxt" name="confirmation--password" placeholder="確認用パスワード" />
            </div>

            <div class="register__button">
                <button class="register__button-submit" type="submit">会員登録</button>
            </div>
        </div>
    </form>

    <div class="login__form">
        <div class="login__logo">
            <p>アカウントをお持ちの方はこちらから</p>
        </div>
        <div>
            <a class="login__link-tag" href="/login">ログイン</a>
        </div>
    </div>
</div>
@endsection