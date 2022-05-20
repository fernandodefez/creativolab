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
     * This method allows users to create an experience
     *
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

                $experienceRepository = new EducationRepository();
                $data['success'] = $experienceRepository->create($degree);

                if ($data['success']) {
                    $errors['message'] = 'No ha sido posible añadir tu nivel escolar';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu nivel escolar ha sido añadido con éxito';
            }
        } else {
            $data['success'] = false;
            $data['message'] = "No tienes permitido realizar esta operación";
            http_response_code(401);
        }
        echo json_encode($data);
    }

    /**
     * This method retrieves a specified user's degree, based on its id
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
                $degree = new Education();
                $degree->setId($id);
                $degree->setUser($_SESSION['user_id']);

                $educationRepository = new EducationRepository();
                $values = $educationRepository->get($degree);

                $data['success'] = !empty($values);

                if (!$data['success']){
                    $errors['message'] = 'Algo salió mal al recuperar los datos';
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
     * This method updates a specified user's degree, based on its id
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

            if (empty($content['level'])) {
                $errors['level'] = 'Este campo es obligatorio';
            }

            if (empty($content['degree'])) {
                $errors['degree'] = 'Este campo es obligatorio';
            }

            if (empty($content['institute'])) {
                $errors['institute'] = 'Este campo es obligatorio';
            }

            if (empty($content['startedAt'])) {
                $errors['startedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}$/", $content['startedAt'])) {
                $errors['startedAt'] = 'Formato no válido';
            }

            if (empty($content['endedAt'])) {
                $errors['endedAt'] = 'Este campo es obligatorio';
            } else if (!preg_match("/^\d{4}$/", $content['endedAt'])) {
                $errors['endedAt'] = 'Formato no válido';
            }

            if (empty($content['details'])) {
                $errors['details'] = 'Este campo es obligatorio';
            }

            if (!empty($errors)) {
                $data['errors'] = $errors;
                $data['success'] = false;
            } else {
                $degree = new Education();
                $degree->setId($content['id']);
                $degree->setLevel($content['level']);
                $degree->setDegree($content['degree']);
                $degree->setInstitute($content['institute']);
                $degree->setStartedAt($content['startedAt']);
                $degree->setEndedAt($content['endedAt']);
                $degree->setDetails($content['details']);
                $degree->setUser($_SESSION['user_id']);

                $educationRepository = new EducationRepository();
                $data['success'] = $educationRepository->update($degree);

                if (!$data['success']) {
                    $errors['message'] = 'Tu nivel escolar no ha recibido ningún cambio';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu nivel escolar ha sido actualizada con éxito';
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
                $degree = new Education();
                $degree->setId($content['id']);
                $degree->setUser($_SESSION['user_id']);

                $educationRepository = new EducationRepository();
                $data['success'] = ($educationRepository->delete($degree));

                if (!$data['success']) {
                    $errors['message'] = 'Tu nivel escolar no ha sido borrado';
                    $data['errors'] = $errors;
                }

                $data['message'] = 'Tu nivel escolar ha sido borrada con éxito';
            }
        } else {
            $data['success'] = false;
            $data['unauthorized'] = "No tienes permitido realizar esta acción";
            http_response_code(401);
        }

        echo json_encode($data);
    }

    /**
     * This method toggles the education module
     *
     */
    public function toggle()
    {
        $errors = [];
        $data = [];

        if (Auth::user()) {
            parse_str(file_get_contents('php://input'), $content);
            if (!$_SERVER['REQUEST_METHOD'] == "PUT") {
                $errors['request'] = "Request method not allowed";
            }

            if (!isset($content['education_enabled'])) {
                $errors['key'] = "The key is not allowed";
            }

            if (!(($content['education_enabled'] == 'false') || ($content['education_enabled'] == 'true'))) {
                $errors['value'] = "The value is not valid";
            }

            if (!empty($errors)) {
                $data['success'] = false;
                $data['errors'] = $errors;
            } else {
                $user = new User();
                $user->setId($_SESSION['user_id']);
                $user->setIsEducationEnabled(!(($content['education_enabled'] == 'false')));
                $userRepository = new UserRepository();
                $userRepository->toggleEducationEnabled($user);

                $data['success'] = true;
                $data['message'] = "Success!";
            }
        } else {
            $errors['unauthorized'] = "You are not allowed to perform this action";
            $data['errors'] = $errors;
            http_response_code(401);
        }

        echo json_encode($data);
    }

}