<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    Protected $fillable = ['name','photo','duration','depaturedate','depaturetime','packageprice','totalprice','description','car_id','hotel_id','route_id'];

    public function cars()
    {
    	return $this->belongsTo('App\Car');
    }
}
