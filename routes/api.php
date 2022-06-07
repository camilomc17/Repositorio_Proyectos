<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//importo los COntrollers
use App\Http\Controllers\Animales_controller;
use App\Http\Controllers\Empleado_controller;
use App\Http\Controllers\Empresa_controller;
use App\Http\Controllers\Proyecto_controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

         //creo ruta cualquiera//llamo al controlador  //llamo el metodo
Route::get('/animal',[Animales_controller::class,'index']);
                        //busca por Id
Route::get('/animal_show/{id}',[Animales_controller::class,'show']);
Route::post('/animal_store',[Animales_controller::class,'store']);
Route::delete('/animal_destroy{id}',[Animales_controller::class,'destroy']);

Route::get('/empresa',[Empresa_controller::class,'index']);
Route::get('/empresa_show/{id}',[Empresa_controller::class,'show']);
Route::post('/empresa_store',[Empresa_controller::class,'store']);
Route::delete('/empresa_destroy/{id}',[Empresa_controller::class,'destroy']);

Route::get('/proyecto',[Proyecto_controller::class,'index']);
Route::get('/proyecto_show/{id}',[Proyecto_controller::class,'show']);
Route::post('/proyecto_store',[Proyecto_controller::class,'store']);
Route::delete('/proyecto_destroy/{id}',[Proyecto_controller::class,'destroy']);

Route::get('/empleado',[Empleado_controller::class,'index']);
Route::get('/empleado_show/{id}',[Empleado_controller::class,'show']);
Route::post('/empleado_store',[Empleado_controller::class,'store']);
Route::delete('/empleado_destroy/{id}',[Empleado_controller::class,'destroy']);
?>
