<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Models\Education;
use Creativolab\App\Models\User;
use Creativolab\App\Repositories\Education\EducationRepository;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class EducationController extends Controller {

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

        $educationRepository = new EducationRepository();
        $degrees = $educationRepository->findAll($user);


        $this->render('panel/education', array(
            "user"          =>    $user,
            "profession"    =>    $profession,
            "degrees"       =>    $degrees
        ));
    }


    /**
     * Store a user's degree
    */
    public function store()
    {
        if (Auth::user()) {
            $errors = [];
            $data = [];

            if (empty($_POST['level'])) {
                $errors['level'] = 'Este campos es obligatorio';
            }

            if (empty($_POST['degree'])) {
                $errors['degree'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['institute'])) {
                $errors['institute'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['startedAt'])) {
                $errors['startedAt'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['endedAt'])) {
                $errors['endedAt'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['details'])) {
                $errors['details'] = 'Este campo es obligatorio';
            }

            $user = new User();
            $user->setId($_SESSION['user_id']);

            $educationRepository = new EducationRepository();
            $degrees = $educationRepository->findAll($user);

            if (count($degrees) == 3) {
                $errors['outofbounds'] = "Solo puedes agregar hasta 3 niveles educativos";
            }

            if (!empty($errors)) {
                $data['success'] = false;
                $data['errors'] = $errors;
            } else {
                $user = new User();
                $user->setId($_SESSION['user_id']);

                $degree = new Education();
                $degree->setLevel($_POST['level']);
                $degree->setDegree($_POST['degree']);
                $degree->setInstitute($_POST['institute']);
                $degree->setStartedAt($_POST['startedAt']);
                $degree->setEndedAt($_POST['endedAt']);
                $degree->setDetails($_POST['details']);
                $degree->setUser($user->getId());

                // TODO: Store data
                $educationRepository = new EducationRepository();
                $educationRepository->create($degree);

                $data['success'] = true;
                $data['message'] = 'Success!';
            }
        } else {
            $data['success'] = false;
            $data['message'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }

    /**
     * Performs the deletion of a user's degree
     * @param string $id
    */
    public function destroy()
    {
        $data = [];
        $errors = [];
        if (Auth::user()) {
            if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
                parse_str(file_get_contents('php://input'), $content);
                if ($content['id']) {
                    if (is_numeric($content['id'])) {

                        $education = new Education();
                        $education->setId($content['id']);

                        $educationRepository = new EducationRepository();
                        $educationRepository->delete($education);

                    } else {
                        $errors['id_not_specified'] = "Solo se permiten números.";
                    }
                } else {
                    $errors['id_not_specified'] = "No se pudo remover el elemento";
                }
            } else {
                $errors['request'] = "Ocurrió un error en la petición.";
            }

            if (!empty($errors)) {
                $data['success'] = false;
                $data['errors'] = $errors;
            } else {
                $data['success'] = true;
                $data['message'] = "Success!";
            }
        } else {
            $data['success'] = false;
            $data['message'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }
}