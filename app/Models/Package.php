<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'destination_id',
        'description',
        'image',
        'duration',
        'price',
    ];

    public function destinations(){
        return $this->belongsTo(Destination::class);
    }
}
