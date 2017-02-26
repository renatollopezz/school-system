<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
	protected $fillable = ['registration_date','school_year_id','student_id','module_id','situation'];

	public function releaseNote(){
		return $this->hasMany('App\ReleaseNote');
	}
}
