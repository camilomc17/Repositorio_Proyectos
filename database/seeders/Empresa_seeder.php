<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//importo DB
class Empresa_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insert
        (
          [ 
              'nombre_empresa'=>'claro',
              'ubicacion_empresa'=>'Bogota',
              'contactos'=>'31244467',
              'num_empleados'=>'200',
          ]
        );
    }
}
