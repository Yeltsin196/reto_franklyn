<?php

use Faker\Generator as Faker;

$factory->define(App\productos::class, function (Faker $faker) {
    return [
     	 'nombre'=> str_random(9),
        'descripcion'=> $faker->text(rand(10, 100)),
        'precio'=> rand(1, 10),
        'categoria_id' => rand(1, 10)
    ];
});
