<?php

namespace Creativolab\App\Http\Controllers\Templates;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\User\UserRepository;
use Creativolab\App\Http\Controllers\Controller;

class RealEstateController extends Controller {

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
        $this->render('templates/realestate/index', array(
            "user" => $user
        ));
    }
}
