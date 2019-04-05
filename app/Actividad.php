<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public function tiposActividades()
    {
        return $this->hasOne('App\TipoActividad');
    }
}
