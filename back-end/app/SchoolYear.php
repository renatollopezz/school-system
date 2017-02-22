<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
	protected $fillable = ['id','description','year','active'];
}
