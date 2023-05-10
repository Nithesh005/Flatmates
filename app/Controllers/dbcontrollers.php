<?php

namespace App\Controllers;

use App\Models\Dbmodels;
use CodeIgniter\CLI\Console;

class dbcontrollers extends BaseController
{
    protected $datas;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->datas = new Dbmodels();
    }
    public function ownerlogin()
    {
        $validate_owner['owner_mail'] = $this->request->getvar('owner_mail');
        $validate_owner['owner_pasword'] = $this->request->getvar('owner_pasword');
        $res = $this->datas->validate_ownerlogin_model($validate_owner);
        // $res ="kkk";
        echo json_encode($res);
    }
    public function tenantlogin()
    {
        $validate_tenant['tenant_mail'] = $this->request->getvar('tenant_mail');
        $validate_tenant['tenant_password'] = $this->request->getvar('tenant_password');
        $res = $this->datas->validate_tenantlogin_model($validate_tenant);
        echo json_encode($res);
    }
    public function reg_user_data()
    {
        helper(['filesystem']);
        // data
        $sname = $this->request->getvar('sname');
        $email_id = $this->request->getvar('email_id');
        $mobile = $this->request->getvar('mobile');
        $password_id = $this->request->getvar('password_id');
        $occupation_id = $this->request->getvar('occupation_id');
        $address_id = $this->request->getvar('address_id');
        $city_id = $this->request->getvar('city_id');
        $state_id = $this->request->getvar('state_id');

        $aadhar_id = $this->request->getvar('aadhar_id');
        $family_type = $this->request->getvar('family_type');

        // files
        $profile_image = $this->request->getFile('profile_file');
        $smart_card = $this->request->getFile('smart_card');
        
        $aadhar_card = $this->request->getFile('aadhar_card');

        
        // $reg_data['sname'] = $this->request->getvar('sname');
        if (($profile_image->getSize() > 0)) {
            $unique_id = $this->unique_id();
            $directory = "./public/uploads/" . $unique_id;
            if (!is_dir($directory)) {
                mkdir($directory, 0777, TRUE);
            }

            if ($profile_image->isValid()) {
                $profile_image->move($directory);
                if ($smart_card->isValid()) {
                    $smart_card->move($directory);
                    if ($aadhar_card->isValid()) {
                        $aadhar_card->move($directory);
                    }
                }
            }



            $profile_image_name = $profile_image->getName();
            $smart_card_name = $smart_card->getName();
            $aadhar_card_name = $aadhar_card->getName();

            $u_id = $this->unique_id();

            $tmp['u_id'] = $u_id;
            $tmp['sname'] = $sname;
            $tmp['email_id'] = $email_id;
            $this->session->set('email_id', $tmp['email_id']);
            $tmp['mobile'] = $mobile;
            $tmp['password_id'] = $password_id;
            $tmp['occupation_id'] = $occupation_id;
            $tmp['address_id'] = $address_id;
            $tmp['city_id'] = $city_id;
            $tmp['state_id'] = $state_id;
            $tmp['profile_image_name'] = $profile_image_name;
            $tmp['smart_card_name'] = $smart_card_name;
            $tmp['aadhar_card_name'] = $aadhar_card_name;
            $tmp['aadhar_id'] = $aadhar_id;
            $tmp['family_type'] = $family_type;
            //     }
            // }
        }
        $res = $this->datas->reg_user_data_model($tmp);
        if ($res == true) {
            return view('otp_verification_tenant');
        }
        // redirect('Home/sendEmail/'.$email_id);
    }
    public function reg_user_data_owner()
    {
        helper(['filesystem']);
        // data
        $sname = $this->request->getvar('sname');
        $email_id = $this->request->getvar('email_id');
        $mobile = $this->request->getvar('mobile');
        $password_id = $this->request->getvar('password_id');
        $occupation_id = $this->request->getvar('occupation_id');
        $address_id = $this->request->getvar('address_id');
        $city_id = $this->request->getvar('city_id');
        $state_id = $this->request->getvar('state_id');

        $aadhar_id = $this->request->getvar('aadhar_id');
        

        // files
        $profile_image = $this->request->getFile('profile_file');
        $smart_card = $this->request->getFile('resume_file');
        
        $aadhar_card = $this->request->getFile('bonafide_check_file');

        
        if (($profile_image->getSize() > 0)) {
            $unique_id = $this->unique_id();
            $directory = "./public/uploads/" . $unique_id;
            if (!is_dir($directory)) {
                mkdir($directory, 0777, TRUE);
            }

            if ($profile_image->isValid()) {
                $profile_image->move($directory);
                if ($smart_card->isValid()) {
                    $smart_card->move($directory);
                    if ($aadhar_card->isValid()) {
                        $aadhar_card->move($directory);
                    }
                }
            }



            $profile_image_name = $profile_image->getName();
            $smart_card_name = $smart_card->getName();
            $aadhar_card_name = $aadhar_card->getName();

            $u_id = $this->unique_id_owner();

            $tmp['u_id'] = $u_id;
            $tmp['sname'] = $sname;
            $tmp['email_id'] = $email_id;
            $this->session->set('email_id', $tmp['email_id']);
            $tmp['mobile'] = $mobile;
            $tmp['password_id'] = $password_id;
            $tmp['occupation_id'] = $occupation_id;
            $tmp['address_id'] = $address_id;
            $tmp['city_id'] = $city_id;
            $tmp['state_id'] = $state_id;
            $tmp['profile_image_name'] = $profile_image_name;
            $tmp['smart_card_name'] = $smart_card_name;
            $tmp['aadhar_card_name'] = $aadhar_card_name;
            $tmp['aadhar_id'] = $aadhar_id;
            //     }
            // }
        }
        $res = $this->datas->reg_user_data_owner_model($tmp);
        if ($res == true) {
            return view('otp_verification_owner');
        }
        // redirect('Home/sendEmail/'.$email_id);
    }


    public function unique_id()
    {
        // $data = new Intern_Model();
        $ex_id = $this->datas->get_unique_id();
        $ex_id = 'FMTN_' . $ex_id;
        return $ex_id;
    }
    public function unique_id_owner()
    {
        // $data = new Intern_Model();
        $ex_id = $this->datas->get_unique_id_owner();
        $ex_id = 'FMOW_' . $ex_id;
        return $ex_id;
    }
    
    

    public function owner_card()
    {
        $res = $this->datas->owner_card_model();

        echo json_encode($res);
    }
    public function  tenant_card_controller()
    {
        $res = $this->datas->tenant_card_model();

        echo json_encode($res);
    }

   



    public function demo_reg()
    {
        helper(['filesystem']);
        $u_id = session('u_id');
        $house_no = $this->request->getvar('house_no');
        $inputAddress = $this->request->getvar('inputAddress');
        $inputAddress2 = $this->request->getvar('inputAddress2');
        $Description = $this->request->getvar('Description');
        $Members_allowed = $this->request->getvar('Members_allowed');
        $Rent_amount = $this->request->getvar('Rent_amount');
        $inputCity = $this->request->getvar('inputCity');
        $inputstate = $this->request->getvar('inputstate');
        $inputZip = $this->request->getvar('inputZip');
        $bhk = $this->request->getvar('bhk');
        $my_file = $this->request->getFile('my_file');

        if (($my_file->getSize() > 0)) {
            // $unique_id = $this->unique_id();
            $directory = "./public/uploads/" . $u_id;
            if (!is_dir($directory)) {
                mkdir($directory, 0777, TRUE);
            }

            $my_file_name = $my_file->getName();

            $tmp['u_id'] = $u_id;
            $tmp['house_no'] = $house_no;
            $tmp['inputAddress'] = $inputAddress;
            $tmp['inputAddress2'] = $inputAddress2;
            $tmp['Description'] = $Description;
            $tmp['Members_allowed'] = $Members_allowed;
            $tmp['Rent_amount'] = $Rent_amount;
            $tmp['inputCity'] = $inputCity;
            $tmp['inputstate'] = $inputstate;
            $tmp['inputZip'] = $inputZip;
            $tmp['bhk'] = $bhk;
            $tmp['my_file_name'] = $my_file_name;

            if ($my_file->isValid()) {
                $my_file->move($directory);
            }
        }
        $res = $this->datas->new_house_data_model($tmp);
        $res =true;

        if ($res == true) {
            return view('owner_dashbord');
        }
    }
}
