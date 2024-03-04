<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')
</head>

<body class="container">
    <header class="header">
        <h1 class="header-logo">Atte</h1>
        @if( Auth::check() )
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li class="header-nav-itam"><a href="/">ホーム</a></li>
                <li class="header-nav-itam"><a href="/date/0">日付一覧</a></li>
                <li class="header-nav-itam"><a href="/logout">ログアウト</a></li>
            </ul>
        </nav>
        @endif
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <p class="footer-logo">estra, inc.</p>
    </footer>
</body>

</html>