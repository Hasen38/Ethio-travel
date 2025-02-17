<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'user_id',
        'destination_id',
        'name',
        'description',
        'image',
        'duration',
        'price',
    ];

    public function destinations(){
        return $this->belongsTo(Destination::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
