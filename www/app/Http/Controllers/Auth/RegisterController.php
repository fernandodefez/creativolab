<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Auth;
use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Models\Profession;
use Creativolab\App\Models\User;
use Creativolab\App\Notifications\UserVerification;
use Creativolab\App\QRCodeImage;
use Creativolab\App\Repositories\Code\CodeRepository;
use Creativolab\App\Repositories\Profession\ProfessionRepository;
use Creativolab\App\Repositories\User\UserRepository;
use Creativolab\App\Storage;
use PHPMailer\PHPMailer\Exception;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!Auth::user()) {
            $professions = (new ProfessionRepository())->findAll();
            $codes = (new CodeRepository())->findAll();
            if (count($professions) > 0 && count($codes) > 0) {
                $this->render('auth/register',
                    [
                        "professions" => $professions,
                        'codes' => $codes
                    ])
                ;
                exit();
            }
            header('Location: '. $_ENV['APP_URL']);
        }
        header('Location: '. $_ENV['APP_URL'] . '/login');
    }

    public function store()
    {
        $firstName          =  trim(htmlspecialchars($this->post('firstName')));
        $middleName         =  trim(htmlspecialchars($this->post('middleName')));
        $firstLastname      =  trim(htmlspecialchars($this->post('firstLastname')));
        $secondLastname     =  trim(htmlspecialchars($this->post('secondLastname')));
        $email              =  trim(htmlspecialchars($this->post('email')));
        $password           =  $this->post('password');
        $confirmedPassword  =  $this->post('confirmedPassword');
        $code               =  $this->post('code');
        $phoneNumber        =  trim(htmlentities($this->post('phoneNumber')));
        $profession         =  $this->post('profession');

        // This is an empty object where we will store the data and use when storing the user in the DDBB
        $user = new User();

        $user->setFirstName((is_string($firstName)) ? $firstName : "");
        $user->setMiddleName((is_string($middleName)) ? $middleName : "");
        $user->setFirstLastname((is_string($firstLastname)) ? $firstLastname : "");
        $user->setSecondLastname((is_string($secondLastname)) ? $secondLastname : "");
        $user->setEmail((is_string($email)) ? $email : "");
        $user->setPassword((is_string($password)) ? $password : "");
        $user->setConfirmedPassword((is_string($confirmedPassword)) ? $confirmedPassword : "");
        $user->setCode((is_numeric($code)) ? $code : 0);
        $user->setPhoneNumber((is_string($phoneNumber)) ? $phoneNumber : "");
        $user->setProfession(is_numeric($profession) ? $profession : 0);

        $professions = (new ProfessionRepository())->findAll();
        $codes = (new CodeRepository())->findAll();

        $values = array(
            "first_name_value"            =>       $user->getFirstName(),
            "middle_name_value"           =>       $user->getMiddleName(),
            "first_lastname_value"        =>       $user->getFirstLastname(),
            "second_lastname_value"       =>       $user->getSecondLastname(),
            "email_value"                 =>       $user->getEmail(),
            "code_value"                  =>       $user->getCode(),
            "phone_number_value"          =>       $user->getPhoneNumber(),
            "profession_value"            =>       $user->getProfession(),
            "professions"                 =>       $professions,
            "codes"                       =>       $codes
        );

        $errors = [];

        if (empty($user->getFirstName())) {
            $errors['first_name_error'] = "Este campo es obligatorio";
        } else if(strlen($user->getFirstName()) > 49) {
            $errors['first_name_error'] = "Solo se permiten hasta 49 carácteres";
        } else if(!preg_match("/^[a-zA-Z-' ]*$/", $user->getFirstName())) {
            $errors['first_name_error'] = "Solo se permiten letras y espacios";
        }

        if (!empty($user->getMiddleName())) {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getMiddleName())) {
                $errors['middle_name_error'] = "Solo se permiten letras y espacios";
            }
        }

        if (empty($user->getFirstLastname())) {
            $errors['first_lastname_error'] = "Este campo es obligatorio";
        } else if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getFirstLastname())) {
            $errors['first_lastname_error'] = "Solo se permiten letras y espacios";
        }

        if (!empty($user->getSecondLastname())) {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getSecondLastname())) {
                $errors['second_lastname_error'] = "Solo se permiten letras y espacios";
            }
        }

        if (empty($user->getEmail())) {
            $errors['email_error'] = "Este campo es obligatorio";
        } else if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors['email_error'] = "Correo no válido";
        } else if ((new UserRepository())->getUserByEmail($user->getEmail())->getId() != -1) {
            $errors['email_error'] = "Ya existe una cuenta con este correo";
        }

        if (empty($user->getPassword())) {
            $errors['password_error'] = "Este campo es obligatorio";
        } else if (!(strlen($user->getPassword()) >= 8)) {
            $errors['password_error'] = "Tu contraseña debe tener mínimo 8 caracteres";
        } else if (!empty($user->getConfirmedPassword()) && $user->getConfirmedPassword() !== $user->getPassword()) {
            $errors['password_error'] = "Las contraseñas no coinciden";
        }

        if (empty($user->getConfirmedPassword())) {
            $errors['confirmed_password_error'] = "Este campo es obligatorio";
        } else if (!empty($user->getConfirmedPassword()) && $user->getConfirmedPassword() !== $user->getPassword()) {
            $errors['confirmed_password_error'] = "Las contraseñas no coinciden";
        }

        if (empty($user->getCode()) || $user->getCode() == 0) {
            $errors['code_error'] = "Este campo es obligatorio";
        } else if ($user->getCode() > 0) {
            $availableCodes = [];
            foreach ($codes as $code) {
                array_push($availableCodes, $code['code']);
            }
            if (!in_array($user->getCode(), $availableCodes)) {
                $errors['code_error'] = "Selecciona un código válido";
            }
        }

        if (empty($user->getPhoneNumber())) {
            $errors['phone_number_error'] = "Este campo es obligatorio";
        } else if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/", $user->getPhoneNumber())) {
            $errors['phone_number_error'] = "Número telefónico no válido";
        }


        if (empty($user->getProfession()) || $user->getProfession() == 0) {
            $errors['profession_error'] = "Este campo es obligatorio";
        } else if ($user->getProfession() > 0) {
            $availableProfessions = [];
            foreach ($professions as $profession) {
                array_push($availableProfessions, $profession->getId());
            }
            if (!in_array($user->getProfession(), $availableProfessions)) {
                $errors['profession_error'] = "Selecciona una profesión disponible";
            }
        }

        if(!array_filter($errors)) {
            try {
                // Create verifitation token in order to store it and send it to the user
                $user->setVerificationToken(base64_encode(random_bytes(64)));

                // Create user's folder to store all their data such as qr, images, etc...
                $user->setFolder(strtolower(
                    $user->getFirstName() . $user->getMiddleName() .
                    $user->getFirstLastname() . $user->getSecondLastname()
                ));

                $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT, ['cost' => 12]);
                $user->setPassword($hashedPassword);

                $user->setQr(str_replace('-', '', date("d-m-Y").time()). '.png');

                $user->setSubdomain(strtolower(
                    $user->getFirstName() . $user->getMiddleName() .
                    $user->getFirstLastname() . $user->getSecondLastname() .
                    '.' . $_ENV['APP_DOMAIN']));

                $user->setEndpoint(strtolower($user->getFirstName() . $user->getMiddleName() .
                    $user->getFirstLastname() . $user->getSecondLastname()
                ));

                //Sending an email so the user can verify their account
                $sendAccountVerificationEmail = new UserVerification( array(
                    "email"       =>      $user->getEmail(),
                    "name"        =>      $user->getFirstName(),
                    "lastname"    =>      $user->getFirstLastname(),
                    "token"       =>      $user->getVerificationToken()
                ));
                $sendAccountVerificationEmail->send();

                Storage::createFolder($user->getFolder());

                // Render a qr code within the user's folder previously created
                QRCodeImage::make($user->getEndpoint(), $user->getFolder(), $user->getQr());

                // Store the user
                $userRepository = new UserRepository();
                $userRepository->create($user);

                header('Location: '. $_ENV['APP_URL'] . '/login');
            } catch (Exception $exception) {
                echo $exception;
            }
        } else {
            $this->renderWithErrors('auth/register', $values, $errors);
            exit();
        }
    }
}