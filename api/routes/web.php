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

  $router->group(['prefix' => 'Etapes'], function () use ($router) {
    $router->get('/',  ['uses' =>
      'EtapesController@showAll']);
    $router->get('/{id}', ['uses' =>
      'EtapesController@showOne']);
    $router->post('/create', ['uses' =>
      'EtapesController@create']);
    $router->put('/update/{id}', ['uses' =>
      'EtapesController@update']);
    $router->delete('/delete/{id}', ['uses' =>
      'EtapesController@delete']);
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