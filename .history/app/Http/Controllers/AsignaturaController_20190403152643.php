<?php

namespace App\Http\Controllers;

use App\AsignaturaParalelo;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(int $idDocente)
    {
        // TODO : devolver la asignatura de filtrar los datos por docente
        $object = new stdClass();
        $object->id = "1";
        $object->idParalelo = "1";
        $object->nombre = "Software Engineering";

        $object1 = new stdClass();
        $object1->id = "2";
        $object1->idParalelo = "1";
        $object1->nombre = "POO";

        $object2 = new stdClass();
        $object2->id = "3";
        $object2->idParalelo = "1";
        $object2->nombre = "Base de datos";

        $asignaturasParalelo = [
            $object, $object1, $object2
        ];
        return compact($asignaturasParalelo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsignaturaParalelo  $asignaturaParalelo
     * @return \Illuminate\Http\Response
     */
    public function edit(AsignaturaParalelo $asignaturaParalelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsignaturaParalelo  $asignaturaParalelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsignaturaParalelo $asignaturaParalelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsignaturaParalelo  $asignaturaParalelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsignaturaParalelo $asignaturaParalelo)
    {
        //
    }
}
