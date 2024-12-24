@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-blue-600 text-center">Explore Our Popular Destinations</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-10">
            <!-- Destination Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <img src="https://example.com/paris-image.jpg" alt="Paris" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Paris Adventure</h2>
                    <p class="mt-2 text-gray-600">Experience the romance and history of Paris with a guided tour of the city's iconic landmarks.</p>

                    <div class="mt-4 text-gray-800">
                        <ul class="space-y-2">
                            <li><strong>Duration:</strong> 7 Days</li>
                            <li><strong>Price:</strong> $1,499</li>
                            <li><strong>Tour Type:</strong> Guided Tour</li>
                            <li><strong>Included:</strong> Accommodation, Meals, Entrance Fees</li>
                        </ul>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        <a href="/booking/paris" class="inline-block bg-blue-600 text-white py-2 px-6 rounded-full text-lg hover:bg-blue-500 transition duration-300 ease-in-out">Book Now</a>
                        <span class="text-xl font-semibold text-blue-600">$1,499</span>
                    </div>
                </div>
            </div>

            <!-- Destination Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <img src="https://example.com/new-york-image.jpg" alt="New York" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">New York City</h2>
                    <p class="mt-2 text-gray-600">Explore the city that never sleeps! A vibrant urban adventure awaits you with a mix of culture, entertainment, and shopping.</p>

                    <div class="mt-4 text-gray-800">
                        <ul class="space-y-2">
                            <li><strong>Duration:</strong> 5 Days</li>
                            <li><strong>Price:</strong> $999</li>
                            <li><strong>Tour Type:</strong> City Tour</li>
                            <li><strong>Included:</strong> Accommodation, Meals, City Pass</li>
                        </ul>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        <a href="/booking/new-york" class="inline-block bg-blue-600 text-white py-2 px-6 rounded-full text-lg hover:bg-blue-500 transition duration-300 ease-in-out">Book Now</a>
                        <span class="text-xl font-semibold text-blue-600">$999</span>
                    </div>
                </div>
            </div>

            <!-- Destination Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300 ease-in-out">
                <img src="https://example.com/tokyo-image.jpg" alt="Tokyo" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-semibold">Tokyo Tour</h2>
                    <p class="mt-2 text-gray-600">Discover Tokyo, a perfect blend of traditional culture and modern attractions like Shibuya Crossing and Tokyo Tower.</p>

                    <div class="mt-4 text-gray-800">
                        <ul class="space-y-2">
                            <li><strong>Duration:</strong> 6 Days</li>
                            <li><strong>Price:</strong> $1,199</li>
                            <li><strong>Tour Type:</strong> Cultural & City Tour</li>
                            <li><strong>Included:</strong> Accommodation, Meals, Guided Tour</li>
                        </ul>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        <a href="/booking/tokyo" class="inline-block bg-blue-600 text-white py-2 px-6 rounded-full text-lg hover:bg-blue-500 transition duration-300 ease-in-out">Book Now</a>
                        <span class="text-xl font-semibold text-blue-600">$1,199</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
