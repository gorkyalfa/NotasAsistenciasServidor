<?php

namespace App\Http\Controllers;

class ActividadController extends Controller
{
    public function show($idasignaturaparalelo)
    {
        return compact(Actividad::where("idAsignaturaParalelo", $idasignaturaparalelo));
    }

    public function store()
    {
        // actividadesPorBorrar: number[]
        // actividades: Actividad[]

        /*class Actividad {
            id: number;
            idAsignaturaParalelo: number;
            nombre: string;
            descripcion: string;
            creacion: Date;
            entrega: Date;
            idTipoActividad: number;
          }*/

        // TODO : consultar las actividades de una asignatura paralelo
        
        return [];
    }
}
