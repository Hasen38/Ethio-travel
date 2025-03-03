<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Travel & Tours') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="fixed z-50 w-full bg-white shadow-lg">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex items-center flex-shrink-0">
                        <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 transition duration-150 hover:text-blue-700">
                            Ethio Travel
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="items-center hidden ml-3 space-between sm:ml-6 sm:flex sm:space-x-8">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600 hover:border-b-2 hover:border-blue-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition duration-150">
                            Home
                        </a>
                        <a href="#destinations" class="nav-link {{ request()->routeIs('travel.show') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600 hover:border-b-2 hover:border-blue-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition duration-150">
                            Destinations
                        </a>
                        <a href="#packages" class="nav-link {{ request()->routeIs('packages') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600 hover:border-b-2 hover:border-blue-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition duration-150">
                            Packages
                        </a>
                        <a href="{{ route('about-us') }}" class="nav-link {{ request()->routeIs('about') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600 hover:border-b-2 hover:border-blue-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition duration-150">
                            About
                        </a>
                        <a href="#" class="nav-link {{ request()->routeIs('contact') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-500 hover:text-blue-600 hover:border-b-2 hover:border-blue-600' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition duration-150">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Auth Navigation -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @guest
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-gray-500 transition duration-150 hover:text-blue-600">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white transition duration-150 bg-blue-600 rounded-md hover:bg-blue-700">
                            Register
                        </a>
                    @else
                        <div class="relative group">
                            <button class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 transition duration-150 rounded-md hover:text-blue-600 hover:bg-gray-50">
                                <span class="mr-2">{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div class="absolute right-0 hidden w-48 py-2 mt-2 bg-white rounded-md shadow-lg group-hover:block">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="{{ route('users.booking') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bookings</a>
                                <div class="border-t border-gray-100"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
                        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Navigation Menu -->
    <div :class="{'block': mobileMenuOpen, 'hidden': !mobileMenuOpen}" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 text-base font-medium {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">Home</a>
            <a href="#destinations" class="block py-2 pl-3 pr-4 text-base font-medium {{ request()->routeIs('travel.show') ? 'text-blue-600 bg-blue-50' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">Destinations</a>
            <a href="#packages" class="block py-2 pl-3 pr-4 text-base font-medium {{ request()->routeIs('packages') ? 'text-blue-600 bg-blue-50' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">Packages</a>
            <a href="{{ route('about-us') }}" class="block py-2 pl-3 pr-4 text-base font-medium {{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">About</a>
            <a href="#" class="block py-2 pl-3 pr-4 text-base font-medium {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : 'text-gray-600 hover:bg-gray-50 hover:text-blue-600' }}">Contact</a>
        </div>

        <!-- Mobile Auth Menu -->
        <div class="pt-4 pb-3 border-t border-gray-200">
            @guest
                <div class="space-y-1">
                    <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600">Login</a>
                    <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-blue-600">Register</a>
                </div>
            @else
                <div class="px-4 space-y-1">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <a href="#" class="block py-2 text-base font-medium text-gray-600 hover:text-blue-600">Profile</a>
                    <a href="{{ route('users.booking') }}" class="block py-2 text-base font-medium text-gray-600 hover:text-blue-600">Bookings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full py-2 text-base font-medium text-left text-gray-600 hover:text-blue-600">Logout</button>
                    </form>
                </div>
            @endguest
        </div>
    </div>

    <!-- Main Content -->
    <main class="min-h-screen pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white bg-gray-900">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Company Info -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Ethio-travel</h3>
                    <p class="text-gray-400">Discover the world with us. Your journey begins here.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="mt-8 md:mt-0">
                    <h4 class="mb-4 text-lg font-semibold">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Destinations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 lg:mt-0">
                    <h4 class="mb-4 text-lg font-semibold">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="mr-2 fas fa-phone"></i> +25134 567 890</li>
                        <li><i class="mr-2 fas fa-envelope"></i> info@ethiotravel.com</li>
                        <li><i class="mr-2 fas fa-map-marker-alt"></i> 1256 Addis Street, jemo</li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="mt-8 lg:mt-0">
                    <h4 class="mb-4 text-lg font-semibold">Newsletter</h4>
                    <p class="mb-4 text-gray-400">Subscribe to our newsletter for the latest updates and offers.</p>
                    <form class="space-y-2">
                        <input type="email" placeholder="Your email" class="w-full px-4 py-2 text-gray-900 rounded">
                        <button type="submit" class="w-full py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <div class="pt-8 mt-8 text-center text-gray-400 border-t border-gray-800">
                <p>&copy; {{ date('Y') }} Ethio Travel . All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    @yield('scripts')
</body>
</html>
