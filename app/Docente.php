<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    public function asignaturasParalelos()
    {
        return $this->hasMany('App\AsignaturaParalelo');
    }
}
