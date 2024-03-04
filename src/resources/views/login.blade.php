@extends('layouts.app')

@section('content')
@if (session('result'))
<div class="flash_message">
    {{ session('result' )}}
</div>
@endif
<h2 class="main-logo">ログイン</h2>
<form action="/login" method="post">
    @csrf
    <div class="input-content">
        <input type="email" placeholder="メールアドレス" name="email" value="{{ old('email')}}">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="input-content">
        <input type="password" placeholder="パスワード" name="password">
        @error('password')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="input-button">
        <input type="submit" value="ログイン">
    </div>
</form>
<p class="transition-text">アカウントをお持ちでない方はこちらから</p>
<a class="transition-link" href="/register">会員登録</a>
@endsection