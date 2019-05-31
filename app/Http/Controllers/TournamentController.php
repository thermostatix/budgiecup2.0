<?php

namespace App\Http\Controllers;

use App\Tournament;
use App\TournamentPlayers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get all the player information for players in a tournament.
     *
     * @param  string $tournament_name
     * @return \Illuminate\Http\Response
     */    public function playersForTournament($tournament_name)
{
    // eloquent query version:
    $tournament = Tournament::where('name', $tournament_name)->with('players');


    // old & busted
//        $players = DB::table('tournament_players')
//            ->join('tournament', 'tournament_players.tournament_id', '=', 'tournament.id')
//            ->join('players', 'tournament_players.player_id', '=', 'player.id')
//            ->where('tournament.name',$tournament_name)
//            ->get();
//
//        return view('players_for_tournament', ['players' => $players]);

}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function getTournament($id) {
        $tournament = \App\Tournament::find($id);//->with(['players', 'leaderboard']);
        return view('tournament', ['tournament' => $tournament]);
    }

}
