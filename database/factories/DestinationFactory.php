<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinationFactory extends Factory
{
    protected $model = Destination::class;

    public function definition()
    {
        return [
            'name' => fake()->unique()->city(),
            'image_url' => 'destinations/' . fake()->image('public/storage/destinations', 640, 480, null, false),
            'description' => fake()->paragraph(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
