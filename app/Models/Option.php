<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}