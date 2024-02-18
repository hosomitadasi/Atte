<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__content">
                <div class="header__logo">
                    <h2>Atte</h2>
                </div>
            </div>
            <nav>
                <ul class="header-nav">
                    @if(Auth::check())
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/stamp">ホーム</a>
                    </li>
                    <li class="header-nav__item">
                        <a class="header-nav__link" href="/data">日付一覧</a>
                    </li>
                    <li class="header-nav__item">
                        <form class="form" action="/logout" method="post">
                            @csrf
                            <button class="header-nav__button">ログアウト</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer__inner">
            <div class="footer__logo">
                <h4>Atte.inc</h4>
            </div>
        </div>
    </footer>
</body>

</html>