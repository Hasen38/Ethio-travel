<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function bookings()
    {
        $bookings = Booking::latest()->paginate(8);
        return view('admin.bookings',compact('bookings'));
    }

    public function packages()
    {
        $packages = Package::latest()->paginate(8);
        return view('admin.packages',compact('packages'));
    }
}
