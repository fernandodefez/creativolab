<?php

namespace Creativolab\App\Models;

class User {

    private $id;
    private $firstName;
    private $middleName;
    private $firstLastname;
    private $secondLastname;
    private $email;
    private $hashedPassword;
    #private $telephoneNumber;
    private $cellphoneNumber;
    #private $age;
    #private $address;
    #private $lang;
    #private $thumbnail;
    #private $logo;
    #private $qr;
    private $token;
    private $isVerified;
    private $template;

    /**
     * @param $id
     * @param $firstName
     * @param $middleName
     * @param $firstLastname
     * @param $secondLastname
     * @param $email
     * @param $hashedPassword
     * @param $cellphoneNumber
     * @param $token
     * @param $isVerified
     * @param $template
     */
    public function __construct($id = -1, $firstName, $middleName, $firstLastname, $secondLastname, $email, $hashedPassword, $cellphoneNumber, $token, $isVerified, $template)
    {
        $this->id                   =       $id;
        $this->firstName            =       $firstName;
        $this->middleName           =       $middleName;
        $this->firstLastname        =       $firstLastname;
        $this->secondLastname       =       $secondLastname;
        $this->email                =       $email;
        $this->hashedPassword       =       $hashedPassword;
        $this->cellphoneNumber      =       $cellphoneNumber;
        $this->token                =       $token;
        $this->isVerified           =       $isVerified;
        $this->template             =       $template;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getFirstLastname()
    {
        return $this->firstLastname;
    }

    /**
     * @param mixed $firstLastname
     */
    public function setFirstLastname($firstLastname): void
    {
        $this->firstLastname = $firstLastname;
    }

    /**
     * @return mixed
     */
    public function getSecondLastname()
    {
        return $this->secondLastname;
    }

    /**
     * @param mixed $secondLastname
     */
    public function setSecondLastname($secondLastname): void
    {
        $this->secondLastname = $secondLastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    /**
     * @param mixed $hashedPassword
     */
    public function setHashedPassword($hashedPassword): void
    {
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @return mixed
     */
    public function getCellphoneNumber()
    {
        return $this->cellphoneNumber;
    }

    /**
     * @param mixed $cellphoneNumber
     */
    public function setCellphoneNumber($cellphoneNumber): void
    {
        $this->cellphoneNumber = $cellphoneNumber;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function isVerified()
    {
        return $this->isVerified;
    }

    /**
     * @param mixed $isVerified
     */
    public function setIsVerified($isVerified): void
    {
        $this->isVerified = $isVerified;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template): void
    {
        $this->template = $template;
    }

}