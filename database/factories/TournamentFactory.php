<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Tournament::class, function (Faker $faker) {
    return [
        'date' => $faker->date(),
        'location' => $faker->locale(),
        'tournament_type' => $faker->word,
        //
    ];
});
