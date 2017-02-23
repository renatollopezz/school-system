<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = array('description','active','registration_date');

    public function disciplines(){
      return $this->hasMany('App\Discipline');
    }
}
