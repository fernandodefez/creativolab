<?php

namespace Creativolab\App\Repositories\Education;

use Creativolab\App\Models\Education;
use Creativolab\App\Models\User;

interface EducationRepositoryInterface {

    public function create(Education $education) : bool;

    public function findAll(User $user) : array;

    public function delete(Education $education) : bool;

    /*
    public function findAllByUser(User $user) : Education;

    public function removeById() : bool;
    */
}