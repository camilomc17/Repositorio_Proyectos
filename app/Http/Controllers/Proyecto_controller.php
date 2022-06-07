<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Proyecto_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyecto = Proyecto_model::all();
        return $proyecto;
    }
    
    public function show($id)
    {
        $proyecto = Proyecto_model::Where('id',$id)->get();
        return $proyecto;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto_validar=Validator::make
        ($request->all(),["nombre_proyecto"=>"required"]);
        if(!$proyecto_validar->fails())
        {
           $proyectos=new Proyecto_model();
           
           $proyectos->nombre_proyecto = $request->nombre_proyecto;
           $proyectos->integrantes = $request->integrantes;
           $proyectos->fecha_inicio = $request->fecha_inicio;
           $proyectos->mision = $request->mision;
           $proyectos->vision = $request->vision;
           $proyectos->save();
           return response()->json(['mensaje'=>'QUEDO GUARDADO']);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto=Proyecto_model::destroy($id);
        return $proyecto;
    }
}
