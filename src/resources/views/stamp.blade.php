@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
<div class="stamp__form-content">
    <div class="stamp__form-heading">
        <h2>さんお疲れ様です！</h2>
        <!--ここにログインした人の名前も表示-->
    </div>

    <div class="stamp__form-group">
        <form class="stamp__button-work">
            <button class="stamp__button-submit" type="submit">勤務開始</button>

            <button class="stamp__button-submit" type="submit">勤務終了</button>
        </form>


        <form class="stamp__button-rest">
            <button class="stamp__button-submit" type="submit">休憩開始</button>

            <button class="stamp__button-submit" type="submit">休憩終了</button>
        </form>
    </div>
</div>
@endsection