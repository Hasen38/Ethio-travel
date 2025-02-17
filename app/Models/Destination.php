<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

    public function packages(): HasMany
    {
        return $this->hasMany(Package::class);
    }
}
