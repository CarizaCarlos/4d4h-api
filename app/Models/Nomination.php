<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['admin_id', 'submission_id', 'category_id', 'final_rank'])]
class Nomination extends Model
{
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
