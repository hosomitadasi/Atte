@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__form-content">
    <div class="register__form-logo">
        <h2>会員登録</h2>
    </div>

    <form>
        <div class="register__form-group">
            <div class="register__input">
                <input type="taxt" name="name" placeholder="名前" />
            </div>

            <div class="register__input">
                <input type="taxt" name="email" placeholder="メールアドレス" />
            </div>

            <div class="register__input">
                <input type="taxt" name="password" placeholder="パスワード" />
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
            <a>ログイン</a>
        </div>
    </div>
</div>
@endsection