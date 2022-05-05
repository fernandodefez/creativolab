<?php

namespace Creativolab\App;

class Auth {

    public static function user() :bool
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        }
        return false;
    }
}
