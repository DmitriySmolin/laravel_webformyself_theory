<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /* Связи моделей - Many to Many */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
