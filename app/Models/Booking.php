<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
    'user_id',
    'package_id',
     'name',
    'phone_number',
    'num_guests',
    'booking_date',
    'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
     }

}
