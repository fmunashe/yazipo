<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beneficiary extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function keyPopulation(): BelongsTo
    {
        return $this->belongsTo(KeyPopulation::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
