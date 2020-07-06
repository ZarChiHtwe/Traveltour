<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    Protected $fillable = ['name','photo','description'];

    public function hotels()
    {
    	return $this->hasMany('App\Hotel');
    }

    public function travelroutes()
    {
    	return $this->hasMany('App\Travelroute');
    }
}
