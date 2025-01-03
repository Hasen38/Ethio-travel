@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10 text-center">
    <h1 class="text-4xl font-bold text-gray-800">Welcome to Travel & Tour</h1>
    <p class="mt-4 text-xl text-gray-700">Explore the world with our best travel packages!</p>
    <div class="mt-10">
        <a href="/destinations" class="bg-gray-800 text-white py-2 px-6 rounded-full hover:bg-gray-700">Explore Destinations</a>
    </div>
</div>
<!-- Main Content -->
<!-- Hero Section -->
<section class="relative w-full h-96 bg-cover bg-center" style="background-image: url('https://example.com/hero-image.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto h-full flex items-center justify-center text-center text-white">
        <div>
            <h1 class="text-5xl font-bold leading-tight">Discover Your Next Adventure</h1>
            <p class="mt-4 text-xl">Explore the best destinations with exclusive offers and personalized tours.</p>
            <a href="/destinations" class="mt-6 inline-block bg-gray-800 text-white py-3 px-8 rounded-full text-lg hover:bg-gray-700">Start Your Journey</a>
        </div>
    </div>
</section>

<!-- Destinations Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800">Explore Our Top Destinations</h2>
        <p class="mt-2 text-lg text-gray-700">Find your next dream destination from our curated list of must-see places.</p>

        @foreach ($destinations as $destination)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
            <!-- Destination Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="" alt="Paris" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">{{$destination->name}}</h3>
                    <p class="mt-2 text-gray-600">A city of romance, art, and iconic landmarks like the Eiffel Tower.</p>
                    <a href="{{route('travel.show',$destination->id)}}" class="mt-4 inline-block text-gray-800 hover:underline">Explore Paris</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Best Offers Section -->
<section class="py-16 bg-gray-800 text-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold">Special Offers</h2>
        <p class="mt-2 text-lg">Get exclusive discounts on our most popular destinations and tours.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
            <!-- Offer Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://example.com/summer-sale-image.jpg" alt="Summer Sale" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Summer Sale - 30% Off Paris</h3>
                    <p class="mt-2 text-gray-600">Enjoy 30% off all Paris tours this summer. Book now and save!</p>
                    <a href="/offers/paris" class="mt-4 inline-block text-gray-800 hover:underline">Book Now</a>
                </div>
            </div>

            <!-- Offer Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://example.com/winter-special-image.jpg" alt="Winter Special" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Winter Special: New York</h3>
                    <p class="mt-2 text-gray-600">Exclusive offers for New York tours this winter. Don’t miss out!</p>
                    <a href="/offers/new-york" class="mt-4 inline-block text-gray-800 hover:underline">Book Now</a>
                </div>
            </div>

            <!-- Offer Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://example.com/spring-tokyo-image.jpg" alt="Spring Tokyo" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Spring in Tokyo</h3>
                    <p class="mt-2 text-gray-600">Celebrate cherry blossom season with a special tour of Tokyo!</p>
                    <a href="/offers/tokyo" class="mt-4 inline-block text-gray-800 hover:underline">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
