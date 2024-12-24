<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

public function packages(){
    return $this->hasMany(Package::class);
}

}
