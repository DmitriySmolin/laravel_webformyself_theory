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
class City extends Model
{
    use HasFactory;
    protected $table = 'city';
}
