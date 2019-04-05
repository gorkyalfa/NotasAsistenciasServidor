<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoLectivo extends Model
{
    public function carreras()
    {
        return $this->hasMany('App\Carrera');
    }
}
