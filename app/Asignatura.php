<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    public function periodoAcademico()
    {
        return $this->belongsTo('App\PeriodoAcademico');
    }

    public function asignaturasParalelos()
    {
        return $this->hasMany('App\AsignaturaParalelo');
    }
}
