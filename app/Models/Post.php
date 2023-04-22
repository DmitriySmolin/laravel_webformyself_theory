<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * @package App\Models
 * @mixin Builder Добавляет подсказки при работе с Eloquent ORM
 */
class Post extends Model
{
    use HasFactory;

//    protected $table = 'my_posts'; // переименование имени таблицы по умолчанию на my_posts
//    protected $primaryKey = 'post_id'; // указываем поле первичного ключа в таблице при поиске
//    public $incrementing = false; // неинкрементируемое поле
//    public $keyType = 'string'; // указывает на тип данных для первичного ключа
//    public $timestamps = false; // отключает отслеживание за заполнением данного поля
//    protected $attributes = [
//        'content' => 'Lorem ipsum...'
//    ]; // массив, с помощью которого мы можем определять автоматическое заполнение для полей
    protected $fillable = ['title', 'content']; // список белых полей, которые мы можем заполнять массово через QueryBuilder

    /* Связи моделей - One to one | One to Many */
    public function Rubric(){
        return $this->belongsTo(Rubric::class);
    }
}
