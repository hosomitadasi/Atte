@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/data.css') }}">
@endsection

@section('header')
<div class="header__list">
    <a class="header__link" href="/stamp">ホーム</a>
    <a class="header__link" href="/data">日付一覧</a>
    <a class="header__link" href="/login">ログアウト</a>
</div>
@endsection

@section('content')
<div class="data__content">
    <form class="time-form">
        <div class="time-form__button">
            <button class="time-form__button-submit">＜</button>
        </div>
        <div class="time-form__itme">
            <p>日時表示</p>
        </div>
        <div class="time-form__button">
            <button class="time-form__button-submit--right">＞</button>
        </div>
    </form>
    <div class="data-table">
        <table class="data-table__innner">
            <tr>
                <th class="data-table__header">名前</th>
                <th class="data-table__header">勤務開始</th>
                <th class="data-table__header">勤務終了</th>
                <th class="data-table__header">休憩時間</th>
                <th class="data-table__header">勤務時間</th>
            </tr>
            <tr>
                <td class="data-table__item">テスト太郎</td>
                <td class="data-table__item">10:00:00</td>
                <td class="data-table__item">20:00:00</td>
                <td class="data-table__item">00:30:00</td>
                <td class="data-table__item">09:30:00</td>
            </tr>

            <tr>
                <td class="data-table__item">テスト次郎</td>
                <td class="data-table__item">10:00:10</td>
                <td class="data-table__item">20:00:00</td>
                <td class="data-table__item">00:30:00</td>
                <td class="data-table__item">09:29:50</td>
            </tr>

            <tr>
                <td class="data-table__item">テスト三郎</td>
                <td class="data-table__item">10:00:10</td>
                <td class="data-table__item">20:00:00</td>
                <td class="data-table__item">00:30:00</td>
                <td class="data-table__item">09:29:50</td>
            </tr>

            <tr>
                <td class="data-table__item">テスト四郎</td>
                <td class="data-table__item">10:00:20</td>
                <td class="data-table__item">20:00:00</td>
                <td class="data-table__item">00:30:00</td>
                <td class="data-table__item">09:29:40</td>
            </tr>

            <tr>
                <td class="data-table__item">テスト五郎</td>
                <td class="data-table__item">10:00:20</td>
                <td class="data-table__item">20:00:00</td>
                <td class="data-table__item">00:30:00</td>
                <td class="data-table__item">09:29:40</td>
            </tr>
        </table>
    </div>
    <form class="data-category">
        <div class="data-category__button">
            <button class="data-category__button-submit">‹</button>
        </div>
        <div class="data-category__item">
            <p>ページの一覧表示</p>
        </div>
        <div class="data-category__button">
            <button class="data-category__button-submit">‹</button>
        </div>
    </form>
</div>
@endsection