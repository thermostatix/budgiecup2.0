<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Tournament::class, function (Faker $faker) {
    return [
        'name' => $faker->date('Y'),
        'location' => $faker->address,
        'tournament_type' => $faker->word,
        //
    ];
});
