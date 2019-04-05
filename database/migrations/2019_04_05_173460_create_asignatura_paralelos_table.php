<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaParalelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_paralelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('asignatura_id');
            $table->integer('paralelo_id');
            $table->integer('docente_id');
            $table->integer('jornada_id');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
            $table->foreign('paralelo_id')->references('id')->on('paralelos');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('jornada_id')->references('id')->on('jornadas');
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
        Schema::dropIfExists('asignatura_paralelos');
    }
}
