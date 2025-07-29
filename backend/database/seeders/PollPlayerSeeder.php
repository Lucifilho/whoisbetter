<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poll;
use App\Models\Player;

class PollPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poll = Poll::first();
        $players = Player::all();

        foreach ($players as $player) {
            $poll->players()->attach($player->id);
        }
    }
}
