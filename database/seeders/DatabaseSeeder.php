<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Species;
use DateTime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Species::create([
            'name' => 'Aysha',
            'default_colour' => 5,
            'description' => 'Fun-loving little thing.',
            'species_day' => date('2022-01-01'),
            'created_at' => now(),

        ]);

        Species::create([
            'name' => 'Brodley',
            'default_colour' => 4,
            'description' => 'Looks mean, but isn\'t.',
            'species_day' => date('2022-07-03'),
            'created_at' => now(),
        ]);
    }
}
