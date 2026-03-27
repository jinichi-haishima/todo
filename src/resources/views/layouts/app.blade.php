<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <title>todo</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="">Todo</a>
            </h1>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>