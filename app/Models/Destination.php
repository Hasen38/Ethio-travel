<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

public function package():HasMany
{
    return $this->hasMany(Package::class);
}

}
