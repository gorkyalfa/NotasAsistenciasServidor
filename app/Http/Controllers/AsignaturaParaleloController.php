<?php

namespace App\Http\Controllers;

class AsignaturaParaleloController extends Controller
{
    public function show($idAsignaturaParalelo)
    {
        // TODO : devolver las asignaturas filtrando los datos por docente
        $object = new class
        {
            public $id = "1";
            public $idParalelo = "1";
            public $nombre = "Software Engineering";
        };

        $object1 = new class
        {
            public $id = "2";
            public $idParalelo = "1";
            public $nombre = "POO";
        };

        $object2 = new class
        {
            public $id = "3";
            public $idParalelo = "1";
            public $nombre = "Base de datos";
        };

        $asignaturasParalelo = [
            $object, $object1, $object2
        ];
        return response()->json(['asignaturas' => $asignaturasParalelo], 200);
    }
}
