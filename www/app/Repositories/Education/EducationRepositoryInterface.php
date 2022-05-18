<?php

namespace Creativolab\App\Repositories\Education;

use Creativolab\App\Models\Education;
use Creativolab\App\Models\User;

interface EducationRepositoryInterface {

    public function create(Education $degree) : bool;

    public function get(Education $degree) : Education;

    public function findAll(User $user) : array;

    public function delete(Education $degree) : bool;
}