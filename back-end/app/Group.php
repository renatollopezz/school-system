<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable= ['id','school_year_id','description'];


	public function schoolyear(){
		return $this->belongsTo('App\SchoolYear','school_year_id');
	}
}
