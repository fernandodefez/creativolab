<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\Education;

use Creativolab\App\Models\Education;
use Creativolab\App\Models\User;

interface EducationRepositoryInterface {

    /**
     * This method performs the user's degree creation
     *
     * @param Education $degree
     * @return bool
     */
    public function create(Education $degree) : bool;

    /**
     * This method retrieves a user's degree information based on it's id
     *
     * @param Education $degree
     * @return array
     */
    public function get(Education $degree) : array;

    /**
     * Find all user's degrees
     *
     * @param User $user
     * @return array
     */
    public function findAll(User $user) : array;

    /**
     * Updates a specified user's experience
     * and return true or false whether it was updated
     *
     * @param Education $degree
     * @return bool
     */
    public function update(Education $degree) : bool;

    /**
     * Deletes a specified user's experience
     * and return true or false whether it was deleted
     *
     * @param Education $degree
     * @return bool
     */
    public function delete(Education $degree) : bool;
}