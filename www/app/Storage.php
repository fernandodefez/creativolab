<?php

namespace Creativolab\App;

class Storage {


    /**
     * Performs the creation of the user's folder within storage folder.
     *
     * @param string folder
     *
    */
    public static function createFolder($folder): void
    {
        $path= $_SERVER['DOCUMENT_ROOT'] . "/storage/users/". $folder;

        if(!mkdir($path, 0777, true)) {
            echo 'Fallo al crear las carpetas...';
        }
    }

}