<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;
use Creativolab\App\Http\Controllers\Controller;

class TemplatePreviewController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!Auth::user()) {
            header('Location: '. $_ENV['APP_URL'] . '/login');
        }

        $id = $_SESSION['user_id'];
        $userRepository = new UserRepository();
        $user = $userRepository->getUserById($id);

        $professionRepository = new ProfessionRepository();
        $profession = $professionRepository->getProfessionByUserId($user);

        $user->setProfession($profession);

        $this->render('templates/' . $user->getProfession()->getTemplate() . '/index',
            array(
                "user"        =>  $user,
                "profession"  =>  $profession
            )
        );
    }
}