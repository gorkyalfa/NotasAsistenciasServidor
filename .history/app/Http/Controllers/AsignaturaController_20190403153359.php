<?php

namespace App\Http\Controllers;

class AsignaturaController extends Controller
{
    public function show($idDocente)
    {
        // TODO : devolver las asignaturas filtrando los datos por docente
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
}
