<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel and Tour</title>
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
                    <li><a href="/login" class="hover:underline">Login</a></li>
                    <li><a href="/register" class="hover:underline">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    @section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-96 bg-cover bg-center" style="background-image: url('https://example.com/hero-image.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto h-full flex items-center justify-center text-center text-white">
            <div>
                <h1 class="text-5xl font-bold leading-tight">Discover Your Next Adventure</h1>
                <p class="mt-4 text-xl">Explore the best destinations with exclusive offers and personalized tours.</p>
                <a href="/destinations" class="mt-6 inline-block bg-blue-600 text-white py-3 px-8 rounded-full text-lg hover:bg-blue-500">Start Your Journey</a>
            </div>
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-blue-600">Explore Our Top Destinations</h2>
            <p class="mt-2 text-lg">Find your next dream destination from our curated list of must-see places.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
                <!-- Destination Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/paris-image.jpg" alt="Paris" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Paris</h3>
                        <p class="mt-2 text-gray-600">A city of romance, art, and iconic landmarks like the Eiffel Tower.</p>
                        <a href="/destinations/paris" class="mt-4 inline-block text-blue-600 hover:underline">Explore Paris</a>
                    </div>
                </div>

                <!-- Destination Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/new-york-image.jpg" alt="New York" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">New York</h3>
                        <p class="mt-2 text-gray-600">The city that never sleeps, with vibrant culture and iconic attractions.</p>
                        <a href="/destinations/new-york" class="mt-4 inline-block text-blue-600 hover:underline">Explore New York</a>
                    </div>
                </div>

                <!-- Destination Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/tokyo-image.jpg" alt="Tokyo" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Tokyo</h3>
                        <p class="mt-2 text-gray-600">A blend of tradition and modernity with bustling streets and serene temples.</p>
                        <a href="/destinations/tokyo" class="mt-4 inline-block text-blue-600 hover:underline">Explore Tokyo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Offers Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Special Offers</h2>
            <p class="mt-2 text-lg">Get exclusive discounts on our most popular destinations and tours.</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
                <!-- Offer Card 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/summer-sale-image.jpg" alt="Summer Sale" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Summer Sale - 30% Off Paris</h3>
                        <p class="mt-2 text-gray-600">Enjoy 30% off all Paris tours this summer. Book now and save!</p>
                        <a href="/offers/paris" class="mt-4 inline-block text-blue-600 hover:underline">Book Now</a>
                    </div>
                </div>

                <!-- Offer Card 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/winter-special-image.jpg" alt="Winter Special" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Winter Special: New York</h3>
                        <p class="mt-2 text-gray-600">Exclusive offers for New York tours this winter. Don’t miss out!</p>
                        <a href="/offers/new-york" class="mt-4 inline-block text-blue-600 hover:underline">Book Now</a>
                    </div>
                </div>

                <!-- Offer Card 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://example.com/spring-tokyo-image.jpg" alt="Spring Tokyo" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Spring in Tokyo</h3>
                        <p class="mt-2 text-gray-600">Celebrate cherry blossom season with a special tour of Tokyo!</p>
                        <a href="/offers/tokyo" class="mt-4 inline-block text-blue-600 hover:underline">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    <main>
   @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Travel & Tour. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
