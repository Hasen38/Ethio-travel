<div class="fixed p-6 w-64 h-screen bg-gray-800 shadow-lg sidebar" x-data>
    <ul class="p-0 space-y-6 list-none sidebar-menu">
        {{-- <li class="sidebar-item">
            {{-- <a href="{{route('admin.users')}}" class="flex items-center p-3 text-lg text-gray-300 no-underline rounded-lg transition-all duration-200 hover:text-blue-500 hover:bg-gray-700">
                <i class="mr-3 w-6 fas fa-user"></i> Admin Users
            </a>
         </li> --}}
        <li class="sidebar-item">
            <a href="{{route('admin.packages')}}" class="flex items-center p-3 text-lg text-gray-300 no-underline rounded-lg transition-all duration-200 hover:text-blue-500 hover:bg-gray-700">
                <i class="mr-3 w-6 fas fa-cog"></i> Packages
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('admin.bookings')}}" class="flex items-center p-3 text-lg text-gray-300 no-underline rounded-lg transition-all duration-200 hover:text-blue-500 hover:bg-gray-700">
                <i class="mr-3 w-6 fas fa-sign-out-alt"></i> Bookings
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('admin.tours')}}" class="flex items-center p-3 text-lg text-gray-300 no-underline rounded-lg transition-all duration-200 hover:text-blue-500 hover:bg-gray-700">
                <i class="mr-3 w-6 fas fa-sign-out-alt"></i> Tours
            </a>
        </li>
    </ul>
</div>


