<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animales_models extends Model
{
    use HasFactory;
    protected $table='animales';
    protected $fillable =
    [
        'nombre',
        'raza',
        'color',
        'edad'
    ];
}
