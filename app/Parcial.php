<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    public function Actividades()
    {
        return $this->hasMany('App\Actividad');
    }
}
