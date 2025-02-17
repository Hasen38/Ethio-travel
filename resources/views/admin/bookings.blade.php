@extends("layouts.admin")
@section('content')
<div class="container px-4 py-8 mx-auto">
    <h2 class="mb-6 text-2xl font-semibold">Bookings</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Name</th>
                    <th class="px-4 py-2 border-b">Description</th>
                    <th class="px-4 py-2 border-b">Price</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border-b">{{ $booking->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $booking->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $booking->description }}</td>
                    <td class="px-4 py-2 border-b">{{ $booking->price }}</td>
                    <td class="px-4 py-2 border-b">
                        {{-- <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                        <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button> --}}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
