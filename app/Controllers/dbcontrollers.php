<?php

namespace App\Controllers;
use App\Models\Dbmodels;
use CodeIgniter\CLI\Console;
class dbcontrollers extends BaseController{
    protected $datas;
    protected $session;
    
    public function __construct(){
        $this->session = \Config\Services::session();
        $this->datas = new Dbmodels();
    }
    public function ownerlogin(){
        $validate_owner['owner_mail'] = $this->request->getvar('owner_mail');
        $validate_owner['owner_pasword'] = $this->request->getvar('owner_pasword');
        $res = $this->datas->validate_ownerlogin_model($validate_owner);
        echo json_encode($res);
    }
    public function tenantlogin(){
        $validate_tenant['tenant_mail'] = $this->request->getvar('tenant_mail');
        $validate_tenant['tenant_password'] = $this->request->getvar('tenant_password');
        $res = $this->datas->validate_tenantlogin_model($validate_tenant);
        echo json_encode($res);
    }
    public function reg_user_data(){
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
    public function new_house_reg_data(){
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
}