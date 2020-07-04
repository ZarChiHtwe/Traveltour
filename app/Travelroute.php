<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travelroute extends Model
{
    use SoftDeletes;

    Protected $fillable = ['placefrom_id','placeto_id'];
}
