<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use phpDocumentor\Reflection\DocBlock\Tags\Uses;

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

    $router->get('article',  ['uses' => 'ArticleController@showAllArticle']);
  
    $router->get('article/{id}', ['uses' => 'ArticleController@showOneArticle']);

    $router->get('/articles_comment', ['uses' => 'ArticleController@showCommentRelation']);

    $router->get('getComment', ['uses' => 'CommentController@getComment']);

    $router->put('/articles/{id}/comment', ['uses' => 'CommentController@UpdateComment']);

    $router->get('/articles/{id}/like', ['uses' => 'ArticleController@showOneAuthor']);

    $router->get('/articles/{id}/view', ['uses' => 'ArticleController@showOneAuthor']);
  
  });