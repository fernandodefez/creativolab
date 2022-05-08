<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Auth;
use Creativolab\App\Http\Controllers\Controller;
use Creativolab\App\Repositories\User\UserRepository;

class LoginController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
       if (!Auth::user()) {
           $this->render('auth/login');
       } else {
           header('Location: '. $_ENV['APP_URL'] . '/dashboard');
       }
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
               if ($user->isVerified() == 1) {
                   $_SESSION['user_id'] = $user->getId();
                   header('Location: '. $_ENV['APP_URL'] . '/profile/personal-data');

               } else if ($user->isVerified() == 0) {
                   $this->render('auth/user_not_verified',
                       array(
                           "email" => $user->getEmail()
                       )
                   );
               } else {
                   $this->render('errors/404');
               }
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