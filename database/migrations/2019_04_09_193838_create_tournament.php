<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournament extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('location');
            $table->string('tournament_type');
            $table->timestamps();
        });

        Schema::create('players', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('nickname');
           $table->string('email');
        });

        Schema::create('rounds', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            $table->string('course');
            $table->string('location');
            $table->string('rating');
        });

        Schema::create('player_round_scores', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');

            $table->integer('round_id')->unsigned();
            $table->foreign('round_id')->references('id')->on('rounds');

            $table->unsignedTinyInteger('gross');
            $table->unsignedTinyInteger('nett');
            $table->unsignedTinyInteger('rings');
            $table->unsignedTinyInteger('handicap_for_round');
        });

        Schema::create('tournament_players', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');

            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');
            $table->float('handicap_for_tournament');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
        Schema::dropIfExists('players');
        Schema::dropIfExists('player_round_scores');
        Schema::dropIfExists('tournament_players');
        Schema::dropIfExists('rounds');
    }
}
