<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Proyecto_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyecto')->insert
        (
            [
                
                'nombre_proyecto'=>'El inpec',
                'integrantes'=>'4',
                'fecha_inicio'=>'10/05/2021',
                'mision'=>'orgullecer con nuestro proyecto',
                'vision'=>'solucionar la problematica',
            ]
        );
    }
}
