<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    // has many players, that pivot through tournament_players table
}
