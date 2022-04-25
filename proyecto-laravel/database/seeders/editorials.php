<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class editorials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editorials')->insert(['Id'=> 1 , 'Nombre'=> 'Salamandra' , 'Nacionalidad'=> 'Ingles'
        , '0'=> '2022-02-23 19:37:31']);
    }
}
