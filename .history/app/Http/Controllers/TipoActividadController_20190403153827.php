<?php

namespace App\Http\Controllers;

use App\TipoActividad;

class TipoActividadController extends Controller
{
    public function index()
    {
        $tiposActividad = TipoActividad::all();
        return compact($tiposActividad);
    }
}
