<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\AsignaturaParalelo;
use App\Parcial;
use App\TipoActividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use mysql_xdevapi\Exception;

class ActividadController extends Controller
{
    public function show($asignatura_paralelo_id)
    {
        return response()->json(['actividades' => Actividad::where("asignatura_paralelo_id", $asignatura_paralelo_id)->get()], 200);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();

        // Datos por borrar
        $porBorrar = $data["borradas"];
        if (count($porBorrar) > 0) {
            $porBorrar = Actividad::whereIn("id", $porBorrar);
        }

        $porModificar = $data["modificadas"];

        // Datos por insertar
        $porInsertar = array_filter($porModificar, function ($var) {
            return ($var["id"] == 0);
        });
        $porInsertarFinal = [];
        foreach ($porInsertar as $actividadActual) {
            $actividad = new Actividad();
            $actividad->nombre = $actividadActual['nombre'];
            $actividad->descripcion = $actividadActual['descripcion'];
            $actividad->creacion = $actividadActual['creacion'];
            $actividad->entrega = $actividadActual['entrega'];

            $asignaturaParalelo = AsignaturaParalelo::findOrFail($actividadActual['asignatura_paralelo_id']);
            $actividad->asignaturaParalelo()->associate($asignaturaParalelo);

            $parcial = Parcial::findOrFail($actividadActual['parcial_id']);
            $actividad->parcial()->associate($parcial);

            $tipoActividad = TipoActividad::findOrFail($actividadActual['tipo_actividad_id']);
            $actividad->tipoActividad()->associate($tipoActividad);

            array_push($porInsertarFinal, $actividad);
        }

        // Datos por actualizar
        $porActualizar = array_filter($porModificar, function ($var) {
            return ($var["id"] != 0);
        });
        $porActualizarFinal = [];
        foreach ($porActualizar as $actividadActual) {
            $actividad = Actividad::findOrFail($actividadActual['id']);
            $actividad->nombre = $actividadActual['nombre'];
            $actividad->descripcion = $actividadActual['descripcion'];
            $actividad->creacion = $actividadActual['creacion'];
            $actividad->entrega = $actividadActual['entrega'];

            $asignaturaParalelo = AsignaturaParalelo::findOrFail($actividadActual['asignatura_paralelo_id']);
            $actividad->asignaturaParalelo()->associate($asignaturaParalelo);

            $parcial = Parcial::findOrFail($actividadActual['parcial_id']);
            $actividad->parcial()->associate($parcial);

            $tipoActividad = TipoActividad::findOrFail($actividadActual['tipo_actividad_id']);
            $actividad->tipoActividad()->associate($tipoActividad);

            array_push($porActualizarFinal, $actividad);
        }

        DB::transaction(function () use ($porBorrar, $porInsertarFinal, $porActualizarFinal) {
            if (count($porBorrar) > 0) {
                $porBorrar->delete();
            }

            try {
                foreach ($porInsertarFinal as $actividad) {
                    $actividad->save();
                }
            } catch (Exception $e) {
                echo 'Excepción al insertar: ', $e->getMessage(), "\n";
            }

            try {
                foreach ($porActualizarFinal as $actividad) {
                    $actividad->save();
                }
            } catch (Exception $e) {
                echo 'Excepción al actualizar: ', $e->getMessage(), "\n";
            }
        });
    }
}
