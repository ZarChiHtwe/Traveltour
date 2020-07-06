<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable=[
    	'bookingdate','voucherno','grandtotal','numberofpeople','status','package_id','user_id'
    ];

    public function packages()
    {
    	return $this->belongsTo('App\Package','package_id');
    }
    public function users()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
