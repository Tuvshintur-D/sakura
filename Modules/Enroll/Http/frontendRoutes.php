<?php
use Illuminate\Routing\Router;

$router->post('/enroll/register', ['as' => 'invoice.index', 'uses' => 'PublicController@index']);
