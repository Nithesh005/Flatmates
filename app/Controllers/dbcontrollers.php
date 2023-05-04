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
        $owner_mail = $this->request->getvar('owner_mail');
        $owner_pasword = $this->request->getvar('owner_pasword');
        // $res = validation function
        echo json_encode("success");
    }
    public function tenantlogin(){
        $tenant_mail = $this->request->getvar('tenant_mail');
        $tenant_pasword = $this->request->getvar('tenant_pasword');
        // $res = validation function
        echo json_encode("success");
    }
    public function reg_user_data(){
        $reg_data['sname'] = $this->request->getvar('sname');
        $res = $this->datas->reg_user_data_model($reg_data);   
        echo json_encode($res);
    }
    public function new_house_reg_data(){
        $reg_data['house_no'] = $this->request->getvar('house_no');
        $res = $this->datas->new_house_reg_data_model($reg_data);   
        echo json_encode($res);
    }
}