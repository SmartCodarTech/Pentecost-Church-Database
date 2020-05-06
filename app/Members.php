<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findorfail(int $id)
 */
class Members extends Model
{
    protected $table='members';
    protected $fillable=['prefix','firstname','lastname','gender','email','phone','middlename',
        'nationality','occupation','church_session','church_group',
        'region','hometown','address','relative','relative_contact','city',
        'age','birthdate', 'marital_status','language','role_in_church','home_cell','photo'];
}
