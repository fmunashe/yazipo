<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoStream extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function video(): BelongsTo
    {
        return $this->belongsTo(Video::class);
    }
}
