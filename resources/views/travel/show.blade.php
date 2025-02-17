@extends('layouts.app')

@section('content')
<div class="container py-10 mx-auto">
    <h1 class="text-4xl font-bold text-center text-blue-600">Explore Our Popular Destinations</h1>
    <div class="grid grid-cols-1 gap-8 mt-10 sm:grid-cols-2 md:grid-cols-3">
        @foreach ($packages as $package)
        <!-- Destination Card 1 -->
        <div class="overflow-hidden bg-white rounded-lg shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
            <img src="{{ asset("storage/{$package->image}") }}" alt="{{ $package->name }}" class="object-cover w-full h-64">
            <div class="p-6">
                <h2 class="text-xl font-semibold">{{$package->name}}</h2>
                <p class="mt-2 text-gray-600">{{$package->description}}</p>
                <div class="mt-4 text-gray-800">
                    <ul class="space-y-2">
                        <li><strong>{{$package->duration }}</strong></li>
                        {{-- <li><strong>Price:</strong>{{$package->price}}</li> --}}
                        <li><strong>Tour Type:</strong> Guided Tour</li>
                        <li><strong>Included:</strong> Accommodation, Meals, Entrance Fees</li>
                    </ul>
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('travel.book',$package->id)}}" class="inline-block px-6 py-2 text-lg text-white bg-blue-600 rounded-full transition duration-300 ease-in-out hover:bg-blue-500">Book Now</a>
                    <span class="text-xl font-semibold text-blue-600">{{$package->price}}</span>
                </div>
            </div>
        </div>
        @endforeach

            <!-- Destination Card 2 -->
            {{-- <div class="overflow-hidden bg-white rounded-lg shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
                <img src="https://example.com/new-york-image.jpg" alt="New York" class="object-cover w-full h-64">
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

                    <div class="flex justify-between items-center mt-6">
                        <a href="/booking/new-york" class="inline-block px-6 py-2 text-lg text-white bg-blue-600 rounded-full transition duration-300 ease-in-out hover:bg-blue-500">Book Now</a>
                        <span class="text-xl font-semibold text-blue-600">$999</span>
                    </div>
                </div>
            </div>

            <!-- Destination Card 3 -->
            <div class="overflow-hidden bg-white rounded-lg shadow-lg transition duration-300 ease-in-out hover:shadow-xl">
                <img src="https://example.com/tokyo-image.jpg" alt="Tokyo" class="object-cover w-full h-64">
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

                    <div class="flex justify-between items-center mt-6">
                        <a href="/booking/tokyo" class="inline-block px-6 py-2 text-lg text-white bg-blue-600 rounded-full transition duration-300 ease-in-out hover:bg-blue-500">Book Now</a>
                        <span class="text-xl font-semibold text-blue-600">$1,199</span>
                    </div>
                </div> --}}
                {{-- </div> --}}
        </div>
    </div>
@endsection
