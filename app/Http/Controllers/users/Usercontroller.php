<?php

namespace App\Http\Controllers\users;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    public function bookings()
    {
        $bookings= Booking::where('user_id',Auth::user()->id)->get();
        return view('users.my-bookings',compact('bookings'));
    }
}
