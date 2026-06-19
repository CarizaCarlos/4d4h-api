<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['jam_id', 'name'])]
class Team extends Model
{
    public function game()
    {
        return $this->hasOne(Game::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }
}
