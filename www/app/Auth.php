<?php

namespace Creativolab\App;

class Auth {

    /**
     * Performs the user's authentication
     * @return bool whether the user is logged in or not
    */
    public static function user() :bool
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        }
        return false;
    }
}
