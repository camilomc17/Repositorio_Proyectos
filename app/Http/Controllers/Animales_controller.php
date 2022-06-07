<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Animales_models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Animales_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animales_models::all();
        return $animal;
    }

    public function show($id)
    {
        $animal= Animales_models::Where('id',$id)->get();
        return $animal;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal_validar =Validator::make
        ($request->all(),["nombre"=>"required"]);
        if(!$animal_validar->fails())
        {
            $animales = new Animales_models();
            $animales->nombre = $request->nombre;
            $animales->raza = $request->raza;
            $animales->color = $request->color;
            $animales->edad = $request->edad;
            $animales->save();
            return response()->json(['mensaje'=>"QUEDO GUARDADO CORRECTAMENTE"]);
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
        $animales = Animales_models::destroy($id);
        return $animales;
    }
}
