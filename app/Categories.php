<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table='categories';

    protected $fillable=['cat_name'];

    public static function create(array $array)
    {
    }
}
