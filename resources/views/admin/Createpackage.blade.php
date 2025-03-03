@extends('layouts.admin')

@section('content')
    <div class="min-h-screen py-8 bg-gray-50">
        <div class="max-w-3xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4 bg-gradient-to-r from-blue-600 to-blue-700">
                    <h4 class="text-xl font-semibold text-white">Create New Package</h4>
                </div>
                <div class="p-6">
                    <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-6">
                        @csrf
                        <div>
                            <label for="Destination Name"
                                class="block text-sm font-medium text-gray-700">Destination</label>
                            <select
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                id="destination_id" name="destination_id" value="{{ old('destination_id') }}" required>
                                @foreach ($destinations as $destination)
                                    <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Package Name</label>
                            <input type="text"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                    </div>
                                    <input type="number"
                                        class="block w-full border-gray-300 rounded-md shadow-sm pl-7 focus:border-blue-500 focus:ring-blue-500"
                                        id="price" name="price" step="0.01" value="{{ old('price') }}" required>
                                </div>
                            </div>
                            <div>
                                <label for="duration" class="block text-sm font-medium text-gray-700">Duration
                                    (Days)</label>

                                <input type="number"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    id="duration" name="duration" required>
                            </div>
                        </div>
                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700">Package Image</label>
                            <div class="mt-1">
                                <input type="file"
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                                    id="image" name="image">
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="is_special" id="is_special" value="1" checked>
                            <label for="is_special" class="block text-sm font-medium text-gray-700">Special Package</label>
                        </div>
                        <div class="flex justify-end space-x-3">
                            <a href="{{ route('admin.packages') }}"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Cancel
                            </a>
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Create Package
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection