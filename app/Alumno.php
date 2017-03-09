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

	/**** Fuciones para asignar tp y nota ******/

	public function asignarTp($idTp){

		$this->tps()->attach($idTp, ['nota' => 0]);

	}

	public function asignarNotaTp($idTp , $nota){

		$this->tps()->sync([$idTp, ['nota'=>$nota]]);

	}


	/**** Funciones para asignar Examenes y nota *******/

	public function asignarExamen($idExamen){

		$this->examenes()->attach($idExamen, ['nota' => 0]);

	}

	public function asignarNotaExamen($idExamen , $nota){

		$this->examenes()->sync([$idExamen, ['nota'=>$nota]]);

	}






}
