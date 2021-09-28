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

$router->group(['prefix' => 'Procede'], function () use ($router) {
    $router->get('/',  ['uses' =>
      'ProcedeController@showAll']);
    $router->get('/{id}', ['uses' =>
      'ProcedeController@showOne']);
    $router->post('/create', ['uses' =>
      'ProcedeController@create']);
    $router->put('/update/{id}', ['uses' =>
      'ProcedeController@update']);
    $router->delete('/delete/{id}', ['uses' =>
      'ProcedeController@delete']);
  });