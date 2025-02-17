<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\DestinationSeeder;
use Database\Seeders\PackageSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DestinationSeeder::class,
            PackageSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
