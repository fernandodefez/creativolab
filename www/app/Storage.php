<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App;

class Storage {

    /**
     * Performs the creation of the user's folder within the storage folder.
     * 
     * @param string folder
     * @throws \Exception
     * @author Fernando Defez
     * @access static
     */
    public static function createFolder($folder): void
    {
        $path= $_SERVER['DOCUMENT_ROOT'] . "/storage/users/". $folder;

        if(!mkdir($path, 0777, true)) {
            throw new \Exception("User's folder couldn't be created");
        }
    }

}