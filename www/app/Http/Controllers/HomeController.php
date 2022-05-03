<?php

namespace Creativolab\App\Http\Controllers;

class HomeController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      echo "Mostar página principal ";
      echo $_ENV['APP_URL'];
   }
}