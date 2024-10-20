<?php

use Core\Router;
use Core\Request;

require_once "../vendor/autoload.php";

$router = new Router();

$router->get('/', 'HomeController@index');
$router->post('/submit', 'HomeController@submit');

// Get the action to execute
$router->direct(Request::uri(), Request::method());
