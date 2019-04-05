<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public function asignaturasParalelos()
    {
        return $this->hasMany('App\AsignaturaParalelo');
    }

    public function notas()
    {
        return $this->hasMany('App\Nota');
    }
}
