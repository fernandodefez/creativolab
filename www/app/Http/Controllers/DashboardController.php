<?php

namespace Creativolab\App\Http\Controllers;

class DashboardController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      if (isset($_SESSION['user_id'])) {
         $this->render('dashboard/dashboard', array($_SESSION['user']));
      } else {
         header('Location: '. $_ENV['APP_URL'] . '/login');
      }
   }
}
