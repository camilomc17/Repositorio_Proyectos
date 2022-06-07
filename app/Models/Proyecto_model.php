<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Proyecto_model extends Model
{
    use HasFactory;
    protected $table ='proyecto';
    protected $fillable =
    [
        'nombre_proyecto',
        'integrantes',
        'fecha_inicio',
        'mision',
        'vision',
    ];
}
