<?php

namespace Creativolab\App\Repositories\Code;

interface CodeRepositoryInterface {

    /**
     * Find all available codes
     * @return array
     */
    public function findAll() : array;
}
