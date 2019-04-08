<?php

namespace App\Http\Controllers;

use App\PeriodoLectivo;
use App\AsignaturaParalelo;

class AsignaturaParaleloController extends Controller
{
    public function show($periodo_lectivo_id, $docente_id)
    {
        $response = AsignaturaParalelo::
        join('asignaturas', 'asignaturas.id', 'asignatura_paralelos.asignatura_id')
            ->join('periodo_academicos', 'periodo_academicos.id', 'asignaturas.periodo_academico_id')
            ->join('carreras', 'carreras.id', 'periodo_academicos.carrera_id')
            ->join('paralelos', 'paralelos.id', 'asignatura_paralelos.paralelo_id')
            ->where('carreras.periodo_lectivo_id', $periodo_lectivo_id)
            ->where('asignatura_paralelos.docente_id', $docente_id)
            ->select('asignatura_paralelos.id', 'asignaturas.nombre as asignatura', 'paralelos.nombre as paralelo')
            ->get();

        return response()->json(['asignaturas' => $response], 200);
    }
}
