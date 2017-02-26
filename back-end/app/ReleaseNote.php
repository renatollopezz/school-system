<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReleaseNote extends Model
{
	protected $fillable = ['registration_id','group_id','discipline_id','note1','note2','note3','note4'];

	public function group(){
		return $this->belongsTo('App\Group','group_id');

	}

	public function discipline(){
		return $this->belongsTo('App\Discipline','discipline_id');

	}

	public function registration(){
		return $this->belongsTo('App\Registration','registration_id');

	}
}
