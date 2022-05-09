<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Auth;
use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Models\Profession;
use Creativolab\App\Models\User;
use Creativolab\App\Notifications\UserVerification;
use Creativolab\App\QRCodeBuilder;
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
           $this->render('auth/register');
           exit();
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
       $user->setProfession(new Profession((is_numeric($profession)) ? $profession : 0));

       $values = array(
           "first_name_value"            =>       $user->getFirstName(),
           "middle_name_value"           =>       $user->getMiddleName(),
           "first_lastname_value"        =>       $user->getFirstLastname(),
           "second_lastname_value"       =>       $user->getSecondLastname(),
           "email_value"                 =>       $user->getEmail(),
           "code_value"                  =>       $user->getCode(),
           "phone_number_value"          =>       $user->getPhoneNumber(),
           "profession_value"            =>       $user->getProfession()->getId()
       );

       $firstNameError = "";
       if (empty($user->getFirstName())) {
           $firstNameError = "Este campo es obligatorio";
       } else if(!preg_match("/^[a-zA-Z-' ]*$/", $user->getFirstName())) {
           $firstNameError = "Solo se permiten letras y espacios";
       }

       $middleNameError = "";
       if (!empty($user->getMiddleName())) {
           if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getMiddleName())) {
               $middleNameError = "Solo se permiten letras y espacios";
           }
       }

       $firstLastnameError = "";
       if (empty($user->getFirstLastname())) {
           $firstLastnameError = "Este campo es obligatorio";
       } else if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getFirstLastname())) {
           $firstLastnameError = "Solo se permiten letras y espacios";
       }

       $secondLastnameError = "";
       if (!empty($user->getSecondLastname())) {
           if (!preg_match("/^[a-zA-Z-' ]*$/", $user->getSecondLastname())) {
               $secondLastnameError = "Solo se permiten letras y espacios";
           }
       }

       $emailError = "";
       if (empty($user->getEmail())) {
           $emailError = "Este campo es obligatorio";
       } else if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
           $emailError = "Correo no válido";
       }

       $passwordError = "";
       if (empty($user->getPassword())) {
           $passwordError = "Este campo es obligatorio";
       } else if (!(strlen($user->getPassword()) >= 8)) {
           $passwordError = "Tu contraseña debe tener mínimo 8 caracteres";
       }

       $confirmedPasswordError = "";
       if (!empty($user->getConfirmedPassword()) && $user->getConfirmedPassword() !== $user->getPassword()) {
           $confirmedPasswordError = "Las contraseñas no coinciden";
       }

       $codeError = "";
       $codes = array("-", "52", "1",  "34",  "595");
       if (!array_search($user->getCode(), $codes)) {
           $codeError = "Selecciona un código válido";
       }

       $phoneNumberError = "";
       if (empty($user->getPhoneNumber())) {
           $phoneNumberError = "Este campo es obligatorio";
       } else if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/", $user->getPhoneNumber())) {
           $phoneNumberError = "Número celular no válido";
       }

       $professionError = "";
       if (!empty($user->getProfession()->getId())) {
           if (!filter_var($user->getProfession()->getId(), FILTER_VALIDATE_INT)) {
               $professionError = "Selecciona una profesión válida";
           }
           else if (!($user->getProfession()->getId() > 0 && $user->getProfession()->getId() < 4)) {
               $professionError = "Selecciona una profesión disponible";
           } else {
               $professionError = "";
           }
       } else {
           $professionError = "Este campo es obligatorio";
       }


       $errors = array(
           "first_name_error"          =>      $firstNameError,
           "middle_name_error"         =>      $middleNameError,
           "first_lastname_error"      =>      $firstLastnameError,
           "second_lastname_error"     =>      $secondLastname,
           "email_error"               =>      $emailError,
           "password_error"            =>      $passwordError,
           "confirmed_password_error"  =>      $confirmedPasswordError,
           "code_error"                =>      $codeError,
           "phone_number_error"        =>      $phoneNumberError,
           "profession_error"          =>      $professionError
       );

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

               $user->setQr(Uuid::uuid4());

               // Store the user
               $userRepository = new UserRepository();
               $userRepository->create($user);

               // Send message so the user can verify their account
               $sendAccountVerificationEmail = new UserVerification( array(
                   "email"       =>      $user->getEmail(),
                   "name"        =>      $user->getFirstName(),
                   "lastname"    =>      $user->getFirstLastname(),
                   "token"       =>      $user->getVerificationToken()
               ));
               $sendAccountVerificationEmail->send();

               Storage::createFolder($user->getFolder());

               // Render a qr code within the user's folder previously created
               QRCodeBuilder::build("www.google.com", $user->getFolder(), $user->getQr());

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