<?php

namespace Creativolab\App\Repositories\User;

use Creativolab\App\Models\User;

interface UserRepositoryInterface
{
    public function get(int $id): User;
    public function create(array $attributes): User;
    public function update(int $id, array $attributes): User;
    public function delete(int $id);
}