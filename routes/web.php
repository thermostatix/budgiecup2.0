<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $tournaments = \App\Tournament::all();

    $players = \App\Player::all();

    return view('welcome', ['tournaments' => $tournaments, 'players' => $tournaments]);

});

Route::get('/players', function () {
    $players = \App\Player::all();

    return view('players', ['players' => $players]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/leaderboard', function () {


    return view('submit');
});