<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert(['ISBN'=> '9788478884452' , 'Titulo'=> 'Harry Potter y la piedra filosofal' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'1997-07-26', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788478884957' , 'Titulo'=> 'Harry Potter y la camara secreta' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'1998-07-02', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788498383430' , 'Titulo'=> 'Harry Potter y el prisionero de Azkaban' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'1998-07-02', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788478886456' , 'Titulo'=> 'Harry Potter y el caliz de fuego' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'1998-07-02', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788498383621' , 'Titulo'=> 'Harry Potter y la orden del fenix' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'2003-07-21', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788478889921' , 'Titulo'=> 'Harry Potter y el misterio del principe' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'2005-07-16', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788498381405' , 'Titulo'=> 'Harry Potter y las reliquias de la muerte' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'2007-07-21', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

        DB::table('libros')->insert(['ISBN'=> '9788498388473' , 'Titulo'=> 'Harry Potter y el legado maldito' , 'Autor'=> 'J. K. Rowling',
                'Idioma'=> 'Ingles', 'Publicacion'=>'2016-07-30', 'Editorial'=>1, '0'=> '2022-02-23 19:37:31']);

    }
}
