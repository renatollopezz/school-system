<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable = ['id','name','email','birthday','registration','registration_date'];

	    
}
