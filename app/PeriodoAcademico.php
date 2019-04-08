<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoAcademico extends Model
{
    public function periodoLectivo()
    {
        return $this->belongsTo('App\Carrera');
    }

    public function asignaturas()
    {
        return $this->hasMany('App\Asignatura');
    }

    public function paralelos()
    {
        return $this->hasMany('App\Paralelo');
    }
}
