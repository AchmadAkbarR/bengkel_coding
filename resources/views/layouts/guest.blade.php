<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="guest-body">

    <div class="guest-container">
        @yield('content')
    </div>

</body>
</html>