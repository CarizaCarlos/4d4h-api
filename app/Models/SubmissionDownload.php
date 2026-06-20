<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'submission_id', 'url'])]
class SubmissionDownload extends Model
{
    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
