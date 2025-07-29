<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Player;
use App\Models\Team;

class PlayerTeam extends Pivot
{
    protected $table = 'player_team';

    protected $fillable = [
        'player_id',
        'team_id',
        'position',
    ];

    public $timestamps = true;

    /**
     * Relacionamento com o jogador
     */
    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Relacionamento com o time
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Escopo: jogadores por posição
     */
    public function scopeWherePosition($query, string $position)
    {
        return $query->where('position', $position);
    }

    /**
     * Accessor para exibir posição formatada
     */
    public function getFormattedPositionAttribute(): string
    {
        return ucfirst(str_replace('_', ' ', $this->position));
    }
}
