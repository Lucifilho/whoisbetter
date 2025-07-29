<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vote;
use App\Models\Poll;
use App\Models\Player;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $poll = Poll::first();

        // Gerando votos aleatórios
        for ($i = 0; $i < 50; $i++) {
            Vote::create([
                'poll_id' => $poll->id,
                'player_id' => Player::inRandomOrder()->first()->id,
                'ip_address' => fake()->ipv4,
            ]);
        }
    }
}
