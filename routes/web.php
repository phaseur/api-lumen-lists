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
// test api
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// read all

$router->get('/categories', [
    'uses' => 'CategoryController@list',
    'as' => 'categories'
]);
$router->get('/tasks', [
    'uses' => 'TaskController@list',
    'as' => 'tasks'
]);

// read by id

$router->get('/categories/{id}', [
    'uses' => 'CategoryController@read',
    'as' => 'category'
]);
$router->get('/tasks/{id}', [
    'uses' => 'TaskController@read',
    'as' => 'task'
]);

 // delete

$router->delete('/categories/{id}', [
    'uses' => 'CategoryController@delete',
    'as' => 'category-delete'
]);
$router->delete('/tasks/{id}', [
    'uses' => 'TaskController@delete',
    'as' => 'task-delete'
]);

// update

$router->post('/tasks/{id}', [
    'uses' => 'TaskController@update',
    'as' => 'task-update'
]);
$router->post('/categories/{id}', [
    'uses' => 'CategoryController@update',
    'as' => 'category-update'
]);

// create

$router->post('/tasks', [
    'uses' => 'TaskController@create',
    'as' => 'task-create'
]);