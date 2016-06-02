<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    $pokemon = ['Rufflet', 'Litten', 'Popplio'];
    return view('welcome', ['pokemon' => $pokemon]);
    //alternitive syntax to return a view with a variable inclides: with(), withpokemon and compact('pokemon')

});

Route::get('/', function () {
    return view('welcome');
});



//Route::get('home', 'PageController#home');



//Route::get('jokeYoMomma', 'JokeController#jokeYoMomma');

//Route::get('jokeBad', 'JokeController#jokeBad');