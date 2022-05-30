<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

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

$router->mount("/account", function () use ($router) {
    $router->get("/about", '\Creativolab\App\Http\Controllers\AboutController@index');
    $router->post("/about", '\Creativolab\App\Http\Controllers\AboutController@store');
    $router->get("/settings", '\Creativolab\App\Http\Controllers\SettingsController@index');
    $router->post("/settings", '\Creativolab\App\Http\Controllers\SettingsController@store');
});

$router->mount("/module", function () use ($router) {
    $router->get("/languages", '\Creativolab\App\Http\Controllers\LanguageController@index');

    $router->get("/education", '\Creativolab\App\Http\Controllers\EducationController@index');
    $router->post("/education/store", '\Creativolab\App\Http\Controllers\EducationController@store');
    $router->post("/education/show", '\Creativolab\App\Http\Controllers\EducationController@show');
    $router->delete("/education/destroy", '\Creativolab\App\Http\Controllers\EducationController@destroy');
    $router->put("/education/update", '\Creativolab\App\Http\Controllers\EducationController@update');
    $router->put("/education/toggle", '\Creativolab\App\Http\Controllers\EducationController@toggle');

    $router->get("/experiences", '\Creativolab\App\Http\Controllers\ExperienceController@index');
    $router->post("/experience/store", '\Creativolab\App\Http\Controllers\ExperienceController@store');
    $router->post("/experience/show", '\Creativolab\App\Http\Controllers\ExperienceController@show');
    $router->delete("/experience/destroy", '\Creativolab\App\Http\Controllers\ExperienceController@destroy');
    $router->put("/experience/update", '\Creativolab\App\Http\Controllers\ExperienceController@update');
    $router->put("/experiences/toggle", '\Creativolab\App\Http\Controllers\ExperienceController@toggle');

    $router->get("/portfolio", '\Creativolab\App\Http\Controllers\PortfolioController@index');
});

$router->get("/testimonials", '\Creativolab\App\Http\Controllers\TestimonialController@index');


$router->get('/skills', '\Creativolab\App\Http\Controllers\Skill\SkillController@index');
$router->get('/api/v1/skills/categories', '\Creativolab\App\Http\Controllers\Skill\CategoryController@show');
$router->post('/api/v1/skills/categories', '\Creativolab\App\Http\Controllers\Skill\CategoryController@store');
$router->get('/api/v1/skills', '\Creativolab\App\Http\Controllers\Skill\SkillController@show');
$router->post('/api/v1/skills', '\Creativolab\App\Http\Controllers\Skill\SkillController@index');


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
    exit();
});

$router->run();