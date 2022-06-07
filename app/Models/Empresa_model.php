<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_model extends Model
{
    use HasFactory;
    protected $table='empresa';//llamo a la table
    protected $fillable=       //llamo los atributos respectivos
    [
       'nombre_empresa',
       'ubicacion_empresa',
       'contactos',
       'num_empleados'
    ];
    

}
