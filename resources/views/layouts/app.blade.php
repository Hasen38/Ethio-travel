<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethio Travel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Travel&Tour</a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/deals" class="hover:underline">Deals</a></li>
                    @guest
                    <li><a href="/login" class="hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:underline">Register</a></li>
                    @endguest
                    @auth
                    <li><a href="/users/my-bookings" class="hover:underline">My Booking</a></li>
                    <li><form action="{{route('logout')}}" method="POST">@csrf<button type="submit" class="hover:underline">Logout</button></form></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>


    <main>
   @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Ethio Travel. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
