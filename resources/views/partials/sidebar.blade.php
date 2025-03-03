<div class="fixed p-4 w-64 h-screen bg-gradient-to-br shadow-lg from-slate-800 to-slate-900">
    <ul class="mt-6 space-y-2">
        <li>
            <a href="{{route('admin.tours')}}"
               class="flex gap-3 items-center px-4 py-3 text-gray-300 rounded-lg transition-all duration-200 hover:bg-slate-700/50 hover:text-blue-400 hover:translate-x-1">
                <i class="w-5 text-lg fas fa-map-marked-alt"></i>
                <span class="font-medium">Destinations</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.packages')}}"
               class="flex gap-3 items-center px-4 py-3 text-gray-300 rounded-lg transition-all duration-200 hover:bg-slate-700/50 hover:text-blue-400 hover:translate-x-1">
                <i class="w-5 text-lg fas fa-box-open"></i>
                <span class="font-medium">Packages</span>
            </a>
        </li>
        <li>
            <a href="{{route('admin.bookings')}}"
               class="flex gap-3 items-center px-4 py-3 text-gray-300 rounded-lg transition-all duration-200 hover:bg-slate-700/50 hover:text-blue-400 hover:translate-x-1">
                <i class="w-5 text-lg fas fa-calendar-check"></i>
                <span class="font-medium">Bookings</span>
            </a>
        </li>
    </ul>
</div>

<!-- Replace the Font Awesome script with a CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
