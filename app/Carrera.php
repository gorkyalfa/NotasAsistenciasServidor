<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function periodoLectivo()
    {
        return $this->belongsTo('App\PeriodoLectivo');
    }

    public function periodosAcademicos()
    {
        return $this->hasMany('App\PeriodoAcademico');
    }
}
