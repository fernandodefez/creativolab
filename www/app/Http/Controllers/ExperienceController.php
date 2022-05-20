<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Auth;
use Creativolab\App\Models\Experience;
use Creativolab\App\Models\User;
use Creativolab\App\Repositories\Experience\ExperienceRepository;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;

class ExperienceController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!Auth::user()) {
            header('Location: ' . $_ENV['APP_URL'] . '/login');
        }

        $id = $_SESSION['user_id'];
        $userRepository = new UserRepository();
        $user = $userRepository->getUserById($id);

        $professionRepository = new ProfessionRepository();
        $profession = $professionRepository->getProfessionByUser($user);

        $experienceRepository = new ExperienceRepository();
        $experiences = $experienceRepository->findAll($user);

        $this->render('panel/experiences',
            [
                "user" => $user,
                "profession" => $profession,
                "experiences" => $experiences
            ]
        );
    }

    /**
     * This method allows users to create an experience
     *
     */
    public function store()
    {
        if (Auth::user()) {
            $errors = [];
            $data = [];

            if (empty($_POST['position'])) {
                $errors['position'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['company'])) {
                $errors['company'] = 'Este campo es obligatorio';
            }

            if (empty($_POST['startedAt'])) {
                $errors['startedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['startedAt'])) {
                $errors['startedAt'] = 'Formato no válido';
            }

            if (empty($_POST['endedAt'])) {
                $errors['endedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['endedAt'])) {
                $errors['endedAt'] = 'Formato no válido';
            }

            if (empty($_POST['details'])) {
                $errors['details'] = 'Este campo es obligatorio';
            }

            $user = new User();
            $user->setId($_SESSION['user_id']);

            $experienceRepository = new ExperienceRepository();
            $experiences = $experienceRepository->findAll($user);

            if (count($experiences) == 3) {
                $errors['outofbounds'] = "Solo tienes permitido añadir hasta 3 experiencias";
            }

            if (!empty($errors)) {
                $data['success'] = false;
                $data['errors'] = $errors;
            } else {
                $user = new User();
                $user->setId($_SESSION['user_id']);

                $experience = new Experience();
                $experience->setPosition($_POST['position']);
                $experience->setCompany($_POST['company']);
                $experience->setStartedAt($_POST['startedAt']);
                $experience->setEndedAt($_POST['endedAt']);
                $experience->setDetails($_POST['details']);
                $experience->setUser($user->getId());

                // TODO: Store data

                $experienceRepository = new ExperienceRepository();
                $data['success'] = $experienceRepository->create($experience);

                if ($data['success']) {
                    $errors['message'] = 'No ha sido posible añadir tu experiencia';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu experiencia ha sido añadida con éxito';
            }
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }

    /**
     * This method retrieves a specified user's experience, based on its id
     *
     */
    public function show()
    {
        $id = $this->post('id');

        $errors = [];
        $data = [];

        if (Auth::user()) {

            if (!isset($id)) {
                $errors['key'] = "La clave 'id' no ha sido especificado";
            }

            if (!is_numeric($id)) {
                $errors['value'] = "El valor del 'id' debe ser un número";
            }

            if ($id < 0) {
                $errors['value'] = "El valor del 'id' debe ser mayor que 0";
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
                $data['success'] = false;
            } else {
                $experience = new Experience();
                $experience->setId($id);
                $experience->setUser($_SESSION['user_id']);

                $experienceRepository = new ExperienceRepository();
                $values = $experienceRepository->get($experience);

                $data['success'] = !empty($values);

                if (!$data['success']){
                    $errors['message'] = 'Algo salió mal al recuperar los datos de la experiencia seleccionada';
                    $data['errors'] = $errors;
                }

                $data['values'] = $values;
            }
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta acción";
            http_response_code(401);
        }

        echo json_encode($data);
    }

    /**
     * This method retrieves a specified user's experience, based on its id
     *
     */
    public function update(){
        $errors = [];
        $data = [];

        if (Auth::user()) {
            parse_str(file_get_contents('php://input'), $content);
            if (!$_SERVER['REQUEST_METHOD'] == "PUT") {
                $errors['request'] = "Petición no soportada";
            }

            if (!isset($content['id'])) {
                $errors['key'] = "La clave 'id' no ha sido especificado";
            }

            if (!is_numeric($content['id'])) {
                $errors['value'] = "El valor del 'id' debe ser un número";
            }

            if ($content['id'] < 0) {
                $errors['value'] = "El valor del 'id' debe ser mayor que 0";
            }

            if (empty($content['position'])) {
                $errors['position'] = 'Este campo es obligatorio';
            }

            if (empty($content['company'])) {
                $errors['company'] = 'Este campo es obligatorio';
            }

            if (empty($content['startedAt'])) {
                $errors['startedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $content['startedAt'])) {
                $errors['startedAt'] = 'Formato no válido';
            }

            if (empty($content['endedAt'])) {
                $errors['endedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $content['endedAt'])) {
                $errors['endedAt'] = 'Formato no válido';
            }

            if (empty($content['details'])) {
                $errors['details'] = 'Este campo es obligatorio';
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
                $data['success'] = false;
            } else {
                $experience = new Experience();
                $experience->setId($content['id']);
                $experience->setPosition($content['position']);
                $experience->setCompany($content['company']);
                $experience->setStartedAt($content['startedAt']);
                $experience->setEndedAt($content['endedAt']);
                $experience->setDetails($content['details']);
                $experience->setUser($_SESSION['user_id']);

                $experienceRepository = new ExperienceRepository();
                $data['success'] = $experienceRepository->update($experience);

                if (!$data['success']) {
                    $errors['message'] = 'Tu experiencia no ha recibido ningún cambio';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu experiencia ha sido actualizada con éxito';
            }
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta acción";
            http_response_code(401);
        }

        echo json_encode($data);
    }

    /**
     * This method removes a specified user's experience bases on its id
     *
     */
    public function destroy()
    {
        $errors = [];
        $data = [];

        if (Auth::user()) {
            parse_str(file_get_contents('php://input'), $content);
            if (!$_SERVER['REQUEST_METHOD'] == "DELETE") {
                $errors['request'] = "Petición no soportada";
            }

            if (!isset($content['id'])) {
                $errors['key'] = "La clave 'id' no ha sido especificado";
            }

            if (!is_numeric($content['id'])) {
                $errors['value'] = "El valor del 'id' debe ser un número";
            }

            if ($content['id'] < 0) {
                $errors['value'] = "El valor del 'id' debe ser mayor que 0";
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
                $data['success'] = false;
            } else {
                $experience = new Experience();
                $experience->setId($content['id']);
                $experience->setUser($_SESSION['user_id']);

                $experienceRepository = new ExperienceRepository();
                $data['success'] = ($experienceRepository->delete($experience));

                if ($data['success']) {
                    $errors['message'] = 'Tu experiencia no sido borrada';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu experiencia no sido borrada con éxito';
            }
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta acción";
            http_response_code(401);
        }

        echo json_encode($data);
    }

    /**
     * This method toggles the experience module
     *
     */
    public function toggle()
    {
        $errors = [];
        $data = [];

        if (!Auth::user()) {
            $errors['unauthorized'] = "You are not allowed to perform this action";
            http_response_code(401);
        }

        parse_str(file_get_contents('php://input'), $content);
        if (!$_SERVER['REQUEST_METHOD'] == "PUT") {
            $errors['request'] = "Request method not allowed";
        }

        if (!isset($content['experiences_enabled'])) {
            $errors['key'] = "The key is not allowed";
        }

        if (!(($content['experiences_enabled'] == 'false') || ($content['experiences_enabled'] == 'true'))) {
            $errors['value'] = "The value is not valid";
        }

        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $data['success'] = true;
            $data['message'] = "Success!";

            $user = new User();
            $user->setId($_SESSION['user_id']);
            $user->setAreExperiencesEnabled(!(($content['experiences_enabled'] == 'false')));
            $userRepository = new UserRepository();
            $userRepository->toggleExperiencesEnabled($user);
        }

        echo json_encode($data);
    }
}