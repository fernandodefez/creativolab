<?php

namespace Creativolab\App\Http\Controllers;

class HomeController extends Controller {

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
       $this->render('index');
   }
}