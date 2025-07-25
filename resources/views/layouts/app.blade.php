<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Laravel User System</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Strona główna</a>
            <a class="nav-link" href="{{ route('offer') }}">Oferta</a>
            <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
            @auth
                <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link">Wyloguj</button>
                </form>
            @else
                <a class="nav-link" href="{{ route('login') }}">Logowanie</a>
                <a class="nav-link" href="{{ route('register') }}">Rejestracja</a>
            @endauth
        </div>
    </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
