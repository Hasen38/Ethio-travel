@extends('layouts.app')

@section('content')
    <main class="min-h-screen">
        {{-- Hero Section --}}
        <section class="relative w-full h-screen bg-fixed bg-center bg-cover" style="background-image: url('{{ asset('images/ethiopia-hero.jpg') }}');">
            <div class="absolute inset-0 bg-black/90"></div>
            <div class="container flex relative z-10 justify-center items-center mx-auto h-full text-center text-white">
                <div class="px-4 max-w-4xl animate-fade-in-up">
                    <span class="inline-block px-4 py-2 mb-4 text-xs font-semibold tracking-wider text-green-400 uppercase rounded-full sm:text-sm bg-green-900/30 sm:px-6 sm:mb-6">Welcome to Ethiopia</span>
                    <h1 class="mb-4 text-4xl font-bold tracking-tight leading-tight animate-fade-in sm:text-6xl md:text-7xl sm:mb-6">
                        Discover Ethiopia's
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">Hidden Gems</span>
                    </h1>
                    <p class="mt-4 text-lg font-light leading-relaxed text-gray-200 sm:text-xl md:text-2xl sm:mt-6">Experience the rich culture, history, and breathtaking landscapes of Ethiopia's ancient wonders.</p>
                    <div class="flex flex-col gap-4 justify-center mt-6 sm:flex-row sm:mt-10">
                        <a href="/destinations"
                            class="inline-flex items-center px-6 py-3 text-base font-semibold text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-full shadow-lg transition-all duration-300 group hover:from-green-400 hover:to-blue-400 hover:shadow-xl hover:scale-105 sm:px-8 sm:py-4 sm:text-lg">
                            Start Your Journey
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        <a href="#learn-more"
                            class="inline-flex items-center px-6 py-3 text-base font-semibold text-white rounded-full backdrop-blur-sm transition-all duration-300 bg-white/10 hover:bg-white/20 hover:shadow-lg sm:px-8 sm:py-4 sm:text-lg">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-10 left-1/2 animate-bounce transform -translate-x-1/2">
                <a href="#services" class="text-white/80 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>
            </div>
        </section>

        {{-- Services Section --}}
        <section class="py-12 bg-white sm:py-16 md:py-20">
            <div class="container px-4 mx-auto">
                <div class="mx-auto mb-12 max-w-3xl text-center sm:mb-16">
                    <h2 class="mb-3 text-3xl font-bold text-gray-800 sm:text-4xl sm:mb-4">Our Services</h2>
                    <p class="text-lg text-gray-600 sm:text-xl">Experience Ethiopia with our premium travel services</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 sm:gap-8">
                    <!-- Custom Tours -->
                    <div
                        class="p-4 text-center bg-white rounded-lg border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 sm:p-6">
                        <div
                            class="inline-flex justify-center items-center mb-6 w-16 h-16 text-green-500 bg-green-100 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800">Custom Tours</h3>
                        <p class="text-gray-600">Personalized itineraries tailored to your preferences and schedule</p>
                    </div>

                    <!-- Local Guides -->
                    <div
                        class="p-4 text-center bg-white rounded-lg border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 sm:p-6">
                        <div
                            class="inline-flex justify-center items-center mb-6 w-16 h-16 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800">Local Guides</h3>
                        <p class="text-gray-600">Expert local guides with deep knowledge of Ethiopian culture and history
                        </p>
                    </div>

                    <!-- Accommodation -->
                    <div
                        class="p-4 text-center bg-white rounded-lg border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 sm:p-6">
                        <div
                            class="inline-flex justify-center items-center mb-6 w-16 h-16 text-purple-500 bg-purple-100 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800">Accommodation</h3>
                        <p class="text-gray-600">Carefully selected hotels and lodges for a comfortable stay</p>
                    </div>

                    <!-- Transportation -->
                    <div
                        class="p-4 text-center bg-white rounded-lg border border-gray-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 sm:p-6">
                        <div
                            class="inline-flex justify-center items-center mb-6 w-16 h-16 text-orange-500 bg-orange-100 rounded-full">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-800">Transportation</h3>
                        <p class="text-gray-600">Safe and comfortable transportation throughout your journey</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Destinations Section --}}
        <section id="destinations" class="py-12 bg-gradient-to-b from-gray-50 to-white sm:py-16 md:py-20">
            <div class="container px-4 mx-auto">
                <div class="mx-auto mb-12 max-w-3xl text-center sm:mb-16">
                    <h2 class="mb-3 text-3xl font-bold text-gray-800 sm:text-4xl sm:mb-4">Explore Our Top Destinations</h2>
                    <p class="text-lg text-gray-600 sm:text-xl">Find your next dream destination from our curated list of must-see places.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 md:gap-10">
                    @foreach ($destinations as $destination)
                        <div class="overflow-hidden bg-white rounded-2xl shadow-lg transition-all duration-300 transform group hover:shadow-2xl hover:-translate-y-2">
                            <div class="overflow-hidden relative h-48 sm:h-56 md:h-64">
                                <img src="{{ asset("storage/{$destination->image_url}") }}" alt="{{ $destination->name }}"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t to-transparent opacity-0 transition-opacity duration-300 from-black/60 group-hover:opacity-100">
                                </div>
                            </div>
                            <div class="p-6 sm:p-8">
                                <h3 class="mb-2 text-xl font-bold text-gray-800 sm:text-2xl sm:mb-3">{{ $destination->name }}</h3>
                                <p class="mb-4 text-sm text-gray-600 line-clamp-3 sm:text-base">{{ $destination->description }}</p>
                                <a href="{{ route('travel.show', $destination->id) }}"
                                    class="inline-flex items-center text-sm font-semibold text-green-600 transition-colors hover:text-green-500 sm:text-base">
                                    Explore {{ $destination->name }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4 sm:w-5 sm:h-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Special Offers Section --}}
        <section class="py-12 text-white bg-gray-900 sm:py-16 md:py-20">
            <div class="container px-4 mx-auto">
                <div class="mx-auto mb-12 max-w-3xl text-center sm:mb-16">
                    <h2 class="mb-3 text-3xl font-bold sm:text-4xl sm:mb-4">Special Offers</h2>
                    <p class="text-lg text-gray-300 sm:text-xl">Get exclusive discounts on our most popular destinations and tours.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 md:gap-10">
                    @foreach ($packages as $package)
                        <div class="overflow-hidden bg-gray-800 rounded-2xl transition-all duration-300 group hover:shadow-2xl">
                            <div class="overflow-hidden relative h-48 sm:h-56 md:h-64">
                                <img src="{{ asset("storage/{$package->image}") }}" alt="{{ $package->name }}"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t to-transparent from-black/70"></div>
                            </div>
                            <div class="p-6 sm:p-8">
                                <h3 class="mb-2 text-xl font-bold sm:text-2xl sm:mb-3">{{ $package->name }}</h3>
                                <p class="mb-4 text-sm text-gray-300 sm:text-base">Enjoy 30% off all Paris tours this summer. Book now and save!</p>
                                <a href="{{ route('travel.book', $package->id) }}"
                                    class="inline-block px-4 py-2 text-sm text-white bg-green-500 rounded-lg transition-colors hover:bg-green-400 sm:px-6 sm:py-3 sm:text-base">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
