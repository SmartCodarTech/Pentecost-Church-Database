<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cells extends Model
{
    protected $table='cells';

    protected $fillable=['cell_name','cell_center','cell_leader','cell_location'];
}
