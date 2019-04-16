<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    protected $fillable = ['nombre'];

    public function actividades()
    {
        return $this->hasMany('App\Actividad');
    }
}
