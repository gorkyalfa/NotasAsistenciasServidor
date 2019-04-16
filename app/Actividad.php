<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['creacion', 'entrega', 'nombre', 'descripcion'];

    public function asignaturaParalelo()
    {
        return $this->belongsTo('App\AsignaturaParalelo');
    }

    public function tipoActividad()
    {
        return $this->belongsTo('App\TipoActividad');
    }

    public function parcial()
    {
        return $this->belongsTo('App\Parcial');
    }
}
