<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transferencia;
use Faker\Generator as Faker;

$factory->define(Transferencia::class, function (Faker $faker) {

    return [
        'cantidad' => $faker->randomDigitNotNull,
        'id_origen' => $faker->randomDigitNotNull,
        'id_destino' => $faker->randomDigitNotNull,
        'item_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
