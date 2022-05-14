<?php

namespace Creativolab\App\Http\Controllers;

class TestController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('templates/executive/index');
    }

    public function test()
    {
        echo "test";
    }
}
