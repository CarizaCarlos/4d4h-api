<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['game_id', 'url', 'display_order'])]
class GameImage extends Model
{
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
