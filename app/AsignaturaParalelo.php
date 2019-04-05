<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaParalelo extends Model
{
    public function actividades()
    {
        return $this->hasMany('App\Actividad');
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Estudiante');
    }
}
