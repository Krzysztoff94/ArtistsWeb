<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/layout.css')
    <!--<link href="{{ asset('css/layout.css') }}" rel="stylesheet">-->
    @yield('head')
</head>
<body>
    <header>
    <nav class="navbar">
            <div class="logo">
                <a href="/">ArtistsWeb</a>
            </div>

            <!-- Menu w wersji desktop (na dużych ekranach) -->
            <div class="menu desktop-menu">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </div>
    </header>

    <main>
        <!-- images section -->
        <div class="image-container">
            <img src="{{ asset('images/image1.jpg') }}" alt="Image 1">
        </div>
        <div class="image-container">
            <img src="{{ asset('images/image2.jpg') }}" alt="Image 1">
        </div>
        <div class="image-container">
            <img src="{{ asset('images/image3.jpg') }}" alt="Image 1">
        </div>
        @yield('content') 
    </main>

    <footer>
        <p>&copy; 2024 Moja aplikacja</p>
    </footer>
    <script>

</script>
</body>
</html>
