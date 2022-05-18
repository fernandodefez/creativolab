<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Models\User;

interface UserRepositoryInterface
{
    /**
     * This method performs user creation
     * 
     * @param User $user
     * @return bool
    */
    public function create(User $user): bool;

    /**
     * This method retrieves a user by their id
     * 
     * @param int $id
     * @return User
    */
    public function getUserById(int $id): User;

    /**
     * This method retrieves a user by their endpoint column
     * 
     * @param string $endpoint
     * @return User
     */
    public function getUserByEndpoint(string $endpoint): User;

    /**
     * This method retrieves a user by their email
     * 
     * @param string $email
     * @return User
    */
    public function getUserByEmail(string $email): User;

    /**
     * Retrieves a user by their verification_token
     * 
     * @param string $token
     * @return User
     */
    public function getUserByVerificationToken(string $token): User;

    /**
     * Performs the user verification by updating the column "verified in users table"
     * 
     * @param string $token
     * @return bool
    */
    public function verifyUser(string $token): bool;

    /**
     * This method make sure to toggle the user's experience module
     * 
     * @param User $user
     * @return bool
     */
    public function toggleExperiencesEnabled(User $user): bool;
}