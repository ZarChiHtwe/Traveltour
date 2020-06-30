<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cartype extends Model
{
	use SoftDeletes;

    Protected $fillable = ['name','price'];
}
