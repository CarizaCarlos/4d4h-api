<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['jam_id', 'team_id', 'participant_id'])]
class Participation extends Model
{
    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function participant()
    {
        return $this->belongsTo(User::class, 'participant_id');
    }
}
