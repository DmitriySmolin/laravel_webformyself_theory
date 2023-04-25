<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IntlDateFormatter;

/**
 * Class Post0
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
    protected $fillable = ['title', 'content', 'rubric_id']; // список белых полей, которые мы можем заполнять массово через QueryBuilder

    /* Связи моделей - One to one | One to Many */
    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    /* Связи моделей - Many to Many */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate()
    {
//        №1
//        $formatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
//        $formatter->setPattern('d MMM y');
//        return $formatter->format(new \DateTime($this->created_at));
//        №2
        return Carbon::parse($this->created_at)->diffForHumans();

    }
}
