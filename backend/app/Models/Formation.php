<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    /** @use HasFactory<\Database\Factories\FormationFactory> */
    use HasFactory;

    protected $fillable = ['name', 'structure'];

    protected $casts = [
        'structure' => 'array',
    ];

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
