<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fadhli Muhammad')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="{{ url('/') }}" class="logo"><span>F</span>adhli</a>
        <button class="menu-toggle" onclick="document.querySelector('.nav-links').classList.toggle('open')">☰</button>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}" @yield('home_active')>Beranda</a></li>
            <li><a href="{{ url('/proyek') }}" @yield('proyek_active')>Proyek</a></li>
            <li><a href="{{ url('/kontak') }}" @yield('kontak_active')>Kontak</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<footer>
    <div class="container">
        <p>© 2026 Fadhli Muhammad. Dibuat dengan ❤️.</p>
    </div>
</footer>

</body>
</html>
