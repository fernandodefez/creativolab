<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\Experience;

use Creativolab\App\Models\Experience;
use Creativolab\App\Models\User;

interface ExperienceRepositoryInterface {

    /**
     * This method performs the users experiences creation
     * 
     * @param Experience $experience
     * @return bool
     */
    public function create(Experience $experience) : bool;

    /**
     * This method retrieves a user's experience information based on it's id
     * 
     * @param Experience $experience
     * @return array
     */
    public function get(Experience $experience) : array;

    /**
     * Find all user's experiences
     * 
     * @param User $user
     * @return array
     */
    public function findAll(User $user) : array;

    /**
     * Updates a specified user's experience
     * and return true or false whether it was updated
     * 
     * @param Experience $experience
     * @return bool
     */
    public function update(Experience $experience) : bool;

    /**
     * Deletes a specified user's experience
     * and return true or false whether it was deleted
     * 
     * @param Experience $experience
     * @return bool
     */
    public function delete(Experience $experience) : bool;

}