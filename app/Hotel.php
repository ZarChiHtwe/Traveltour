<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
    use SoftDeletes;


    Protected $fillable=['name','photo','price','address','location_id'];

    public function packages()
    {
    	return $this->hasMany('App\Package');
    }

    public function locations()
    {
    	return $this->belongsTo('App\Location','location_id');
    }
}
