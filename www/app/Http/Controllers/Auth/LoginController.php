<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Repositories\User\UserRepository;

class LoginController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
       if (isset($_SESSION['user_id'])) {
           header('Location: '. $_ENV['APP_URL'] . '/dashboard');
       }
       $this->render('auth/login');
   }

   public function login()
   {
       $email       =   trim(htmlspecialchars($this->post('email')));
       $password    =   $this->post('password');

       $values = array(
           "email_value" => $email
       );

       $userRepository = new UserRepository();
       $user = $userRepository->getUserByEmail($email);

       $emailError = "";
       if (empty($email)) {
           $emailError = "Este campo es obligatorio";
       } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailError = "Correo no válido";
       } else {
           if ($user->getEmail() == null) {
               $emailError = "No existe cuenta con este correo";
           }
       }

       $passwordError = "";
       if (empty($password)) {
           $passwordError = "Este campo es obligatorio";
       } else {
           if (password_verify($password, $user->getHashedPassword())) {
               $_SESSION['user_id'] = $user->getId();
               header('Location: '. $_ENV['APP_URL'] . '/dashboard');
           } else {
               $passwordError = "Contraseña no válida";
           }
       }

       $errors = array(
           "email_error"    =>  $emailError,
           "password_error" =>   $passwordError
       );

       $this->renderWithErrors('auth/login', $values, $errors);
       exit();
   }
}