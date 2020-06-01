<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'direccion'=>$faker->streetAddress,
        'contacto'=>$faker->email,
        'telefono'=>$faker->e164PhoneNumber,
        'pagina_web'=>$faker->url,
    ];
});
