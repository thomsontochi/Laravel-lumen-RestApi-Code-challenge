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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('',  ['uses' => 'AuthorController@showAll']);
  
    $router->get('/{id}', ['uses' => 'AuthorController@showOneAuthor']);
  
    $router->post('', ['uses' => 'AuthorController@create']);
  
    $router->delete('/{id}', ['uses' => 'AuthorController@delete']);
  
    $router->put('/{id}', ['uses' => 'AuthorController@update']);
  });