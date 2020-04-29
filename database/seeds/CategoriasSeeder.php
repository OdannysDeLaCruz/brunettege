<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categoria::create([
		    'nombre' => 'lanapelos'            
		]); 
        App\Categoria::create([
            'nombre' => 'kanekalon'
        ]);
        App\Categoria::create([
            'nombre' => 'colas'
        ]);
        App\Categoria::create([
            'nombre' => 'accesorios'
        ]);
    }
}
