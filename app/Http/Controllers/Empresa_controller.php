<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Empresa_model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Empresa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa_model::all();
        return $empresa;
    }
    public function show($id)
    {
        $empresa= Empresa_model::Where('id',$id)->get();
        return $empresa;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa_validar=Validator::make
        ($request->all(),["nombre_empresa"=>"required"]);  
        if(!$empresa_validar->fails())
        {
           $empresas=new Empresa_model();
           $empresas->nombre_empresa = $request->nombre_empresa;
           $empresas->ubicacion_empresa = $request->ubicacion_empresa;
           $empresas->contactos = $request->contactos;
           $empresas->num_empleados= $request->num_empleados;
           $empresas->save();
           return response()->json(['mensaje'=>'LOS DATOS SE GUARDARON EFICIENTEMENTE']);

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
        $empresa = Empresa_model::destroy($id);
        return $empresa;
    }
}
