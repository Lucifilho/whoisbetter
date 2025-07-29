<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = [
            ['name' => 'Barcelona', 'country' => 'Spain', 'founded' => 1899, 'stadium' => 'Camp Nou', 'image' => 'barcelona.jpg'],
            ['name' => 'Real Madrid', 'country' => 'Spain', 'founded' => 1902, 'stadium' => 'Santiago Bernabéu', 'image' => 'real_madrid.jpg'],
            ['name' => 'Manchester United', 'country' => 'England', 'founded' => 1878, 'stadium' => 'Old Trafford', 'image' => 'manchester_united.jpg'],
            ['name' => 'Bayern Munich', 'country' => 'Germany', 'founded' => 1900, 'stadium' => 'Allianz Arena', 'image' => 'bayern_munich.jpg'],
            ['name' => 'Santos', 'country' => 'Brazil', 'founded' => 1912, 'stadium' => 'Estádio Urbano Caldeira', 'image' => 'santos.jpg'],
            ['name' => 'Al-Nassr', 'country' => 'Saudi Arabia', 'founded' => 1955, 'stadium' => 'King Saud University Stadium', 'image' => 'al_nassr.jpg'],
            ['name' => 'Paris Saint-Germain', 'country' => 'France', 'founded' => 1970, 'stadium' => 'Parc des Princes', 'image' => 'psg.jpg'],
            ['name' => 'Inter Miami', 'country' => 'USA', 'founded' => 2018, 'stadium' => 'DRV PNK Stadium', 'image' => 'inter_miami.jpg'],
            ['name' => 'Manchester City', 'country' => 'England', 'founded' => 1880, 'stadium' => 'Etihad Stadium', 'image' => 'manchester_city.jpg'],
            ['name' => 'Juventus', 'country' => 'Italy', 'founded' => 1897, 'stadium' => 'Allianz Stadium', 'image' => 'juventus.jpg'],
            ['name' => 'AC Milan', 'country' => 'Italy', 'founded' => 1899, 'stadium' => 'San Siro', 'image' => 'ac_milan.jpg'],

        ];

        foreach ($clubs as $club) {
            Club::create($club);
        }
    }
}
