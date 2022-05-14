<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class PortfolioController extends Controller {

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

        $this->render('panel/portfolio', array(
            "user"          =>    $user,
            "profession"    =>    $profession
        ));
    }
}
