<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'destination_id' => Destination::factory(),
            'name' => fake()->randomElement([
                'Scenic',
                'Adventure',
                'Cultural',
                'Luxury',
                'Discovery'
            ]) . ' ' . fake()->randomElement([
                'Tour',
                'Expedition',
                'Getaway',
                'Experience',
                'Journey'
            ]),
            'description' => fake()->paragraph(3),
            'price' => fake()->randomElement([
                999,
                1499,
                1999,
                2499,
                2999,
                3499,
                3999,
                4499,
                4999
            ]),
            'duration' => fake()->randomElement([3, 5, 7, 10, 14]),  // Store as integer
            'is_special' => fake()->boolean(20),  // 20% chance of being special
            'image_url' => 'packages/package-' . fake()->unique()->numberBetween(1, 20) . '.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
