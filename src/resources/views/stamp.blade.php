@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('header')
<div class="header__list">
    <a class="header__link" href="/stamp">ホーム</a>
    <a class="header__link" href="/data">日付一覧</a>
    <a class="header__link" href="/login">ログアウト</a>
</div>
@endsection

@section('content')
<div class="stamp__form-content">
    <div class="stamp__form-heading">
        <h2>さんお疲れ様です！</h2>
        <!--ここにログインした人の名前も表示-->
    </div>

    <form class="stamp__form-group">
        <div class="stamp__button">
            <button class="work__start label">勤務開始</button>
            <button class="work__stop">勤務終了</button>
        </div>
        <div class="stamp__button">
            <button class="rest__start">休憩開始</button>
            <button class="rest__stop">休憩終了</button>
        </div>
    </form>
</div>
@endsection