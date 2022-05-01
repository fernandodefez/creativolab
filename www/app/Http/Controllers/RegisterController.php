<?php

namespace Creativolab\App\Http\Controllers;

class RegisterController extends Controller {
   
   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $this->render('auth/register');
      exit();
   }

   public function store()
   {
      $firstName = trim(htmlspecialchars($this->post('firstName')));
      $middleName = trim(htmlspecialchars($this->post('middleName')));
      $firstLastname = trim(htmlspecialchars($this->post('firstLastname')));
      $secondLastname = trim(htmlspecialchars($this->post('secondLastname')));
      $email = trim(htmlspecialchars($this->post('email')));
      $password         =  $this->post('password');
      $repeatedPassword =  $this->post('repeatedPassword');
      $template         =  $this->post('template');

      $values = array(
         "first_name_value" => $firstName,
         "middle_name_value" => $middleName,
         "first_lastname_value" => $firstLastname,
         "second_lastname_value" => $secondLastname,
         "email_value" => $email,
         "template_value" => $template
      );

      $firstNameError = "";
      if (empty($firstName)) {
         $firstNameError = "Este campo es obligatorio";
      } else if(!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
         $firstNameError = "Solo letras y espacios se permiten";
      }

      $middleNameError = "";
      if (!empty($middleName)) {
         if (!preg_match("/^[a-zA-Z-' ]*$/", $middleName)) {
            $middleNameError = "Solo letras y espacios se permiten";
         }
      }

      $firstLastnameError = "";
      if (empty($firstLastname)) {
         $firstLastnameError = "Este campo es obligatorio";
      } else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstLastname)) {
         $firstLastnameError = "Solo las letras y los espacios se permiten";
      }

      $secondLastnameError = "";
      if (!empty($secondLastname)) {
         if (!preg_match("/^[a-zA-Z-' ]*$/", $secondLastname)) {
            $secondLastnameError = "Solo letras y espacios se permiten";
         }
      }

      $emailError = "";
      if (empty($email)) {
         $emailError = "Este campo es obligatorio";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailError = "Formato de correo no válido";
      }

      $passwordError = "";
      if (empty($password)) {
         $passwordError = "Este campo es obligatorio";
      } else if (!(strlen($password) >= 8)) {
         $passwordError = "Tu contraseña debe tener mínimo 8 caracteres";
      }

      $repeatedPasswordError = "";
      if (empty($repeatedPassword) && $repeatedPassword !== $password) {
         $repeatedPasswordError = "Las contraseñas no coinciden";
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

      if (
         empty($firstNameError) &&
         empty($middleNameError) &&
         empty($firstLastnameError) &&
         empty($secondLastnameError) &&
         empty($emailError) &&
         empty($passwordError) &&
         empty($repeatedPasswordError) &&
         empty($templateError)
      ) {
         echo "Registrado";
         var_dump($values);
      } else {
         $this->renderWithErrors('auth/register', $values, array(
            "first_name_error" => $firstNameError,
            "middle_name_error" => $middleNameError,
            "first_lastname_error" => $firstLastnameError,
            "second_lastname_error" => $secondLastnameError,
            "email_error" => $emailError,
            "password_error" => $passwordError,
            "repeated_password_error" => $repeatedPasswordError,
            "template_error" => $templateError
         ));
         exit();
      }
   }
}