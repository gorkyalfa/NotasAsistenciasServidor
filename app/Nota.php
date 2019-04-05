<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{

    public function actividad()
    {
        return $this->hasOne('App\Actividad');
    }
}
