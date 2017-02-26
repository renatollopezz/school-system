<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = ['id','name','email','birthday','registration','registration_date'];

	public function groups(){
		return $this->belongsToMany('App\Group')->withTimestamps();
	}
}
