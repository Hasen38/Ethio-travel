@extends('layouts.app')

@section('content')

    <div class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Book a Tour</h1>
            <form action="{{route('travel.store',$package->id)}}" method="POST">
                @csrf
                <div class="mb-4"> <label for="name"
                        class="block text-sm font-medium text-gray-700">Name</label> <input type="text" id="name"
  4                      name="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required> </div>
                <div class="mb-4"> <label for="phone" class="block text-sm font-medium text-gray-700">Phone
                        Number</label> <input type="text" id="phone" name="phone_number"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required> </div>
                <div class="mb-4"> <label for="tour_date" class="block text-sm font-medium text-gray-700">Tour
                        Date</label> <input type="date" id="tour_date" name="booking_date"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required> </div>
                <div class="mb-4"> <label for="num_guests" class="block text-sm font-medium text-gray-700">Number of
                        Guests</label> <input type="number" id="num_guests" name="num_guests"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required> </div>

                        {{-- <div class="mb-4"> <label for="user_id"
                            class="block text-sm font-medium text-gray-700">Destination</label> <input type="hidden" id="user_id"
                            name="user_id"
                            value="{Auth::user->id}"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required> </div> --}}
                        <button type="submit"
                    class="w-full py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Book
                    Now</button>
            </form>
        </div>
    </div>
@endsection
