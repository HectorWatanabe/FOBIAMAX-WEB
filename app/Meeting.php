<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function patient(){
    	return $this->belongsTo('App\Patient');
    }

    public function psychologist(){
		return $this->belongsTo('App\Psychologist');
    }
}
