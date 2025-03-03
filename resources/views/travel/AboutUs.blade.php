@extends('layouts.app')

@section('content')
<div class="container px-4 py-12 mx-auto">
    <div class="flex flex-col justify-center items-center space-y-8">
        <div class="mb-12 text-center">
            <h1 class="mb-4 text-5xl font-bold text-blue-800">About Us</h1>
            <p class="max-w-2xl text-xl text-gray-600">We are a passionate team of travel enthusiasts dedicated to creating unforgettable journey experiences around Ethiopia.</p>
        </div>

        <div class="grid gap-8 max-w-6xl md:grid-cols-3">
            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="mb-4 text-blue-600">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-semibold text-center">Global Experience</h3>
                <p class="text-center text-gray-600">With over 15 years of experience, we've helped thousands of travelers explore the world's most beautiful destinations.</p>
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="mb-4 text-blue-600">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-semibold text-center">Expert Team</h3>
                <p class="text-center text-gray-600">Our team of travel experts crafts personalized itineraries to match your unique preferences and dreams.</p>
            </div>

            <div class="p-6 bg-white rounded-lg shadow-lg">
                <div class="mb-4 text-blue-600">
                    <svg class="mx-auto w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-semibold text-center">Quality Service</h3>
                <p class="text-center text-gray-600">We pride ourselves on providing exceptional service and creating memorable experiences for our clients.</p>
            </div>
        </div>

        <div class="mt-16 max-w-4xl text-center">
            <h2 class="mb-6 text-3xl font-bold text-blue-800">Our Mission</h2>
            <p class="mb-8 text-lg text-gray-600">To inspire and enable people to explore the world safely and sustainably, creating lasting memories and fostering cultural understanding through exceptional travel experiences.</p>
            <a href="#" class="inline-block px-8 py-3 text-white bg-blue-600 rounded-lg transition duration-300 hover:bg-blue-700">Contact Us</a>
        </div>
    </div>
</div>
@endsection
