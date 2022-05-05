<?php

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Database;
use Creativolab\App\Models\User;

class UserRepository implements UserRepositoryInterface {

    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

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
            cellphone_number, 
            token,
            template
        )  VALUES (?,?,?,?,?,?,?,?,?)";

        $this->db->connect()->prepare($sql)->execute(
            [
                $user->getFirstName(),
                $user->getMiddleName(),
                $user->getFirstLastname(),
                $user->getSecondLastname(),
                $user->getEmail(),
                $user->getHashedPassword(),
                $user->getCellphoneNumber(),
                $user->getToken(),
                $user->getTemplate()
            ]
        );
        return true;
    }

    public function getUserByToken(string $token)
    {
        $sql = "
        SELECT * FROM users WHERE token = :token
        ";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['token' => $token]);
        $user = $stmt->fetchAll();
        foreach ($user as $row) {

        }
        return new User(
            $row['id'],
            $row['first_name'],
            $row['middle_name'],
            $row['first_lastname'],
            $row['second_lastname'],
            $row['email'],
            $row['password'],
            $row['cellphone_number'],
            $row['token'],
            $row['verified'],
            $row['template']
        );
    }

    public function getUserById(int $id)
    {
        $sql = "
        SELECT * FROM users WHERE id = :id
        ";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['id' => $id]);
        $user = $stmt->fetchAll();
        foreach ($user as $row) {

        }
        return new User(
            $row['id'],
            $row['first_name'],
            $row['middle_name'],
            $row['first_lastname'],
            $row['second_lastname'],
            $row['email'],
            $row['password'],
            $row['cellphone_number'],
            $row['token'],
            $row['verified'],
            $row['template']
        );
    }

    public function getUserByEmail(string $email) : User
    {
        $sql = "
        SELECT * FROM users WHERE email = :email
        ";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetchAll();
        foreach ($user as $row) {

        }
        return new User(
            $row['id'],
            $row['first_name'],
            $row['middle_name'],
            $row['first_lastname'],
            $row['second_lastname'],
            $row['email'],
            $row['password'],
            $row['cellphone_number'],
            $row['token'],
            $row['verified'],
            $row['template']
        );
    }

    public function verify(string $token) {
        $sql = "
        UPDATE users 
        SET verified = ? 
        WHERE token = ?
        ";
        $this->db->connect()->prepare($sql)->execute(
            [
                1,
                $token
            ]
        );
    }
}