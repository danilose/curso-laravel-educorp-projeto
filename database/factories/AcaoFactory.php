<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Acao;
use Faker\Generator as Faker;

$factory->define(Acao::class, function (Faker $faker) {
    return [
        //
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'tipo' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
