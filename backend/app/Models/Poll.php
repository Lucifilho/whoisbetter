<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /** @use HasFactory<\Database\Factories\PollFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_poll')->withTimestamps();
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
