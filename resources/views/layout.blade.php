<html>
<head>
    <title>@yield('title')</title>
    @vite('resources/css/layout.css')
    <!--<link href="{{ asset('css/layout.css') }}" rel="stylesheet">-->
    @yield('head')
</head>
<body>
    <header>
        <h1>Witamy na stronie!</h1>
        <nav>
            <a href="/">Strona główna</a>
            <a href="/about">O nas</a>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Miejsce na treść strony -->
    </main>

    <footer>
        <p>&copy; 2024 Moja aplikacja</p>
    </footer>
</body>
</html>
