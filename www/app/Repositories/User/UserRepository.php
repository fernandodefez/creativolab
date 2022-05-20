<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Database;
use Creativolab\App\Models\Profession;
use Creativolab\App\Models\User;

class UserRepository implements UserRepositoryInterface {

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * This method performs user creation
     * 
     * @param User $user
     * @return bool
    */
    public function create(User $user): bool
    {
        $sql = "
        INSERT INTO users (
            first_name,
            middle_name,
            first_lastname,
            second_lastname, 
            email,
            password,
            code,
            phone_number,
            folder,
            subdomain,
            endpoint,
            qr,
            verification_token,
            profession_id_fk        
        )  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $this->db->connect()->prepare($sql)->execute(
            [
                $user->getFirstName(),
                $user->getMiddleName(),
                $user->getFirstLastname(),
                $user->getSecondLastname(),
                $user->getEmail(),
                $user->getPassword(),
                $user->getCode(),
                $user->getPhoneNumber(),
                $user->getFolder(),
                $user->getSubdomain(),
                $user->getEndpoint(),
                $user->getQr(),
                $user->getVerificationToken(),
                $user->getProfession()
            ]
        );
        return true;
    }

    /**
     * This method retrieves a user by their id
     * 
     * @param int $id
     * @return User
    */
    public function getUserById(int $id): User
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'id' => $id
            ]
        );
        $row = $stmt->fetch();
        $user = new User();

        if ($stmt->rowCount() === 1) {
            $user->setId($row['id']);
            $user->setFirstName($row['first_name']);
            $user->setMiddleName($row['middle_name']);
            $user->setMiddleName($row['middle_name']);
            $user->setFirstLastname($row['first_lastname']);
            $user->setSecondLastname($row['second_lastname']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setCode($row['code']);
            $user->setPhoneNumber($row['phone_number']);
            $user->setFolder($row['folder']);
            $user->setThumbnail($row['thumbnail'] ? $row['thumbnail'] : '');
            $user->setLogo($row['logo'] ? $row['logo'] : '');
            $user->setSubdomain($row['subdomain'] ? $row['subdomain'] : '');
            $user->setEndpoint($row['endpoint'] ? $row['endpoint'] : '');
            $user->setQr($row['qr'] ? $row['qr'] : '');
            $user->setVerificationToken($row['verification_token']);
            $user->setIsVerified($row['verified']);
            $user->setIsEducationEnabled($row['education_enabled']);
            $user->setAreProductsEnabled($row['products_enabled']);
            $user->setAreExperiencesEnabled($row['experiences_enabled']);
            $user->setAreTestimonialsEnabled($row['testimonials_enabled']);
            $user->setAreSkillsEnabled($row['skills_enabled']);
            $user->setProfession($row['profession_id_fk']);
        } else {
            $user->setId(-1);
        }
        return $user;
    }

    /**
     * This method retrieves a user by their endpoint column
     * 
     * @param string $endpoint
     * @return User
    */
    public function getUserByEndpoint(string $endpoint): User 
    {
        $sql = "SELECT * FROM users WHERE endpoint = :endpoint";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(
            [
                'endpoint' => $endpoint
            ]
        );
        $row = $stmt->fetch();
        $user = new User();

        if ($stmt->rowCount() === 1) {
            $user->setId($row['id']);
            $user->setFirstName($row['first_name']);
            $user->setMiddleName($row['middle_name']);
            $user->setMiddleName($row['middle_name']);
            $user->setFirstLastname($row['first_lastname']);
            $user->setSecondLastname($row['second_lastname']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setCode($row['code']);
            $user->setPhoneNumber($row['phone_number']);
            $user->setFolder($row['folder']);
            $user->setThumbnail($row['thumbnail'] ? $row['thumbnail'] : '');
            $user->setLogo($row['logo'] ? $row['logo'] : '');
            $user->setSubdomain($row['subdomain'] ? $row['subdomain'] : '');
            $user->setEndpoint($row['endpoint'] ? $row['endpoint'] : '');
            $user->setQr($row['qr'] ? $row['qr'] : '');
            $user->setVerificationToken($row['verification_token']);
            $user->setIsVerified($row['verified']);
            $user->setIsEducationEnabled($row['education_enabled']);
            $user->setAreProductsEnabled($row['products_enabled']);
            $user->setAreExperiencesEnabled($row['experiences_enabled']);
            $user->setAreTestimonialsEnabled($row['testimonials_enabled']);
            $user->setAreSkillsEnabled($row['skills_enabled']);
            $user->setProfession($row['profession_id_fk']);
        } else {
            $user->setId(-1);
        }
        return $user;
    }

    /**
     * This method retrieves a user by their email
     * 
     * @param string $email
     * @return User
    */
    public function getUserByEmail(string $email): User
    {
        $sql = "SELECT id, email, password, verified FROM users WHERE email = :email";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();
        $user = new User();
        if ($stmt->rowCount() == 1) {
            $user->setId($row['id']);
            $user->setEmail($row['email']);
            $user->setPassword($row['password']);
            $user->setIsVerified($row['verified']);
        } else {
            $user->setId(-1);
        }
        return $user;
    }

    /**
     * Retrieves a user by their verification_token
     * 
     * @param string $token
     * @return User
    */
    public function getUserByVerificationToken(string $token): User
    {
        $sql = "SELECT id, email, verified FROM users WHERE verification_token = :token";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['token' => $token]);
        $row = $stmt->fetch();
        $user = new User();
        if ($stmt->rowCount() == 1) {
            $user->setId($row['id']);
            $user->setEmail($row['email']);
            $user->setIsVerified($row['verified']);
        } else {
            $user->setId(-1);
        }
        return $user;
    }

    /**
     * Performs the user verification by updating the column "verified in users table"
     * 
     * @param string $token
     * @return bool
    */
    public function verifyUser(string $token): bool
    {
        $sql = "UPDATE users SET verified = :verified WHERE verification_token = :token";
        $this->db->connect()->prepare($sql)->execute(
            [
                "verified" => 1,
                "token" => $token
            ]
        );
        return true;
    }

    /**
     * This method make sure to toggle the user's experience module
     * 
     * @param User $user
     * @return bool
    */
    public function toggleExperiencesEnabled(User $user): bool 
    {
        $sql = "UPDATE users SET experiences_enabled = :experiences_enabled WHERE id = :id";
        $this->db->connect()->prepare($sql)->execute(
            [
                "experiences_enabled" => $user->areExperiencesEnabled(),
                "id" => $user->getId()
            ]
        );
        return true;
    }

    /**
     * This method make sure to toggle the user's education module
     *
     * @param User $user
     * @return bool
    */
    public function toggleEducationEnabled(User $user): bool
    {
        $sql = "UPDATE users SET education_enabled = :education_enabled WHERE id = :id";
        $this->db->connect()->prepare($sql)->execute(
            [
                "education_enabled" => $user->isEducationEnabled(),
                "id" => $user->getId()
            ]
        );
        return true;
    }
}