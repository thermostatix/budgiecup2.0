<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\TournamentPlayers::class, function (Faker $faker) {
    return array(
        //
        'handicap_for_tournament' => $faker->numberBetween(0,30),
        'tournament_id' => $faker->randomElement(\App\Tournament::pluck('id')->toArray()),
        'player_id' => $faker->randomElement(\App\Player::pluck('id')->toArray()),

    );
});
