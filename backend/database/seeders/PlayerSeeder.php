<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            ['name' => 'Lionel Messi', 'position' => 'FW', 'nationality' => 'Argentina', 'image' => 'messi.jpg', 'club_id' => 8],
            ['name' => 'Cristiano Ronaldo', 'position' => 'FW', 'nationality' => 'Portugal', 'image' => 'ronaldo.jpg', 'club_id' => 2],
            ['name' => 'Kylian Mbappé', 'position' => 'FW', 'nationality' => 'França', 'image' => 'mbappe.jpg', 'club_id' => 3],
            ['name' => 'Erling Haaland', 'position' => 'FW', 'nationality' => 'Noruega', 'image' => 'haaland.jpg', 'club_id' => 9],
            ['name' => 'Neymar Jr.', 'position' => 'FW', 'nationality' => 'Brasil', 'image' => 'neymar.jpg', 'club_id' => 5],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
