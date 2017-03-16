<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Colegio;

class Curso extends Model
{
    
    public function colegio(){

    	return $this->belongsTo('App\Colegio');

    }

    public function alumnos(){

    	return $this->hasMany('App\Alumno');

    }

    public static function cursosPorColegio($idColegio){

    	$colegio = Colegio::find($idColegio);

    	$cursos = $colegio->cursos()->get();

    	return $cursos;

    }

}
