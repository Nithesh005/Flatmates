<?php

namespace App\Controllers;
use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;
use CodeIgniter\Email\Email;
use Config\Services;
$session = Services::session();

class Home extends BaseController
{
    public function index()
    {
        // return view('tenat_dashboard');
        // return view('owner_dashbord');
        return view('home');
    }
    public function login()
    {
        
        return view('login');
    }
    public function tenant_register()
    {
        return view('tenant_register');
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function terms_conditions()
    {
        return view('terms_conditions');
    }
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    public function owner_dashbord()
    {
        return view('owner_dashbord');
    }
    public function tenat_dashboard()
    {
        return view('tenat_dashboard');
    }
    public function otp_verification()
    {
        return view('otp_verification');
    }
    public function tenant_filter()
    {
        return view('tenant_filter');
    }
    
    public function logout()
    {
        $session = Services::session();
        $session->destroy();
        return view('home');
    }
    public function sendEmail()
    {
        
        $otp = mt_rand(100000, 999999);
        $u_id = session('u_id');
        
        $email = Services::email();

        $email->setFrom('flatmates09@gmail.com', 'Flatmates');
        // $email->setTo('mazzmathan2001@gmail.com');
        $email->setTo('nitheshwaran003@gmail.com');
        // $email->setCC('another@another-example.com');
        // $email->setBCC('them@their-example.com');

        $email->setSubject('OTP Verification');
        $email->setMessage('Your OTP: ' . $otp.' from flatmates '.$u_id .' is your userID');

        if ($email->send()) {
            echo 'OTP email sent successfully.';
        } else {
            echo 'Error sending OTP email: ' . $email->printDebugger();
        }
        return view('otp_verification');
    }
}
