<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Auth;
use Creativolab\App\Http\Controllers\Controller;
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
       $firstName            =       trim(htmlspecialchars($this->post('firstName')));
       $middleName           =       trim(htmlspecialchars($this->post('middleName')));
       $firstLastname        =       trim(htmlspecialchars($this->post('firstLastname')));
       $secondLastname       =       trim(htmlspecialchars($this->post('secondLastname')));
       $email                =       trim(htmlspecialchars($this->post('email')));
       $password             =       $this->post('password');
       $repeatedPassword     =       $this->post('repeatedPassword');
       $cellPhone            =       trim(htmlentities($this->post('cellPhone')));
       $template             =       $this->post('template');

       $values = array(
           "first_name_value"         =>      $firstName,
           "middle_name_value"        =>      $middleName,
           "first_lastname_value"     =>      $firstLastname,
           "second_lastname_value"    =>      $secondLastname,
           "email_value"              =>      $email,
           "cell_phone_value"         =>      $cellPhone,
           "template_value"           =>      $template
       );

      $firstNameError = "";
      if (empty($firstName)) {
         $firstNameError = "Este campo es obligatorio";
      } else if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
         $firstNameError = "Solo se permiten letras y espacios";
      }

      $middleNameError = "";
      if (!empty($middleName)) {
         if (!preg_match("/^[a-zA-Z-' ]*$/", $middleName)) {
            $middleNameError = "Solo se permiten letras y espacios";
         }
      }

      $firstLastnameError = "";
      if (empty($firstLastname)) {
          $firstLastnameError = "Este campo es obligatorio";
      } else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstLastname)) {
          $firstLastnameError = "Solo se permiten letras y espacios";
      }

      $secondLastnameError = "";
      if (!empty($secondLastname)) {
          if (!preg_match("/^[a-zA-Z-' ]*$/", $secondLastname)) {
              $secondLastnameError = "Solo se permiten letras y espacios";
          }
      }

      $emailError = "";
      if (empty($email)) {
         $emailError = "Este campo es obligatorio";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailError = "Correo no válido";
      }

      $passwordError = "";
      if (empty($password)) {
         $passwordError = "Este campo es obligatorio";
      } else if (!(strlen($password) >= 8)) {
         $passwordError = "Tu contraseña debe tener mínimo 8 caracteres";
      }

      $repeatedPasswordError = "";
      if (!empty($repeatedPassword) && $repeatedPassword !== $password) {
         $repeatedPasswordError = "Las contraseñas no coinciden";
      }

       $cellPhoneError = "";
       if (empty($cellPhone)) {
           $cellPhoneError = "Este campo es obligatorio";
       } else if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/", $cellPhone)) {
           $cellPhoneError = "Número celular no válido";
       }

      $templateError = "";
      if (!empty($template)) {
         if (!filter_var($template, FILTER_VALIDATE_INT)) {
            $templateError = "Selecciona una plantilla válida";
         }
         if (!($template > 0 && $template < 4)) {
            $templateError = "Selecciona una plantilla disponible";
         }
      } else {
         $templateError = "Este campo es obligatorio";
      }

      $errors = array(
          "first_name_error"          =>      $firstNameError,
          "middle_name_error"         =>      $middleNameError,
          "first_lastname_error"      =>      $firstLastnameError,
          "second_lastname_error"     =>      $secondLastnameError,
          "email_error"               =>      $emailError,
          "password_error"            =>      $passwordError,
          "repeated_password_error"   =>      $repeatedPasswordError,
          "cell_phone_error"          =>      $cellPhoneError,
          "template_error"            =>      $templateError
      );

      if (
         empty($firstNameError) &&
         empty($middleNameError) &&
         empty($firstLastnameError) &&
         empty($secondLastnameError) &&
         empty($emailError) &&
         empty($passwordError) &&
         empty($repeatedPasswordError) &&
         empty($cellPhoneError) &&
         empty($templateError)
      ) {
          try {
              $token = base64_encode(random_bytes(64));
              $user = new User(
                  -1,
                  $firstName,
                  $middleName,
                  $firstLastname,
                  $secondLastname,
                  $email,
                  password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]),
                  $cellPhone,
                  $token,
                  0,
                  $template
              );

              #$token = Uuid::uuid();

              // Store the user
              $userRepository = new UserRepository();
              $userRepository->create($user);

              // Send message so the user can verify their account
              $sendAccountVerificationEmail = new UserVerification( array(
                  "email"       =>      $email,
                  "name"        =>      $firstName,
                  "lastname"    =>      $firstLastname,
                  "token"       =>      $token
              ));
              $sendAccountVerificationEmail->send();

              // Create user's folder to store all their data such as qr, images, etc...
              $folder = strtolower(
                  $firstName .
                  $middleName .
                  $firstLastname .
                  $secondLastname
              );

              Storage::store($folder);

              // Render a qr code within the user's folder previously created
              QRCodeBuilder::build("www.google.com", $folder);


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