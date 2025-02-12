<?php

namespace Database\Seeders;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agencies = User::where('role', 'agency')->get();

        foreach ($agencies as $agency) {
            for ($i = 1; $i <= 3; $i++) {
                Trip::create([
                    'user_id' => $agency->id,
                    'title' => "Trip to " . Str::random(6),
                    'description' => "Experience a fantastic journey to " . Str::random(8),
                    'location' => ['Bali', 'Paris', 'New York', 'Tokyo', 'London'][rand(0, 4)],
                    'price' => rand(100, 1000),
                    'start_date' => now()->addDays(rand(1, 30)),
                    'end_date' => now()->addDays(rand(31, 60)),
                    'available_seats' => rand(5, 20),
                    'destination' => ['Bali', 'Paris', 'New York', 'Tokyo', 'London'][rand(0, 4)],
                    'status' => ['draft', 'published', 'completed', 'cancelled'][rand(0, 3)],
                ]);
            }
        }
    }
}
