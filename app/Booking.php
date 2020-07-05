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
}
