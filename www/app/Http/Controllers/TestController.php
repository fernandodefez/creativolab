<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Repositories\User\UserRepository;
use Creativolab\App\Auth;

class TestController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "index";
    }

    public function test()
    {
        echo "test";
    }
}
