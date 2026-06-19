<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'game_id', 'url'])]
class GameDownload extends Model
{
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
