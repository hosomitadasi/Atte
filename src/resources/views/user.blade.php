@extends('layouts.app')

@section('content')
<div class="user-content">
    <table class="user-content_table">
    @csrf
        <tr>
            <th>会員No</th>
            <th>会員名簿</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><a href="{{ route('userdate', $user->id) }}">{{ $user->name }}</a></td>
        </tr>
        @endforeach
    </table>
    {{ $users->links('pagination::default') }}
</div>
@endsection