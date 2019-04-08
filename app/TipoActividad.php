<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    public function Actividades()
    {
        return $this->hasMany('App\Actividad');
    }
}
