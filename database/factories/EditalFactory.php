<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Edital;
use Faker\Generator as Faker;

$factory->define(Edital::class, function (Faker $faker) {
    return [
        //
        'codigo' => $faker->word(),
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
