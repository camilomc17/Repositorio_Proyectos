<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //importo la DB
class animales_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animales')->insert
        (
            [
                'nombre'=>'firulais',
                'raza'=>'freispuder',
                'color'=>'negro',
                'edad'=>'100',
            ]
            );
    }
}
