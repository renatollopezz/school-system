<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{

    protected $fillable = array('name','active','registration_date','module_id','description');

    public function module(){
      return $this->belongsTo('App\Module');
    }

    public function releaseNote(){
		return $this->hasMany('App\ReleaseNote');
	}
}
