<?php

namespace Creativolab\App\Models;

class User
{

    private int $id;
    private string $firstName;
    private string $middleName;
    private string $firstLastname;
    private string $secondLastname;
    private string $email;
    private string $password;
    private string $confirmedPassword;
    private int $age;
    private string $code;
    private string $phoneNumber;
    #private $address;
    #private $lang;
    private string $folder;
    private string $thumbnail;
    private string $logo;
    private string $subdomain;
    private string $endpoint;
    private string $qr;
    private string $verificationToken;
    private bool $isVerified;

    private bool $isEducationEnabled;
    private bool $areProductsEnabled;
    private bool $areExperiencesEnabled;
    private bool $areTestimonialsEnabled;
    private bool $areSkillsEnabled;

    private int $profession;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getFirstLastname(): string
    {
        return $this->firstLastname;
    }

    /**
     * @param string $firstLastname
     */
    public function setFirstLastname(string $firstLastname): void
    {
        $this->firstLastname = $firstLastname;
    }

    /**
     * @return string
     */
    public function getSecondLastname(): string
    {
        return $this->secondLastname;
    }

    /**
     * @param string $secondLastname
     */
    public function setSecondLastname(string $secondLastname): void
    {
        $this->secondLastname = $secondLastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getConfirmedPassword(): string
    {
        return $this->confirmedPassword;
    }

    /**
     * @param string $confirmedPassword
     */
    public function setConfirmedPassword(string $confirmedPassword): void
    {
        $this->confirmedPassword = $confirmedPassword;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getFolder(): string
    {
        return $this->folder;
    }

    /**
     * @param string $folder
     */
    public function setFolder(string $folder): void
    {
        $this->folder = $folder;
    }

    /**
     * @return string
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getSubdomain(): string
    {
        return $this->subdomain;
    }

    /**
     * @param string $subdomain
     */
    public function setSubdomain(string $subdomain): void
    {
        $this->subdomain = $subdomain;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint(string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getQr(): string
    {
        return $this->qr;
    }

    /**
     * @param string $qr
     */
    public function setQr(string $qr): void
    {
        $this->qr = $qr;
    }

    /**
     * @return string
     */
    public function getVerificationToken(): string
    {
        return $this->verificationToken;
    }

    /**
     * @param string $verificationToken
     */
    public function setVerificationToken(string $verificationToken): void
    {
        $this->verificationToken = $verificationToken;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    /**
     * @param bool $isVerified
     */
    public function setIsVerified(bool $isVerified): void
    {
        $this->isVerified = $isVerified;
    }

    /**
     * @return bool
     */
    public function isEducationEnabled(): bool
    {
        return $this->isEducationEnabled;
    }

    /**
     * @param bool $isEducationEnabled
     */
    public function setIsEducationEnabled(bool $isEducationEnabled): void
    {
        $this->isEducationEnabled = $isEducationEnabled;
    }

    /**
     * @return bool
     */
    public function areProductsEnabled(): bool
    {
        return $this->areProductsEnabled;
    }

    /**
     * @param bool $areProductsEnabled
     */
    public function setAreProductsEnabled(bool $areProductsEnabled): void
    {
        $this->areProductsEnabled = $areProductsEnabled;
    }

    /**
     * @return bool
     */
    public function areExperiencesEnabled(): bool
    {
        return $this->areExperiencesEnabled;
    }

    /**
     * @param bool $areExperiencesEnabled
     */
    public function setAreExperiencesEnabled(bool $areExperiencesEnabled): void
    {
        $this->areExperiencesEnabled = $areExperiencesEnabled;
    }

    /**
     * @return bool
     */
    public function areTestimonialsEnabled(): bool
    {
        return $this->areTestimonialsEnabled;
    }

    /**
     * @param bool $areTestimonialsEnabled
     */
    public function setAreTestimonialsEnabled(bool $areTestimonialsEnabled): void
    {
        $this->areTestimonialsEnabled = $areTestimonialsEnabled;
    }

    /**
     * @return bool
     */
    public function areSkillsEnabled(): bool
    {
        return $this->areSkillsEnabled;
    }

    /**
     * @param bool $areSkillsEnabled
     */
    public function setAreSkillsEnabled(bool $areSkillsEnabled): void
    {
        $this->areSkillsEnabled = $areSkillsEnabled;
    }

    /**
     * @return int
     */
    public function getProfession(): int
    {
        return $this->profession;
    }

    /**
     * @param int $profession
     */
    public function setProfession(int $profession): void
    {
        $this->profession = $profession;
    }
}