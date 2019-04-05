<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    public function asignaturasParalelos()
    {
        return $this->hasMany('App\AsignaturaParalelo');
    }
}
