<?php

namespace App\Controllers;

use App\Models\Dbmodels;
use App\Models\PlaceModel;

use CodeIgniter\Debug\Toolbar\Collectors\BaseCollector;
use CodeIgniter\Email\Email;
use Config\Services;

$session = Services::session();

class Home extends BaseController
{
    protected $datas;
    protected $session;
    public function __construct()
    {
        $this->session = Services::session();
        $this->datas = new Dbmodels();
    }
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
    public function place_con()
    {
        // $data['places'] = $this->request->getPost('places', []);

        // $placeModel = new PlaceModel();
        // $data['results'] = $placeModel->getPlaces($data['places']);

        return view('places_view'); //, $data
    }

    public function logout()
    {
        $session = Services::session();
        $session->destroy();
        return view('home');
    }
    public function sendEmail()
    {
        $email_id = session('email_id');
        $otp = mt_rand(100000, 999999);
        $res = $this->datas->insert_otp($otp);
        // $u_id = session('u_id');

        $email = Services::email();

        $email->setFrom('flatmates09@gmail.com', 'Flatmates');
        $email->setTo($email_id);
        // $email->setTo('nitheshwaran003@gmail.com');
        // $email->setTo('nitheshwaran003@gmail.com');
        // $email->setCC('another@another-example.com');
        // $email->setBCC('them@their-example.com');

        $email->setSubject('OTP Verification');
        $email->setMessage('Your OTP: ' . $otp . ' from flatmates ');

        if ($email->send()) {
            echo 'OTP email sent successfully.';
            $session = Services::session();
            $session->destroy();
        } else {
            echo 'Error sending OTP email: ' . $email->printDebugger();
            $session = Services::session();
            $session->destroy();
        }
        return view('otp_verification');
    }
    public function verifyOTP()
    {
        $enteredOTP = $this->request->getVar('entered_otp');
        // $storedOTP = $this->session->userdata('otp');
        $storedOTP = 510;

        if ($enteredOTP == $storedOTP) {
            // OTP is correct, proceed with further actions
            echo 'OTP verification successful.';
        } else {
            // OTP is incorrect
            echo 'OTP verification failed.';
        }
    }
}
