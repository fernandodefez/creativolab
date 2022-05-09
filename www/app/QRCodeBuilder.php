<?php

namespace Creativolab\App;

use chillerlan\QRCode\QRCode;

class QRCodeBuilder {

    /**
     * Build a QRCode Image within a user's folder
     * @param string $link user's public profile.
     * @param string $folder user's folder.
     * @param string $filename qrcode image name, it is called "qr" by default
     */
    public static function build(string $link, string $folder, string $filename): void
    {
        #$link = $_ENV['APP_URL'];
        $file = $_SERVER['DOCUMENT_ROOT'] . "/storage/users/" . $folder . "/" . $filename . ".png";

        $qrCode = new QRCode();
        $qrCode->render($link, $file);
    }
}