<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="sidebar">
        @include('partials.sidebar')
    </div>
    <div class="main-content">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
