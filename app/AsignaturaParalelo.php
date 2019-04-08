<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaParalelo extends Model
{
    public function asignatura()
    {
        return $this.$this->belongsTo('App\Asignatura');
    }

    public function paralelo()
    {
        return $this.$this->belongsTo('App\Paralelo');
    }

    public function docente()
    {
        return $this.$this->belongsTo('App\Docente');
    }

    public function jornada()
    {
        return $this.$this->belongsTo('App\Jornada');
    }

    public function actividades()
    {
        return $this->hasMany('App\Actividad');
    }

    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante');
    }
}
