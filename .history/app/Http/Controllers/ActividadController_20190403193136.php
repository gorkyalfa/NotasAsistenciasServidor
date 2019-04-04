<?php

namespace App\Http\Controllers;

class ActividadController extends Controller
{
    public function show($idasignaturaparalelo)
    {
        return compact(Actividad::where("idAsignaturaParalelo", $idasignaturaparalelo));
    }

    public function store(Request $request)
    {
        $bodyContent = $request->getContent();
        dd($bodyContent);
        
        DB::transaction(function () {
            // TODO : obtener de los parametros del body
            $actividadesPorBorrar = [1, 3, 6, 8];
            Actividad::whereIn("id", $actividadesPorBorrar)->delete();

            // TODO : obtener de los parametros del body
            $object = new stdClass();
            $object->id = 1;
            $object->idAsignaturaParalelo = 1;
            $object->nombre = "Deber POO";
            $object->descripcion = "Ejercicios capítulo 1";
            $object->creacion = date("Y-m-d H:i:s");
            $object->entrega = date("Y-m-d H:i:s");
            $object->idTipoActividad = 1;

            $actividades = [$object];
            Actividad::insert($actividades);
        });
    }
}
