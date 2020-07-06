<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travelroute extends Model
{
    use SoftDeletes;

    Protected $fillable = ['placefrom_id','placeto_id'];

    public function packages()
    {
    	return $this->hasMany('App\Package');
    }

    public function fromlocations()
    {
    	return $this->belongsTo('App\Location','placefrom_id');
    }
    public function tolocations()
    {
    	return $this->belongsTo('App\Location','placeto_id');
    }

}
