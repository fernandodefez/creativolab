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

$router->get('/db', function() {
    $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Success: A proper connection to MySQL was made! The docker database is great." . PHP_EOL;

    mysqli_close($link);
});

$router->get('/pdo', function() {
    $DBuser = 'root';
    $DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
    $pdo = null;

    try{
        $database = 'mysql:host=database:3306';
        $pdo = new PDO($database, $DBuser, $DBpass);
        echo "Success: A proper connection to MySQL was made! The docker database is great.";
    } catch(PDOException $e) {
        echo "Error: Unable to connect to MySQL. Error:\n $e";
    }

    $pdo = null;
});

$router->run();