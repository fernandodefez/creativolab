<?php

require './../vendor/autoload.php';

use \Creativolab\App\Http\Controllers\HomeController;
use \Creativolab\App\Http\Controllers\DashboardController;
use \Creativolab\App\Http\Controllers\LoginController;
use \Creativolab\App\Http\Controllers\LogoutController;
use \Creativolab\App\Http\Controllers\RegisterController;
use \Creativolab\App\Http\Response;

session_start();

$router = new \Bramus\Router\Router();

$router->get("/", '\Creativolab\App\Http\Controllers\HomeController@index');

$router->get("/dashboard", '\Creativolab\App\Http\Controllers\DashboardController@index');

$router->get("/login", '\Creativolab\App\Http\Controllers\LoginController@index');
$router->post("/login", '\Creativolab\App\Http\Controllers\LoginController@login');

$router->get("/logout", '\Creativolab\App\Http\Controllers\LogoutController@destroy');

$router->get("/register", '\Creativolab\App\Http\Controllers\RegisterController@index');
$router->post("/register", '\Creativolab\App\Http\Controllers\RegisterController@store');

$router->set404(function () {
    $response = new Response();
    $response->render('errors/404');
});

$router->get('/alex', function(){ echo "Ruta añadida por Alex"; });
$router->run();