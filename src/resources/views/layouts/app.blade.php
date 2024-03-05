<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body class="container">
    @component('components.header')
    @endcomponent
    <main class="main">
        @yield('content')
    </main>
    @component('components.footer')
    @endcomponent
</body>

</html>