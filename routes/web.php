<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Auth\LoginController@index']);
Route::post('/login-user', ['as' => 'login.post', 'uses' => 'App\Http\Controllers\Auth\LoginController@login']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', ['as' => 'logout', 'uses' => 'App\Http\Controllers\Auth\LoginController@logout']);
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'App\Http\Controllers\DashboardController@index']);
    Route::get('/positions', ['as' => 'positions', 'uses' => 'App\Http\Controllers\PositionController@index']);
    Route::get('/positions/{position}/show', ['as' => 'positions.show', 'uses' => 'App\Http\Controllers\PositionController@show']);
    Route::post('/position/store', ['as' => 'position.store', 'uses' => 'App\Http\Controllers\PositionController@store']);
    Route::post('/position/{position}/update', ['as' => 'position.update', 'uses' => 'App\Http\Controllers\PositionController@update']);
    Route::delete('/position/{position}/delete', ['as' => 'position.delete', 'uses' => 'App\Http\Controllers\PositionController@destroy']);
    Route::post('/position/{position}/active', ['as' => 'position.active', 'uses' => 'App\Http\Controllers\PositionController@changeStatus']);

    Route::get('/local-govs/{state}', ['as' => 'local-govs', 'uses' => 'App\Http\Controllers\PositionController@getLocalGovs']);

    Route::get('/contestants', ['as' => 'contestants', 'uses' => 'App\Http\Controllers\ContestantController@index']);
    Route::get('/contestants/{contestant}/show', ['as' => 'contestants.show', 'uses' => 'App\Http\Controllers\ContestantController@show']);
    Route::post('/contestant/store', ['as' => 'contestant.store', 'uses' => 'App\Http\Controllers\ContestantController@store']);
    Route::post('/contestant/{contestant}/update', ['as' => 'contestant.update', 'uses' => 'App\Http\Controllers\ContestantController@update']);
    Route::delete('/contestant/{contestant}/delete', ['as' => 'contestant.delete', 'uses' => 'App\Http\Controllers\ContestantController@destroy']);
    Route::post('/contestant/{contestant}/active', ['as' => 'contestant.active', 'uses' => 'App\Http\Controllers\ContestantController@updateStatus']);

    Route::get('/voters', ['as' => 'voters', 'uses' => 'App\Http\Controllers\VotersController@index']);
    Route::get('/voters/{voter}/show', ['as' => 'voters.show', 'uses' => 'App\Http\Controllers\VotersController@show']);
    Route::post('/voter/store', ['as' => 'voter.store', 'uses' => 'App\Http\Controllers\VotersController@store']);
    Route::post('/voter/{voter}/update', ['as' => 'voter.update', 'uses' => 'App\Http\Controllers\VotersController@update']);
    Route::get('/voter/active', ['as' => 'voters.active', 'uses' => 'App\Http\Controllers\VotersController@approveVoters']);

    Route::get('/vote', ['as' => 'vote', 'uses' => 'App\Http\Controllers\VotesController@index']);
});
