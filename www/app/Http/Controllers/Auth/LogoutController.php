<?php

namespace Creativolab\App\Http\Controllers\Auth;

use Creativolab\App\Http\Controllers\Controller;

class LogoutController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function destroy()
   {
      if (isset($_SESSION['user_id'])) {
         unset($_SESSION['user_id']);
         header('Location: '. $_ENV['APP_URL'] . '/login');
      }
      header('Location: '. $_ENV['APP_URL'] . '/login');
   }
}