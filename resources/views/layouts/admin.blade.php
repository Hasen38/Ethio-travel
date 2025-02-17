<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white">
            @include('partials.sidebar')
        </aside>
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow p-4">
                <div class="flex-1 p-6">
                    <div class="mb-4">
                    </div>
            </header>
                <main class="bg-white p-6 rounded-lg shadow">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
