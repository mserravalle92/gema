<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoExameneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('alumno_examene', function(Blueprint $table){

            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('examen_id')->unsigned();
            $table->double('nota');

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('examen_id')->references('id')->on('examenes');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
