<?php

require_once 'CommunicationInterface.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email implements CommunicationInterface
{
    private PHPMailer $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
    }

    public function send(User $recipient, string $request_start, string $request_end, $html): void
    {
        try {            
            //Server settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = 'user@example.com';                     //SMTP username
            $this->mail->Password   = 'secret';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $this->mail->setFrom('from@example.com', 'Mailer');
            $this->mail->addAddress($recipient->email);     //Add a recipient
        
            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body    = $html;
        
            $this->mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
        
        header('Location: http://localhost/holidays/public/holiday');
    }

    function template ($file, $vars=null) {
        ob_start();
        if ($vars!==null) { extract($vars); }
        include $file;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
      }
}
