<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Repositories\Education\EducationRepository;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class TemplateController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index($endpoint)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getUserByEndpoint($endpoint);
        if ($user->getId() != -1) {
            $professionRepository = new ProfessionRepository();
            $profession = $professionRepository->getProfessionByUser($user);

            $educationRepository = new EducationRepository();
            $degrees = $educationRepository->findAll($user);


            $this->render('templates/' . $profession->getTemplate() . '/index',
                array(
                    "user"        =>  $user,
                    "profession"  =>  $profession,
                    "degrees"     =>  $degrees
                )
            );
        } else {
            $this->render('errors/404');
        }
    }
}