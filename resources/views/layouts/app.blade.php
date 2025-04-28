<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="app-body">

    <nav class="navbar">
        <div class="navbar-brand">
            Dashboard
        </div>
        <div class="navbar-user">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div class="app-container">
        @yield('content')
    </div>

</body>
</html>