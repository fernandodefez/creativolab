<?php

namespace Creativolab\App;

class Storage {


    /**
     * Performs the storage within the storage root folder
     *
     * @param string folder
     *
    */
    public static function store($folder)
    {
        $path= $_SERVER['DOCUMENT_ROOT'] . "/storage/users/". $folder;

        if(!mkdir($path, 0777, true)) {
            echo 'Fallo al crear las carpetas...';
        }
    }

}