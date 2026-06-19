<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['jam_id', 'title', 'description', 'max_winners'])]
class Category extends Model
{
    public function nominations()
    {
        return $this->hasMany(Nomination::class);
    }

    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }
}
