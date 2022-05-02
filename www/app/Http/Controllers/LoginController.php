<?php

namespace Creativolab\App\Http\Controllers;

class LoginController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      if (isset($_SESSION['user'])) {
         header('Location: http://localhost/dashboard');
      }
      $this->render('auth/login');
   }

   public function login() 
   {
      $username = $this->post('email');
      $password = $this->post('password');

      $data = array();
      $errors = array();

      if (empty($username)) {
         array_push($errors, ['username_error' => 'This field is required']);
      }

      if (empty($password)) {
         array_push($errors, ['password_error' => 'This field is required']);
      }

      if ($username === "fernandodefez@gmail.com") {
         array_push($data, ['username' => $username]);
      }

      if ($username === "fernandodefez@gmail.com" && $password === "1234") {
         $_SESSION['user'] = "id del usuario";
         header('Location: http://localhost/dashboard');
      }

      $this->render('auth/login', array($data, $errors));
   }
}