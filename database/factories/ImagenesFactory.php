<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Imagen;
use Faker\Generator as Faker;

$factory->define(Imagen::class, function (Faker $faker) {

	$imagenes = ['img_kanekalon.jpg', 'img_lanapelo.jpg'];
    $imagen = $imagenes[rand(0,1)];

    return [
        'principal'   => rand(false, true),
        'ruta' 		  => $imagen,
        'producto_id' => rand(1, 50)
    ];
});
