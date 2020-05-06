<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table='divisions';

    protected $fillable=['div_name'];
}
