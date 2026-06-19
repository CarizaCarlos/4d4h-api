<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['theme', 'registration_start', 'submission_start', 'nominations_start', 'voting_start', 'reviewing_start', 'results_start', 'jam_end'])]
class Jam extends Model
{
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
