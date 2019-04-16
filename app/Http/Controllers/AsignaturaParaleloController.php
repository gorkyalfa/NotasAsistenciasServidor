<?php

namespace App\Http\Controllers;

use App\PeriodoLectivo;
use App\AsignaturaParalelo;

class AsignaturaParaleloController extends Controller
{
    public function show($docente_id)
    {
        $periodo_lectivo_actual = true;

        $response = AsignaturaParalelo::
        join('asignaturas', 'asignaturas.id', 'asignatura_paralelos.asignatura_id')
            ->join('periodo_academicos', 'periodo_academicos.id', 'asignaturas.periodo_academico_id')
            ->join('carreras', 'carreras.id', 'periodo_academicos.carrera_id')
            ->join('periodo_lectivos', 'periodo_lectivos.id', 'carreras.periodo_lectivo_id')
            ->join('paralelos', 'paralelos.id', 'asignatura_paralelos.paralelo_id')
            ->where('periodo_lectivos.actual', $periodo_lectivo_actual)
            ->where('asignatura_paralelos.docente_id', $docente_id)
            ->select('asignatura_paralelos.id', 'paralelos.id as idParalelo', 'asignaturas.id as idAsignatura',
                'asignaturas.nombre as nombreAsignatura', 'paralelos.nombre as nombreParalelo')
            ->get();

        return response()->json(['asignaturas' => $response], 200);
    }
}
