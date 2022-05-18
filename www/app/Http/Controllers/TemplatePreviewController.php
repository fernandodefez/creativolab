<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\Education\EducationRepository;
use Creativolab\App\Repositories\Experience\ExperienceRepository;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class TemplatePreviewController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * This method is used for the user to preview their template
     * The user must be logged in
    */
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

        $educationRepository = new EducationRepository();
        $degrees = $educationRepository->findAll($user);

        $experienceRepository = new ExperienceRepository();
        $experiences = $experienceRepository->findAll($user);


        $this->render('templates/' . $profession->getTemplate() . '/index',
            array(
                "user"          =>  $user,
                "profession"    =>  $profession,
                "degrees"       =>  $degrees,
                "experiences"   =>  $experiences
            )
        );
    }
}