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
$router->post('/auth', 'Auth\AuthController@login');

$router->group(['middleware' => 'apiJwt'], function () use ($router) {
    $router->post('/oscar', 'OscarController@create');
    $router->put('/oscar/{ano}', 'OscarController@update');
    $router->delete('/oscar/{ano}', 'OscarController@delete');

    $router->post('/premio', 'PremioController@create');
});

$router->get('/oscar', 'OscarController@getOscar');
$router->get('/oscar/{ano}', 'OscarController@getOscarByYear');

