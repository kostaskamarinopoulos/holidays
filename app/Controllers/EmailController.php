<?php

require_once '../app/Interfaces/Communication/Email.php';

class EmailController extends Controller 
{
    private Email $email;

    public function __construct() {
        $this->email = new Email();
    }

    public function index() {
        //According to the email type, we should send the correct user data, templates
        //Passing dummy data at the moment

        $recipient = new User();
        $recipient->email = 'mang@gmail.com'; //Should get it from the DB
        $recipient->name = 'Nick';

        if($_GET['emailType'] === 'response') {
            $template = $this->template("../app/views/emails/response.php", [
                "sub_date" => '10/10/2023',
                "status" => 'Approved',
            ]);
        }
        else {
            $template = $this->template("../app/views/emails/request.php", [
                "name" => $recipient->name,
                "request_start" => $request_start,
                "request_end" => $request_end,
            ]);
        }

        $this->email->send($recipient, '10/1/2023', '20/12/2024', 'holidays', $template);
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