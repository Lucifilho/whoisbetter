<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Poll;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poll::create([
            'title' => 'Quem é o melhor jogador do mundo em 2025?',
            'description' => 'Vote no jogador que você acha que teve o melhor desempenho em 2025.'
        ]);

        
    }
}
