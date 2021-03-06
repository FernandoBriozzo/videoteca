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

Route::get('/', 'PeliculaController@index')->name('home');

Route::resource('/peliculas', 'PeliculaController');

Route::resource('/generos', 'GeneroController');

Route::resource('/directores', 'DirectorController');

Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store');
Route::get('logout', 'SessionController@destroy')->name('logout');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::post('directores/create', 'DirectorController@store');
Route::post('generos/create', 'GeneroController@store');
Route::post('peliculas/create', 'PeliculaController@store');
