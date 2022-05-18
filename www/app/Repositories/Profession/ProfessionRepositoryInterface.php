<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Repositories\Profession;

use Creativolab\App\Models\Profession;
use Creativolab\App\Models\User;

interface ProfessionRepositoryInterface {

    /**
     * This method gets the user's profession
     * 
     * @param User $user
     * @return Profession $profession
     * 
    */
    public function getProfessionByUser(User $user) : Profession;

    /**
     * Find all available professions
     * 
     * @return array
    */
    public function findAll() : array;
}