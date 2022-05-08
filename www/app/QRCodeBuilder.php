<?php

namespace Creativolab\App;

use chillerlan\QRCode\QRCode;

class QRCodeBuilder {

    /**
     * Build a QRCode Image within a user's folder
     * @param string $link user's public profile.
     * @param string|null $folder user's folder.
     * @param string $filename qrcode image name, it is called "qr" by default
     */
    public static function build(string $link, string $folder = null, string $filename = "qr.png"): void
    {
        #$link = $_ENV['APP_URL'];
        $file = $_SERVER['DOCUMENT_ROOT'] . "/storage/users/" . $folder . "/" . $filename;

        $qrCode = new QRCode();
        $qrCode->render($link, $file);
    }
}