<?php

use Creativolab\App\Http\Response;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

$router = new Bramus\Router\Router();

$router->get("/", '\Creativolab\App\Http\Controllers\HomeController@index');

$router->get("/dashboard", '\Creativolab\App\Http\Controllers\DashboardController@index');

$router->get("/login", '\Creativolab\App\Http\Controllers\Auth\LoginController@index');
$router->post("/login", '\Creativolab\App\Http\Controllers\Auth\LoginController@login');

$router->get("/logout", '\Creativolab\App\Http\Controllers\Auth\LogoutController@destroy');

$router->get("/register", '\Creativolab\App\Http\Controllers\Auth\RegisterController@index');
$router->post("/register", '\Creativolab\App\Http\Controllers\Auth\RegisterController@store');

$router->get("/verify-email/{token}", '\Creativolab\App\Http\Controllers\Auth\AccountVerificationController@verify');

$router->set404(function () {
    http_response_code(404);
    $response = new Response();
    $response->render('errors/404');
});

$router->get('/alex', function(){
    $link = 'www.google.com';
    $options = new QROptions(
        [
            'eccLevel' => QRCode::ECC_M,
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'version' => 5,
        ]
    );
    $qr = (new QRCode($options))->render($link);

    echo "<img src=' ".  $qr ."' alt=''>";

    //Create an Imagick object
    $image = new Imagick($qr);

    //header('Content-type: image/jpeg');

    // Use blurImage function
    $image->blurImage(7, 3);

    // Display the output image
    echo $image;

    // Estructura de la carpeta deseada
    $estructura = __DIR__ . '/../storage/accounts/fernandodefez/';

    // Para crear una estructura anidada se debe especificar
    // el parámetro $recursive en mkdir().

    $array = pathinfo($image);
    $filename = $array['filename'];
    $ext = $array['extension'];

    $targetFileExtension = __DIR__ . '/../storage/'. '.' .$ext;
    move_uploaded_file($image, $targetFileExtension);

    $hash = md5(Date('Ymdgi').$filename) . '.' .$ext;

    echo $hash;

    if(!mkdir($estructura, 0777, true)) {
        echo 'Fallo al crear las carpetas...';
    }

});

$router->get('/user_not_verified', function (){
    $response = new Response();
    $response->render('auth/user_not_verified');
});

$router->get('/user_verified', function (){
    $response = new Response();
    $response->render('auth/user_verified');
});

$router->run();