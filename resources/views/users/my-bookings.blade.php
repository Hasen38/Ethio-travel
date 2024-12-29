@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Bookings</h1>
    @if($bookings->isEmpty())
        <p>You have no bookings.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->destination }}</td>
                        <td>{{ $booking->date }}</td>
                        <td>{{ $booking->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
