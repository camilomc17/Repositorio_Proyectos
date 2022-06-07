<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Empleado_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado')->insert
        (
         [
             'nombre_empleado'=>'galil',
             'apellido_empleado'=>'gal',
             'num_cedula'=>'3424',
             'telefono'=>'123456',

         ]
        );
    }
}
