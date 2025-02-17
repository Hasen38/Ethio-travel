@extends('layouts.admin')

@section('content')
<div class="py-8 min-h-screen bg-gray-50">
    @if (session('success'))
    <div class="px-4 py-2 text-white bg-green-500 rounded-lg">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{route('admin.tours.create')}}" class="px-4 py-2 pl-4 text-white bg-gray-800 rounded-lg">Create Tours</a>

    <div class="px-4 mx-auto max-w-3xl sm:px-6 lg:px-8">

        <div class="overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="px-6 py-4 bg-gray-800">
                <h4 class="text-xl font-semibold text-white">Create New Package</h4>
            </div>

            <div class="p-6">

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
                        @foreach ($tours as $tour)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border-b">{{ $tour->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $tour->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $tour->description }}</td>
                            <td class="px-4 py-2 border-b">{{ $tour->image }}</td>
                            <td class="px-4 py-2 border-b">
                                {{-- <a href="{{ route('admin.tours.edit', $tour->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
