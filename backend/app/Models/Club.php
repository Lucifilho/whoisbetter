<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /** @use HasFactory<\Database\Factories\ClubFactory> */
    use HasFactory;

    protected $fillable = ['name', 'country', 'founded', 'stadium', 'image'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
