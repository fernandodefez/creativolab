<?php

use Creativolab\App\Http\Response;
use Creativolab\App\Auth;
use Creativolab\App\Repositories\User\UserRepository;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

$router = new Bramus\Router\Router();

$router->get("/", '\Creativolab\App\Http\Controllers\HomeController@index');

$router->mount('/dashboard', function () use ($router) {
    $router->get("", '\Creativolab\App\Http\Controllers\DashboardController@index');
});

$router->mount("/profile", function () use ($router) {
    $router->get("/personal-data", '\Creativolab\App\Http\Controllers\PersonalDataController@index');
    $router->get("/about-me", '\Creativolab\App\Http\Controllers\AboutMeController@index');
});

$router->mount("/module", function () use ($router) {
    $router->get("/skills", '\Creativolab\App\Http\Controllers\SkillController@index');

    $router->get("/languages", '\Creativolab\App\Http\Controllers\LanguageController@index');

    $router->get("/education", '\Creativolab\App\Http\Controllers\EducationController@index');
    $router->get("/education/{id}", '\Creativolab\App\Http\Controllers\EducationController@show');
    $router->post("/education", '\Creativolab\App\Http\Controllers\EducationController@store');
    $router->delete("/education", '\Creativolab\App\Http\Controllers\EducationController@destroy');
    $router->put("/education", '\Creativolab\App\Http\Controllers\EducationController@update');

    $router->get("/experiences", '\Creativolab\App\Http\Controllers\ExperienceController@index');

    $router->get("/testimonials", '\Creativolab\App\Http\Controllers\TestimonialController@index');

    $router->get("/portfolio", '\Creativolab\App\Http\Controllers\PortfolioController@index');
});


$router->get("/login", '\Creativolab\App\Http\Controllers\Auth\LoginController@index');
$router->post("/login", '\Creativolab\App\Http\Controllers\Auth\LoginController@login');

$router->get("/logout", '\Creativolab\App\Http\Controllers\Auth\LogoutController@destroy');

$router->get("/register", '\Creativolab\App\Http\Controllers\Auth\RegisterController@index');
$router->post("/register", '\Creativolab\App\Http\Controllers\Auth\RegisterController@store');

$router->get("/verify-email/{token}", '\Creativolab\App\Http\Controllers\Auth\UserVerificationController@verify');

$router->get('/preview', '\Creativolab\App\Http\Controllers\TemplatePreviewController@index');

$router->get('/{endpoint}', '\Creativolab\App\Http\Controllers\TemplateController@index');

$router->get('/test', '\Creativolab\App\Http\Controllers\TestController@index');


$router->set404(function () {
    http_response_code(404);
    $response = new Response();
    if (Auth::user()) {
        $id = $_SESSION['user_id'];
        $userRepository = new UserRepository();
        $user = $userRepository->getUserById($id);
        $response->render('panel/404', array(
            "user" => $user
        ));
    } else {
        $response->render('errors/404');
    }
});

$router->run();