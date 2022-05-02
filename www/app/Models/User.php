<?php

namespace Creativolab\App\Models;

class User
{

    private $id;
    private $firstName;
    private $middleName;
    private $firstLastname;
    private $secondLastname;
    private $email;
    private $password;
    private $repeatedPassword;
    private $telephone;
    private $cellphone;
    private $isActive;
    private $isVerified;

    public function __construct()
    {

    }
}