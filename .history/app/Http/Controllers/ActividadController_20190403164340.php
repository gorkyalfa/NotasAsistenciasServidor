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
        DB::transaction(function () {
            $actividadesPorBorrar = [1, 3, 6, 8];
            Actividad::whereIn("id", $actividadesPorBorrar)->delete();
        
        });
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
