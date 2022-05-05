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
    
    $router->get('article',  ['uses' => 'AuthorController@showAllarticle']);
  
    $router->get('article/{id}', ['uses' => 'AuthorController@showOneAuthor']);

    $router->get('/articles/{id}/comment', ['uses' => 'AuthorController@showOneAuthor']);

    $router->get('/articles/{id}/like', ['uses' => 'AuthorController@showOneAuthor']);

    $router->get('/articles/{id}/view', ['uses' => 'AuthorController@showOneAuthor']);
  
  });