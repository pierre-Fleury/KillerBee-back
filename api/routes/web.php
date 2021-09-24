<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});



$router->group(['prefix' => 'Modele'], function () use ($router) {
    $router->get('/',  ['uses' =>
      'ModeleController@showAll']);
    $router->get('/{id}', ['uses' =>
      'ModeleController@showOne']);
    $router->post('/create', ['uses' =>
      'ModeleController@create']);
    $router->put('/update/{id}', ['uses' =>
      'ModeleController@update']);
    $router->delete('/delete/{id}', ['uses' =>
      'ModeleController@delete']);
  });