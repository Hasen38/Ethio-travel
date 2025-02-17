@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="mb-4 text-2xl font-bold">Book {{ $package->name }}</h2>

                @if ($errors->any())
                    <div class="p-4 mb-4 bg-red-50 rounded-md border border-red-200">
                        <div class="text-sm text-red-600">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('travel.store', $package->id) }}" class="space-y-4">
                    @csrf
                    @method('POST')
                    <div>
                        <input type="hidden" name="package_id" value="{{ $package->id }}">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="name" id="name" value
                               class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                               class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <div>
                        <label for="num_guests" class="block text-sm font-medium text-gray-700">Number of Guests</label>
                        <input type="number" name="num_guests" id="num_guests" value="{{ old('num_guests', 1) }}"
                               min="1" max="10"
                               class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <div>
                        <label for="booking_date" class="block text-sm font-medium text-gray-700">Booking Date</label>
                        <input type="date" name="booking_date" id="booking_date" value="{{ old('booking_date') }}"
                               min="{{ date('Y-m-d', strtotime('+1 day')) }}"
                               class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <div class="p-4 bg-gray-50 rounded-md">
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-700">Price per person:</span>
                            <span class="text-sm font-medium text-gray-900">${{ number_format($package->price, 2) }}</span>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ url()->previous() }}"
                           class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md border border-gray-300 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Cancel
                        </a>
                        <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md border border-transparent shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Proceed to Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
