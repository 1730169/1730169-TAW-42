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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('gamers', 'GamerController');

Route::resource('ejemplos', 'EjemploController');

Route::resource('consolas', 'ConsolaController');

Route::resource('juegos', 'JuegoController');

Route::resource('plataformas', 'PlataformaController');

Route::resource('rentas', 'RentaController');

Route::post('/getTotalRenta', 'RentaController@getTotalRenta');