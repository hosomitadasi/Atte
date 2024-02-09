@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('header')
<div class="header__list">
    <a class="header__link" href="/html/stamp.html">ホーム</a>
    <a class="header__link" href="/html/data.html">日付一覧</a>
    <a class="header__link" href="/html/login.html">ログアウト</a>
</div>
@endsection

@section('content')
<div class="stamp__form-content">
    <div class="stamp__form-heading">
        <h2>○○さんお疲れ様です！</h2>
        <!--ここにログインした人の名前も表示-->
    </div>

    <form class="stamp__form-group">
        <div class="stamp__form-frame">
            <div class="stamp__work">
                <button class="button">勤務開始</button>
                <button class="button">勤務終了</button>
            </div>
            <div class="stamp__rest">
                <button class="button">休憩開始</button>
                <button class="button">休憩終了</button>
            </div>
        </div>
    </form>
</div>
@endsection