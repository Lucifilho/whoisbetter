<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ClubSeeder::class,
            PlayerSeeder::class,
            PollSeeder::class,
            PollPlayerSeeder::class,
            //VoteSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Luciel Filho',
            'email' => 'lucielfilho@hotmail.com',
            'password' => bcrypt('Lu12lu12@'),
        ]);
    }
}
