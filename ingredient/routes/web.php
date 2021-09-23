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

$router->group(['prefix' => 'Ingredient'], function () use ($router) {
    $router->get('/',  ['uses' =>
      'IngredientController@showAll']);
    $router->get('/{id}', ['uses' =>
      'IngredientController@showOne']);
    $router->post('/create', ['uses' =>
      'IngredientController@create']);
    $router->put('/update/{id}', ['uses' =>
      'IngredientController@update']);
    $router->delete('/delete/{id}', ['uses' =>
      'IngredientController@delete']);
  });