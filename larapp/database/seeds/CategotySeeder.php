<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategotySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creación de registro con la utilidad de la
         * libreria DB
         */
        DB::table('categories')->insert([
            'name'            => 'Xbox Serie X', 
            'description'     => 'Nueva consola Microsoft',
            'created_at'      => now(),
        ]);
        DB::table('categories')->insert([
            'name'            => 'Nintendo Switch', 
            'description'     => 'Consola Hibrida Nintendo',
            'created_at'      => now(),
        ]);
        /**
         * Creación de registro por medio de
         * modelo
         */
        $cat = new Category;
        $cat->name         = 'Playstation 5';     
        $cat->description  = 'homeros@gmail.com';
        $cat->save();
        
    }
}
