<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    


	public function curso(){

		return $this->belongsTo('App\Curso');

	}

	public function tps(){

		return $this->belongsToMany('App\Tp')->withTimestamps();

	}

	public function examenes(){

		return $this->belongsToMany('App\Examene')->withTimestamps();

	}


}
