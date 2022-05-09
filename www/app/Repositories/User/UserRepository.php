<?php

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
     * Performs user insertion
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
            qr,
            verification_token,
            profession_id_fk        
        )  VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

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
                $user->getQr(),
                $user->getVerificationToken(),
                $user->getProfession()->getId()
            ]
        );
        return true;
    }

    /**
     * Retrieves a user by their id
     * @param int $id
     * @return User $user;
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
            $user->setQr($row['qr'] ? $row['qr'] : '');
            $user->setVerificationToken($row['verification_token']);
            $user->setIsVerified($row['verified']);
            $user->setIsAcademicCurriculumEnabled($row['academic_curriculum_enabled']);
            $user->setIsTestimonialsEnabled($row['testimonials_enabled']);
            $user->setIsSkillsEnabled($row['skills_enabled']);
            $user->setProfession(new Profession($row['profession_id_fk']));
        } else {
            $user->setId(-1);
        }
        return $user;
    }

    /**
     * Retrieves a user by their email
     * @param string $email
     * @return User $user
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
     * @param string $token
     * @return User $user
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
}