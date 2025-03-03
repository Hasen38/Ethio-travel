@extends('layouts.app')

@section('content')
<!-- Main Content -->
<!-- Hero Section -->
<section class="relative w-full h-screen bg-fixed bg-gray-900 bg-center bg-cover" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');">
    <div class="absolute inset-0 opacity-60 bg-blue/20"></div>
    <div class="container relative flex items-center justify-center h-full mx-auto text-center text-white">
        <div class="max-w-3xl px-4">
            <h1 class="text-5xl font-bold leading-tight md:text-6xl lg:text-7xl">Discover Your Next Adventure</h1>
            <p class="mt-6 text-xl md:text-2xl">Explore the best destinations with exclusive offers and personalized tours.</p>
            <div class="flex flex-wrap justify-center gap-4 mt-8">
                <a href="/destinations" class="px-8 py-3 text-lg font-semibold text-white transition-all duration-300 bg-blue-600 rounded-full hover:bg-blue-700 hover:shadow-lg">Start Your Journey</a>
                <a href="/offers" class="px-8 py-3 text-lg font-semibold text-white transition-all duration-300 border-2 border-white rounded-full hover:bg-white hover:text-blue-600">View Offers</a>
            </div>
        </div>
    </div>
</section>
<div>
</div>

<!-- Services Section -->
<section class="py-20 bg-white">
    <div class="container px-4 mx-auto">
        <div class="mb-16 text-center">
            <h2 class="text-4xl font-bold text-gray-900">Our Services</h2>
            <p class="mt-4 text-xl text-gray-600">Experience premium travel services tailored to your needs</p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Luxury Accommodations -->
            <div class="p-6 text-center transition-all duration-300 rounded-xl hover:shadow-xl">
                <div class="inline-block p-4 mb-6 text-blue-600 bg-blue-100 rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="mb-4 text-xl font-semibold">Luxury Accommodations</h3>
                <p class="text-gray-600">Hand-picked luxury hotels and resorts for your comfort</p>
            </div>

            <!-- Guided Tours -->
            <div class="p-6 text-center transition-all duration-300 rounded-xl hover:shadow-xl">
                <div class="inline-block p-4 mb-6 text-blue-600 bg-blue-100 rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                </div>
                <h3 class="mb-4 text-xl font-semibold">Guided Tours</h3>
                <p class="text-gray-600">Expert local guides to enhance your travel experience</p>
            </div>

            <!-- Transportation -->
            <div class="p-6 text-center transition-all duration-300 rounded-xl hover:shadow-xl">
                <div class="inline-block p-4 mb-6 text-blue-600 bg-blue-100 rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                    </svg>
                </div>
                <h3 class="mb-4 text-xl font-semibold">Transportation</h3>
                <p class="text-gray-600">Comfortable and reliable transportation services</p>
            </div>

            <!-- Custom Packages -->
            <div class="p-6 text-center transition-all duration-300 rounded-xl hover:shadow-xl">
                <div class="inline-block p-4 mb-6 text-blue-600 bg-blue-100 rounded-full">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                </div>
                <h3 class="mb-4 text-xl font-semibold">Custom Packages</h3>
                <p class="text-gray-600">Tailored travel packages to match your preferences</p>
            </div>
        </div>
    </div>
</section>

<!-- Destinations Section -->
<section class="py-20 bg-gray-50" id="destination">
    <div class="container px-4 mx-auto">
        <div class="mb-16 text-center">
            <h2 class="text-4xl font-bold text-gray-900">Explore Our Top Destinations</h2>
            <p class="mt-4 text-xl text-gray-600">Find your next dream destination from our curated list of must-see places.</p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($destinations as $destination)
            <div class="overflow-hidden transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                <div class="relative overflow-hidden">
                    <img src="{{ 'storage/'.$destination->image_url }}" alt="{{ $destination->name }}" class="object-cover w-full h-64 transition-transform duration-300 hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t to-transparent from-black/80">
                        <h3 class="text-2xl font-semibold text-white">{{ $destination->name }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600">{{ $destination->description }}</p>
                    <div class="mt-4">
                        <a href="{{ route('travel.show', $destination->id) }}"
                           class="inline-flex items-center text-blue-600 hover:text-blue-700">
                            Explore More
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Special Offers Section -->
<section class="py-20 text-white bg-blue-900" id="packages">
    <div class="container px-4 mx-auto">
        <div class="mb-16 text-center">
            <h2 class="text-4xl font-bold">Special Offers</h2>
            <p class="mt-4 text-xl text-blue-200">Get exclusive discounts on our most popular destinations and tours.</p>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($packages as $package)
            <div class="overflow-hidden bg-white shadow-lg rounded-xl">
                <div class="relative">
                    <img src="{{'storage/'. $package->image }}" alt="{{ $package->title }}" class="object-cover w-full h-48">
                    <div class="absolute px-4 py-2 text-white bg-red-600 rounded-full top-4 right-4">
                        30% OFF
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900">{{ $package->title }}</h3>
                    <p class="mt-3 text-gray-600">{{ $package->description }}</p>
                    <div class="flex items-center justify-between mt-6">
                        <span class="text-2xl font-bold text-blue-600">${{ $package->price }}</span>
                        <a href="{{ route('travel.book', $package->id) }}"
                           class="px-6 py-2 text-white transition-colors duration-300 bg-blue-600 rounded-full hover:bg-blue-700">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
