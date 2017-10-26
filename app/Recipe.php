<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
	{
		return $this->hasMany('App/Ingredients');
	}
	
	public function creator()
	{
		return $this->belongsTo('App\User');
	}
	
}
