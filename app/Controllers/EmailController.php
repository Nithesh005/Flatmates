<?php

use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;
use CodeIgniter\Email\Email;

class EmailController extends BaseCollector
{
    public function sendEmail()
    {
        
        // $email = new Email();

        // $email->setTo('mazzmathan2001@gmail.com');
        // $email->setFrom('flatmates09@gmail.com');
        // $email->setSubject('Email Subject');
        // $email->setMessage('hello bro');

        // if ($email->send()) {
        //     echo 'Email sent successfully.';
        // } else {
        //     echo $email->printDebugger(['headers']);
        // }
        return view('login');
    }
}
