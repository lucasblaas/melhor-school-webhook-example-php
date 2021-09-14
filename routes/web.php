<?php
use Laravel\Lumen\Routing\Router;

/** @var Router $router */
$router->get('/', 'ExampleController@index');
$router->post('/register', [
    'as' => 'register',
    'uses' => 'ExampleController@register'
]);
