
@extends('layouts.admin')

@section('content')
<div class="py-8 min-h-screen bg-gray-50">
    <div class="px-4 mx-auto max-w-3xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="px-6 py-4 bg-gradient-to-r from-blue-600 to-blue-700">
                <h4 class="text-xl font-semibold text-white">Create New Package</h4>
            </div>
            <div class="p-6">
                <form action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Package Name</label>
                        <input type="text" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="name" name="name"  required>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="description" name="description"  rows="4" required>{{ old('description') }}</textarea>
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Tour Image</label>
                        <div class="mt-1">
                            <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" id="image_url" name="image_url">
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.packages') }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md border border-gray-300 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cancel
                        </a>
                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md border border-transparent shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Create Tour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
