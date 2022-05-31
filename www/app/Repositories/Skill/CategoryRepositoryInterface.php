<?php

namespace Creativolab\App\Repositories\Skill;

use Creativolab\App\Models\Skill\Category;
use Creativolab\App\Models\User;

interface CategoryRepositoryInterface
{
    /**
     * This method performs the users skill's category creation
     *
     * @param Category $category
     * @return bool
     */
    public function create(Category $category) : bool;

    /**
     * This method retrieves a user's skill's cagtegory information based on it's id
     *
     * @param Category $category
     * @return array
     */
    public function get(Category $category) : array;

    /**
     * Find all user's skill's categories
     *
     * @param User $user
     * @return array
     */
    public function findAll(User $user) : array;

    /**
     * Updates a specified user's skills' category
     * and return true or false whether it was updated
     *
     * param Category $category
     * return bool
     */
    #public function update(Category $category) : bool;

    /**
     * Deletes a specified user's skills' category
     * and return true or false whether it was deleted
     *
     * @param Category $category
     * @return bool
     */
    public function delete(Category $category) : bool;

}