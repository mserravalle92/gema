<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    

    public function user(){

    	return $this->belongsTo('App\User');

    }


    public function cursos(){

    	return $this->hasMany('App\Curso');

    }
}
