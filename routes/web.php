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
// $router->get('/key', function () {
//   return \Illuminate\Support\Str::random(32);
// });

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('productgroups', ['uses' => 'ProductGroupsController@getAll']);
    $router->get('productgroups/{id}', ['uses' => 'ProductGroupsController@getById']);
    $router->post('productgroups', ['uses' => 'ProductGroupsController@create']);
    $router->put('productgroups/{id}', ['uses' => 'ProductGroupsController@update']);
    $router->delete('productgroups/{id}', ['uses' => 'ProductGroupsController@delete']);
    
    $router->get('todos', ['uses' => 'TodosController@getAll']);
    $router->get('todos/{id}', ['uses' => 'TodosController@getById']);
    $router->post('todos', ['uses' => 'TodosController@create']);
    $router->put('todos/{id}', ['uses' => 'TodosController@update']);
    $router->delete('todos/{id}', ['uses' => 'TodosController@delete']);
});
