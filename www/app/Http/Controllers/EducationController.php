<?php

namespace Creativolab\App\Http\Controllers;

class EducationController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      if (isset($_SESSION['user'])) {
          $this->render('dashboard/education', array($_SESSION['user']));
      } else {
          header('Location: '. $_ENV['APP_URL'] . '/login');
      }
   }
}
