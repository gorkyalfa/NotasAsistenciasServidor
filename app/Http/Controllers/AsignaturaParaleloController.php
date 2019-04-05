<?php

namespace App\Http\Controllers;

use App\AsignaturaParalelo;

class AsignaturaParaleloController extends Controller
{
    public function show(integer $docente_id)
    {
        // AsignaturaParalelo::where("docente_id", $docente_id);

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
