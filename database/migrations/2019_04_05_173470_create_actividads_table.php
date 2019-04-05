<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("descripcion");
            $table->date("creacion");
            $table->date("entrega");
            $table->integer('tipo_actividad_id');
            $table->integer('asignatura_paralelo_id');
            $table->integer('parcial_id');

            $table->foreign('tipo_actividad_id')->references('id')->on('tipo_actividads');
            $table->foreign("asignatura_paralelo_id")->references('id')->on('asignatura_paralelos');
            $table->foreign("parcial_id")->references('id')->on('parcials');
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
        Schema::dropIfExists('actividads');
    }
}
