<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'destination_id',
        'name',
        'description',
        'image',
        'duration',
        'price',
        'is_special'
    ];

    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
