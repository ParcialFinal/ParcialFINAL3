<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Compra;
use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Compra::class, function (Faker $faker) {
    return [
        'fecha'=>$faker->date,
        'descripcion'=>$faker->text,
        'proveedor_id'=>function(){
            return factory(Proveedor::class)->create()->id;
        },
    ];
});
