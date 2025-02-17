<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethio Travel</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Header -->
    <header class="bg-gradient-to-r from-gray-800 to-gray-600 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="/" class="text-3xl font-bold">Travel&Tour</a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="/deals" class="hover:text-gray-200">Deals</a></li>
                    @guest
                        <li><a href="/login" class="hover:text-gray-200">Login</a></li>
                        <li><a href="/register" class="hover:text-gray-200">Register</a></li>
                    @endguest
                    @auth
                        <li class="relative">
                            <div x-data="{ open: false }">
                                <span @click="open = !open" class="cursor-pointer">{{ Auth::user()->name }}</span>
                                <ul x-show="open" class="absolute bg-white text-black mt-2 space-y-2 p-2 rounded shadow-lg z-10">
                                    <li><a href="/users/my-bookings" class="hover:text-gray-700">My Bookings</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="hover:text-gray-700">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>
    <main >
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-800 to-gray-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Ethio Travel. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
