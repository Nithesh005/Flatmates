<?php

namespace App\Controllers;
// use App\Models\Intern_Model;
class dbcontrollers extends BaseController{
    protected $datas;
    public function ownerlogin(){
        $owner_mail = $this->request->getvar('owner_mail');
        $owner_pasword = $this->request->getvar('owner_pasword');
        echo json_encode($owner_mail);
    }
    public function tenantlogin(){
        $tenant_mail = $this->request->getvar('tenant_mail');
        $tenant_pasword = $this->request->getvar('tenant_pasword');
        echo json_encode($tenant_mail);
    }
    public function reg_user_data(){
        
        $sname = $this->request->getvar('sname');
        $email_id = $this->request->getvar('email_id');
        $mobile = $this->request->getvar('mobile');
        $password_id = $this->request->getvar('password_id');
        $occupation_id = $this->request->getvar('occupation_id');
        $address_id = $this->request->getvar('address_id');
        $city_id = $this->request->getvar('city_id');
        $state_id = $this->request->getvar('state_id');
        $profile_file_txt = $this->request->getvar('profile_file_txt');
        $resume_file_txt = $this->request->getvar('resume_file_txt');
        $bonafide_file_txt = $this->request->getvar('bonafide_file_txt');
        $aadhar_id = $this->request->getvar('aadhar_id');
        // $tenant_pasword = $this->request->getvar('tenant_pasword');
        $reg_data['sname'] = $this->request->getvar('tenant_mail');
        $reg_data['email_id'] = $email_id;
        $reg_data['mobile'] = $mobile;
        $reg_data['password_id'] = $password_id;
        $reg_data['occupation_id'] = $occupation_id;
        $reg_data['address_id'] = $address_id;
        $reg_data['city_id'] = $city_id;
        $reg_data['state_id'] = $state_id;
        $reg_data['profile_file_txt'] = $profile_file_txt;
        $reg_data['resume_file_txt'] = $resume_file_txt;
        $reg_data['bonafide_file_txt'] = $bonafide_file_txt;
        $reg_data['aadhar_id'] = $aadhar_id;
        $res = $this->datas->reg_user_data_model($reg_data);   
        echo json_encode("res");
    }
}