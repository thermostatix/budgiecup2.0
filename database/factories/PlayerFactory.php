<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nickname' => $faker->name('female'),
        'email' => $faker->email,
        //
    ];
});
