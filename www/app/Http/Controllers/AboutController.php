<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class AboutController extends Controller {

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
        $profession = $professionRepository->getProfessionByUser($user);

        $user->setProfession($profession->getId());

        $this->render('panel/about', array(
            "user"        =>  $user,
            "profession"  =>  $profession
        ));
    }
}