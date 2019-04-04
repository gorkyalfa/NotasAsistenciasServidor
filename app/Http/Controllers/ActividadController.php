<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;

class ActividadController extends Controller
{
    public function show($idAsignaturaParalelo)
    {
        return response()->json(['actividades' => Actividad::where("idAsignaturaParalelo", $idAsignaturaParalelo)], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all()->json();
        $borradas = $data["borradas"];
        $modificadas = $data["modificadas"];

        return $borradas;
        return $modificadas;

        DB::transaction(function () use ($borradas, $modificadas) {
            Actividad::whereIn("id", $borradas)->delete();
            Actividad::insert($modificadas);
        });
    }
}
