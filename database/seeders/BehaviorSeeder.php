<?php

namespace Database\Seeders;

use App\Models\Behavior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class BehaviorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(range(1, 30) as $range) {
            Behavior::create([
                'name' => fake()->randomElement(['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h']),
                'user_id' => fake()->numberBetween(1, User::count()),
            ]);
        }
    }
}
