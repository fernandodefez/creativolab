<?php

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Models\User;
use Ramsey\Uuid\Type\Integer;

interface UserRepositoryInterface
{
    /**
     * Performs user insertion
     * @param User $user
     * @return bool
    */
    public function create(User $user): bool;

    /**
     * Retrieves a user by their id
     * @param int $id
     * @return User
    */
    public function getUserById(int $id):User;

    /**
     * Retrieves a user by their email
     * @param string $email
     * @return User
    */
    public function getUserByEmail(string $email): User;

    /**
     * Retrieves a user by their verification_token
     * @param string $token
     * @return User
     */
    public function getUserByVerificationToken(string $token): User;

    /**
     * Performs the user verification by updating the column "verified in users table"
     * @param string $token
     * @return bool
    */
    public function verifyUser(string $token): bool;
}