@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">My Bookings</h1>
    @if($bookings->isEmpty())
        <p class="text-gray-500">You have no bookings.</p>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-2 px-4 border-b">Booking ID</th>
                        <th class="py-2 px-4 border-b">Destination</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $booking->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $booking->destination }}</td>
                            <td class="py-2 px-4 border-b">{{ $booking->date }}</td>
                            <td class="py-2 px-4 border-b">{{ $booking->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
