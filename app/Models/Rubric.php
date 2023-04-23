<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Rubric
 * @package App\Models
 * @mixin Builder Добавляет подсказки при работе с Eloquent ORM
 */
class Rubric extends Model
{
    use HasFactory;

    /* Связи моделей - One to one */
    //$rubric = Post::find(1);
    //$rubric->post;
    public function post()
    {
//        return $this->hasOne('App\Models\Post'); // в виде строки
        return $this->hasOne(Post::class); // в виде ссылки
    }

    /* Связи моделей - One to Many */
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
