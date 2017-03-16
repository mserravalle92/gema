<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('alumno_tp', function(Blueprint $table){

            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('tp_id')->unsigned();
            $table->double('nota');

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('tp_id')->references('id')->on('tps');

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
        Schema::dropIfExists('alumnos');
        Schema::dropIfExists('tps');
        Schema::drop('alumno_tp');
    }
}
