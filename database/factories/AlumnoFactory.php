<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Alumno::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellido'=>$faker->sentence(1,false),
        'grado_id'=>rand(1,5)
    ];
});
