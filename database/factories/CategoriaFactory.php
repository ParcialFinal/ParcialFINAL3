<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Categoria;

$factory->define(Categoria::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement(['Comida','Ropa','Electrodomesticos','Aseo']),
    ];
});
