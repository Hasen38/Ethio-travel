<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Package;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'package_id' => Package::factory(),
            'name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'num_guests' => fake()->numberBetween(1, 5),
            'booking_date' => fake()->dateTimeBetween('+1 day', '+6 months'),
            'status' => fake()->randomElement(['pending', 'paid', 'cancelled']),
            'session_id' => fake()->uuid(),
        ];
    }

    public function pending()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'pending',
            ];
        });
    }

    public function paid()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'paid',
            ];
        });
    }

    public function cancelled()
    {
        return $this->state(function (array $attributes) {
            return [
                'status' => 'cancelled',
            ];
        });
    }
}
