<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['submission_id', 'url', 'display_order'])]
class SubmissionMultimedia extends Model
{
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
