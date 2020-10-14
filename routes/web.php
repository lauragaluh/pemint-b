<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\ProductController;

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

$router->get('/hello', function () {
    return "<h1>Laura Galuh I.M</h1><p>185150707111014</p>";
});

//     method  endpoint    controller@fungsi
$router->get('products', ['uses' => 'ProductController@index']);
$router->get('products/{id}', ['uses' => 'ProductController@show']);
$router->post('products/{id}', ['uses' => 'ProductController@store']);
$router->put('products/{id}', ['uses' => 'ProductController@update']);
$router->delete('products/{id}', ['uses' => 'ProductController@destroy']);