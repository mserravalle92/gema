<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tp extends Model
{
    



	public function alumnos(){

		return $this->belongsToMany('App\Alumno')->withTimestamps();
		
	}




}
