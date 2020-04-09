<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    //return $router->app->version();
    return $router->app->make('view')->make('home');
});


/* MODULO GAMERS */
$router->get('gamers/', 'GamersController@index');
$router->get('gamers/nuevo', 'GamersController@nuevo');
$router->post('gamers/guardar', 'GamersController@guardar');
$router->get('gamers/editar/{id}', 'GamersController@editar');


