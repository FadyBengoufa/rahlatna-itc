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
                    'title' => [
                        'Paris Getaway',
                        'Bali Adventure',
                        'New York Explorer',
                        'Tokyo Discovery',
                        'London Experience',
                    ][rand(0, 4)],
                    'destination' => ['Bali', 'Paris', 'New York', 'Tokyo', 'London'][rand(0, 4)],
                    'price' => rand(100, 1000),
                    'available_seats' => rand(5, 20),
                    'description' => "Experience a fantastic journey to " . Str::random(8),
                    'start_date' => now()->addDays(rand(1, 30)),
                    'end_date' => now()->addDays(rand(31, 60)),
                    'status' => 'published',
                ]);
            }
        }
    }
}
