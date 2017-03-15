<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{

	protected $fillable = ['descripcion','direccion','text','user_id', 'created_at', 'updated_at'];
    

    public function user(){

    	return $this->belongsTo('App\User');

    }


    public function cursos(){

    	return $this->hasMany('App\Curso');

    }
}
