<?php

namespace App\Models;

use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'name',
        'phone_number',
        'num_guests',
        'booking_date',
        'status',
        'session_id'
    ];

    protected $casts = [
        'booking_date' => 'datetime',
        'num_guests' => 'integer',
        'phone_number' => 'string'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
