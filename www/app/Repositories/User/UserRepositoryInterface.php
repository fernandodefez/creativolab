<?php

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Models\User;

interface UserRepositoryInterface
{
    function create(User $user):bool;
    function getUserByToken(string $token);
}