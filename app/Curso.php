<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    
    public function colegio(){

    	return $this->belongsTo('App\Colegio');

    }

    public function alumnos(){

    	return $this->hasMany('App\Alumno');

    }

}
