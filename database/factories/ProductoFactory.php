<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Producto;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->randomElement(['Galleta','Pan','Refresco','Malta','Cereal']),
        'descripcion'=>$faker->text,
        'categoria_id'=>function(){
            return factory(Categoria::class)->create()->id;
        },
    ];
    
});
