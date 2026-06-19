<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['team_id', 'title', 'description', 'itch_url', 'miniature_url'])]
class Game extends Model
{
    public function gameImages()
    {
        return $this->hasMany(GameImage::class);
    }

    public function gameDownloads()
    {
        return $this->hasMany(GameDownload::class);
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
