<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
	// $categoria_id = App\Categoria::where('id', rand(0, 4))->value('id');
    return [
        'nombre' 		=> $faker->name,
        'precio' 		=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2),
        'unidades' 		=> $faker->randomDigit,
        'color' 		=> $faker->colorName,
        'peso' 			=> "$faker->randomDigit",
        'longitud' 		=> "$faker->randomDigit",
        'categoria_id' 	=> rand(1, 4),
        // 'remember_token' => Str::random(10),
    ];
});
