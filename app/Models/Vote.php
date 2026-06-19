<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['participant_id', 'nomination_id', 'score'])]
class Vote extends Model
{
    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function participant()
    {
        return $this->belongsTo(User::class, 'participant_id');
    }
}
