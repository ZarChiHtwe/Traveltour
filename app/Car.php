<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    Protected $fillable=['carnumber','photo','status','cartype_id'];

    public function cartypes()
    {
    	return $this->belongsTo('App\Cartype','cartype_id');
    }

    public function packages()
    {
    	return $this->hasMany('App\Package');
    }

}
