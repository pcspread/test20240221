<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="test">
    <title>test</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    @yield('css')
    @yield('js')
</head>
<body>
    <header class="header">
        <div class="header__title">
            <h1 class="header__title__text">TEST</h1>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
</body>
</html>