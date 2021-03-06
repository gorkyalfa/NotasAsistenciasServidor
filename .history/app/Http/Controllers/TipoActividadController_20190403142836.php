<?php

namespace App\Http\Controllers;

use App\TipoActividad;
use Illuminate\Http\Request;

class TipoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposActividad = [
            "1" => "Vinculación",
            "2" => "Investigación"
        ];
        return $tiposActividad;
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
     * Display the specified resource.
     *
     * @param  \App\TipoActividad  $tipoActividad
     * @return \Illuminate\Http\Response
     */
    public function show(TipoActividad $tipoActividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoActividad  $tipoActividad
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoActividad $tipoActividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoActividad  $tipoActividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoActividad $tipoActividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoActividad  $tipoActividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoActividad $tipoActividad)
    {
        //
    }
}
