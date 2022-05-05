<?php

namespace Creativolab\App\Notifications;

use Creativolab\App\Mail;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class UserVerification implements Mail {

    private array $attributes;
    private string $template;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        $this->template =
            "  
                Verifica tu cuenta creada
                <td> 
                    <a href='".$_ENV['APP_URL']."/verify-email/". $this->attributes['token'] . "' target='_blank'>
                        Verificar cuenta
                    </a> 
                </td>
            ";
    }

    /**
     * @throws Exception
     */
    public function send()
    {
        try {
            $phpmailer = new PHPMailer(true);
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = 'e4a69653d8fe20';
            $phpmailer->Password = '2fbc4a64e5efc6';

            //Recipients
            $phpmailer->setFrom('creativol@b.com', 'Creativolab');
            $phpmailer->addAddress($this->attributes['email'], $this->attributes['name'] . $this->attributes['lastname']);     //Add a recipient
            $phpmailer->addReplyTo('info@example.com', 'Information');
            $phpmailer->addCC('cc@example.com');
            $phpmailer->addBCC('bcc@example.com');

            //Content
            $phpmailer->isHTML();                               //Set email format to HTML
            $phpmailer->Subject = 'Verificar correo electrónico';
            $phpmailer->Body = $this->template;
            $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $phpmailer->send();
        } catch (Exception $exception) {
            throw new Exception("Your email could not be sent");
        }
    }
}
