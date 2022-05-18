<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App;

class Auth {

    /**
     * This method performs the user's authentication
     * 
     * @return bool whether the user is logged in or not
     */
    public static function user() :bool
    {
        return isset($_SESSION['user_id']);
    }
}
