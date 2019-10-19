<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'Auth\AuthController@register')->name('register');
Route::post('/login', 'Auth\AuthController@login')->name('login');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.movie');

Route::get('/people', 'PersonController@index');
Route::get('/people/{person}', 'PersonController@show')->name('people.person');

Route::middleware(['auth'])->group(function () {
    Route::get('/me', 'Auth\AuthController@me')->middleware('auth');

    Route::post('/movies', 'MovieController@store');
    Route::put('/movies/{movie}', 'MovieController@update');
    Route::delete('/movies/{movie}', 'MovieController@destroy');

    Route::post('/people', 'PersonController@store');
    Route::put('/people/{person}', 'PersonController@update');
    Route::delete('/people/{person}', 'PersonController@destroy');

    Route::post('/crew', 'CrewController@store');
    Route::delete('/crew/{crew}', 'CrewController@destroy');
});
