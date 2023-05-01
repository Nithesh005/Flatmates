<?php

namespace App\Controllers;
// use App\Models\Intern_Model;
class dbcontrollers extends BaseController{
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
}