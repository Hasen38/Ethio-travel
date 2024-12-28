<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $fillable = [
        'user_id',
        'package_id',
        'name',
        'phone_number',
        'num_guests',
        'booking_date',
        'status',
    ];
}
