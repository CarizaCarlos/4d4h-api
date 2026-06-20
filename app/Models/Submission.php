<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['team_id', 'title', 'description', 'itch_url', 'miniature_url'])]
class Submission extends Model
{
    public function submissionMultimedia()
    {
        return $this->hasMany(SubmissionMultimedia::class);
    }

    public function submissionDownloads()
    {
        return $this->hasMany(SubmissionDownload::class);
    }

    public function nominations()
    {
        return $this->hasMany(Nomination::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
