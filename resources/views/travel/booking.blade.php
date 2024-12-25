@extends('layouts.app')

@section('content')
<div class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-4xl mx-auto p-8 bg-white shadow-lg rounded-lg">
        <h2 class="text-3xl font-semibold text-center text-gray-700 mb-8">Book Your Dream Vacation</h2>

        <form action="" method="POST">
            @csrf

            <!-- Destination Selection -->
            <div class="mb-6">
                <label for="destination" class="block text-lg font-medium text-gray-600 mb-2">Select Your Destination</label>
                <select id="destination" name="destination_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Select a destination</option>
                    {{-- @foreach($destinations as $destination) --}}
                        {{-- <option value="{{ $destination->id }}>{{ $destination->name }}</option> --}}
                    {{-- @endforeach --}}
                </select>
            </div>

            <!-- Package Selection -->
            <div class="mb-6">
                <label for="package" class="block text-lg font-medium text-gray-600 mb-2">Select a Package</label>
                <select id="package" name="package_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    {{-- <option value="" disabled selected>Select a package</option>
                    @foreach($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name }} - ${{ number_format($package->price, 2) }}</option>
                    @endforeach
                </select>
            </div> --}}

            <!-- Personal Information -->
            <div class="mb-6">
                <label for="name" class="block text-lg font-medium text-gray-600 mb-2">Your Full Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-lg font-medium text-gray-600 mb-2">Your Email Address</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-lg font-medium text-gray-600 mb-2">Your Phone Number</label>
                <input type="tel" id="phone" name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Booking Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg text-xl font-semibold hover:bg-blue-600 focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50">
                    Confirm Booking
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
