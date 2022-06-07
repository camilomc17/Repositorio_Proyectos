<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Empleado_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado= Empleado_model::all();
        return $empleado;
    }
     

    public function show($id)
    {
        $empleado=Empleado_model::Where('id',$id)->get();
        return $empleado;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado_validar=Validator::make
        ($request->all(),['nombre_empleado'=>'required']);
        if (!$empleado_validar->fails()) 
           {
             $empleados=new Empleado_model();
             $empleados->nombre_empleado=$request->nombre_empleado;
             $empleados->apellido_empleado=$request->apellido_empleado;
             $empleados->num_cedula=$request->num_cedula;
             $empleados->telefono=$request->telefono;
             $empleados->save();
             return response()->json(['mensaje'=>"QUEDO GUARDADO"]);
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
        $empleado=Empleado_model::destroy($id);
        return $empleado;
    }
}
