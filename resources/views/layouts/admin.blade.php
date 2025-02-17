<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="text-gray-900 bg-gray-100">
    <div class="flex min-h-screen">
        <aside class="w-64 text-white bg-gray-800">
            @include('partials.sidebar')
        </aside>
        <div class="flex flex-col flex-1">

                <main class="p-6 bg-white rounded-lg shadow">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
