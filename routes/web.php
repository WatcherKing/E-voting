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

});
