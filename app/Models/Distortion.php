<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Distortion extends Model
{
    use HasFactory;

    public function reframes(): HasMany
    {
        return $this->hasMany(Reframe::class);
    }
}
