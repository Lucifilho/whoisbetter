<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;

    protected $fillable = ['name', 'position', 'nationality', 'image', 'club_id'];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function polls()
    {
        return $this->belongsToMany(Poll::class, 'player_poll')->withTimestamps();
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->using(\App\Models\PlayerTeam::class)
            ->withPivot('position')
            ->withTimestamps();
    }

}
