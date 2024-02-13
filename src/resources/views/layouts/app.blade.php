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
    <header class="header__inner">
            <div class="header__logo">
                <h2>Atte</h2>
            </div>
        @yield('header')
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