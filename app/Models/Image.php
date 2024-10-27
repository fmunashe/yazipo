<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Outerweb\ImageLibrary\Models\ImageConversion;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $guarded = [];

    public function conversion(): HasOne
    {
        return $this->hasOne(ImageConversion::class);
    }

    public function imagePaths()
    {
        return [];
    }
}
