<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'poll_id', 'formation_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class)
            ->using(\App\Models\PlayerTeam::class)
            ->withPivot('position')
            ->withTimestamps();
    }

}
