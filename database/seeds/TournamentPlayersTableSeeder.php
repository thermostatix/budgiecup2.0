<?php

use Illuminate\Database\Seeder;

class TournamentPlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\TournamentPlayers::class, 12)->create();
    }
}
