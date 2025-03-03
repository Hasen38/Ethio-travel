@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Bookings</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->description }}</td>
                <td>{{ $booking->price }}</td>
                <td>
                    {{-- <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                    {{-- <form action="{{ route('admin.bookings.destroy', $package->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
