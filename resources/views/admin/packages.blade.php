@extends('layouts.admin')
@section('content')
<div class="container px-4 mx-auto">
    @if (session('success'))
        <div class="p-4 mb-4 text-green-800 bg-green-100 rounded-md">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="mb-4 text-2xl font-bold">Packages</h2>
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

                <a href="{{ route('admin.packages.create') }}" class="px-2 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">Create Package</a>
                @foreach($packages as $package)
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2 border-b">{{ $package->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $package->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $package->description }}</td>
                    <td class="px-4 py-2 border-b">{{ $package->price }}</td>
                    <td class="px-4 py-2 border-b">
                        <img src="{{ asset("storage/{$package->image}") }}" alt="{{ $package->name }}" class="object-cover w-16 h-16">
                    </td>
                    <td class="px-4 py-2 border-b">
                        {{-- <a href="{{ route('admin.packages.edit', $package->id) }}" class="px-2 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a> --}}
                        <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
