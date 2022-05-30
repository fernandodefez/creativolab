<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App;

use chillerlan\QRCode\QRCode;

class QRCodeImage {

    /**
     * Build a QRCode image within the user's folder
     * 
     * @param string $link user's public profile.
     * @param string $folder user's folder.
     * @param string $filename qrcode image name, it is called "qr" by default
     */
    public static function make(string $link, string $folder, string $filename): void
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . "/storage/users/" . $folder . "/" . $filename;

        $qrCode = new QRCode();
        $qrCode->render($link, $file);
    }
}