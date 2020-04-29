<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// $this->truncateTables([
     //        'categorias',
     //        'productos',
     //    ]);
        $this->call([
        	// UserSeeder::class,
        	CategoriasSeeder::class,
        	ProductosSeeder::class,
        	// SubcategoriasSeeder::class,
        	ImagenesSeeder::class,
    	]);
    }
    // protected function truncateTables(array $tables)
    // {
    //     DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    //     foreach ($tables as $table) {
    //         DB::table($table)->truncate();
    //     }

    //     DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    // }
}
