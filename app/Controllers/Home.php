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
    public function exploremore()
    {

        return view('exploremore');
    }
    public function tenant_register()
    {
        return view('tenant_register');
    }
    public function owner_register()
    {
        return view('owner_register');
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function terms_conditions()
    {
        return view('terms_conditions');
    }
    public function profile()
    {
        return view('profile');
    }
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
    public function owner_dashbord()
    {
        return view('owner_dashbord');
    }
    public function forgot()
    {
        return view('forgot');
    }
    public function tenat_dashboard()
    {
        return view('tenat_dashboard');
    }
    public function forgot_otp()
    {
        return view('forgot_otp');
    }
    public function confirmpassord_forgot()
    {
        return view('confirmpassord_forgot');
    }
    public function about()
    {
        return view('about');
    }
    // public function otp_verification_owner()
    // {
    //     return view('otp_verification_owner');
    // }
    // public function otp_verification_tenant()
    // {
    //     return view('otp_verification_tenant');
    // }
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
    public function sendEmail_owner()
    {
        $session = Services::session();
        $email_id = session('email_id');
        $otp = mt_rand(100000, 999999);
        $this->session->set('storedOTP', $otp);

        // $res = $this->datas->insert_otp($otp);
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
        } else {
            echo 'Error sending OTP email: ' . $email->printDebugger();
            $session = Services::session();
            $session->destroy();
        }
        return view('otp_verification_owner');
    }
    public function verifyOTP_owner()
    {
        $enteredOTP = $this->request->getVar('entered_otp');
        // $enteredOTP = 1123;
        $storedOTP = session('storedOTP');
        // echo $enteredOTP." entered \n";
        // echo $storedOTP;
        if ($enteredOTP == $storedOTP) {
            // OTP is correct, proceed with further actions
            echo 'OTP verification successful.';
            $session = Services::session();
            $session->destroy();
            return view('owner_dashbord');
        } else {
            // OTP is incorrect
            echo 'OTP verification failed.';
            return view('otp_verification_owner');
        }
    }
    public function sendEmail_tenant()
    {
        $session = Services::session();
        $email_id = session('email_id');
        $otp = mt_rand(100000, 999999);
        $this->session->set('storedOTP', $otp);

        // $res = $this->datas->insert_otp($otp);
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
        } else {
            echo 'Error sending OTP email: ' . $email->printDebugger();
            $session = Services::session();
            $session->destroy();
        }
        return view('otp_verification_tenant');
    }
    public function verifyOTP_tenant()
    {
        $enteredOTP = $this->request->getVar('entered_otp');
        // $enteredOTP = 1123;

        $storedOTP = session('storedOTP');
        // echo $enteredOTP." entered \n";
        // echo $storedOTP;
        if ($storedOTP == $enteredOTP) {
            // OTP is correct, proceed with further actions
            echo 'OTP verification successful.';
            $session = Services::session();
            $session->destroy();
            return view('tenat_dashboard');
        } else {
            // OTP is incorrect
            echo 'OTP verification failed.';
            return view('otp_verification_tenant');
        }
    }
    // public function get_in_touch(){
    //     $email = Services::email();
    //     // $sender_mail = $this->request->getVar('entered_otp');
    //     $email->setFrom('nitheshwaran003@gmail.com', 'Flatmates');
    //     $email->setTo('flatmates09@gmail.com');
    //     $email->setSubject('OTP Verification');
    //     $email->setMessage('Your OTP: from flatmates ');
    //     if ($email->send()){
    //         echo 'OTP email sent successfully.';
    //     }
    //     else {
    //         echo 'Error sending OTP email: ' . $email->printDebugger();
    //     }

    // }
}
