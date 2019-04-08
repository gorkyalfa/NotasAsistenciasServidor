<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public function tiposActividades()
    {
        return $this->belongsTo('App\TipoActividad');
    }
    public function parcial()
    {
        return $this->belongsTo('App\Parcial');
    }
}
