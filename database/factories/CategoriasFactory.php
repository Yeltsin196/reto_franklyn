<?php

use Faker\Generator as Faker;

$factory->define(App\categorias::class, function (Faker $faker) {
	
	  
    return [
        //
        
         'Nombre'=>str_random(9)

    ];
   
});

