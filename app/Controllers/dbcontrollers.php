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
        $reg_data['sname'] = $this->request->getvar('sname');
        $reg_data['email_id'] = $this->request->getvar('email_id');
        $reg_data['mobile'] = $this->request->getvar('mobile');
        $reg_data['password_id'] = $this->request->getvar('password_id');
        $reg_data['occupation_id'] = $this->request->getvar('occupation_id');
        $reg_data['address_id'] = $this->request->getvar('address_id');
        $reg_data['city_id'] = $this->request->getvar('city_id');
        $reg_data['state_id'] = $this->request->getvar('state_id');
        $reg_data['profile_file_txt'] = $this->request->getvar('profile_file_txt');
        $reg_data['resume_file_txt'] = $this->request->getvar('resume_file_txt');
        $reg_data['bonafide_file_txt'] = $this->request->getvar('bonafide_file_txt');
        $reg_data['aadhar_id'] = $this->request->getvar('aadhar_id');
        $reg_data['family_type'] = $this->request->getvar('family_type');
        // $reg_data['sname'] = $this->request->getvar('sname');
        $res = $this->datas->reg_user_data_model($reg_data);
        echo json_encode($res);
    }
    public function new_house_reg_data()
    {
        $reg_data['house_no'] = $this->request->getvar('house_no');
        $reg_data['inputAddress'] = $this->request->getvar('inputAddress');
        $reg_data['inputAddress2'] = $this->request->getvar('inputAddress2');
        $reg_data['Description'] = $this->request->getvar('Description');
        $reg_data['Members_allowed'] = $this->request->getvar('Members_allowed');
        $reg_data['Rent_amount'] = $this->request->getvar('Rent_amount');
        $reg_data['inputCity'] = $this->request->getvar('inputCity');
        $reg_data['State'] = $this->request->getvar('State');
        $reg_data['inputZip'] = $this->request->getvar('inputZip');
        $reg_data['my_file'] = $this->request->getvar('my_file');
        $res = $this->datas->new_house_reg_data_model($reg_data);   
        echo json_encode($res);
    }

    // post new house
    public function new_house_data()
    {
        $new_data['house_no'] = $this->request->getvar('house_no');
        $new_data['inputAddress'] = $this->request->getvar('inputAddress');
        $new_data['inputAddress2'] = $this->request->getvar('inputAddress2');
        $new_data['Description'] = $this->request->getvar('Description');
        $new_data['Members_allowed'] = $this->request->getvar('Members_allowed');
        $new_data['Rent_amount'] = $this->request->getvar('Rent_amount');
        $new_data['inputCity'] = $this->request->getvar('inputCity');
        $new_data['inputstate'] = $this->request->getvar('inputstate');
        $new_data['inputZip'] = $this->request->getvar('inputZip');
        $new_data['bhk'] = $this->request->getvar('bhk');
        $new_data['my_file'] = $this->request->getvar('my_file');

        $res = $this->datas->new_house_data_model($new_data);
        echo json_encode($res);
    }

    public function unique_id()
    {
        // $data = new Intern_Model();
        $ex_id = $this->datas->get_unique_id();
        $ex_id = 'FM_' . $ex_id;
        return $ex_id;
    }


    public function demo_reg()
    {
        helper(['filesystem']);
        $u_id = $this->unique_id();
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
            $unique_id = $this->unique_id();
            $directory = "./public/uploads/" . $unique_id;
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

        if ($res == true) {
            return view('login');
        }

    }

}