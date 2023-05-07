<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class Dbmodels extends Model
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function reg_user_data_model($reg_data)
    {
        $db = \Config\Database::connect();

        $my_demo_data = [
            "name" => $reg_data['sname'],
            "email" => $reg_data['email_id'],
            "phone_no" => $reg_data['mobile'],
            "password" => $reg_data['password_id'],
            "occupation" => $reg_data['occupation_id'],
            "address" => $reg_data['address_id'],
            "city" => $reg_data['city_id'],
            "state" => $reg_data['state_id'],
            "photo_img" => $reg_data['profile_file_txt'],
            "smartcard_doc" => $reg_data['resume_file_txt'],
            "aadhar_doc" => $reg_data['bonafide_file_txt'],
            "aadhar_no" => $reg_data['aadhar_id'],
            "status" => $reg_data['family_type'],
        ];

        $query = $db->table('tenant_reg');
        $res = $query->insert($my_demo_data);
        return $res;
    }
    // public function new_house_reg_data_model($reg_data)
    // {
    //     $db = \Config\Database::connect();

    //     $my_demo_data = [
    //         "house_no" => $reg_data['house_no'],
    //         "name" => $reg_data['inputAddress'],
    //         "name" => $reg_data['inputAddress2'],
    //         "name" => $reg_data['Description'],
    //         "name" => $reg_data['Members_allowed'],
    //         "name" => $reg_data['Rent_amount'],
    //         "name" => $reg_data['inputCity'],
    //         "name" => $reg_data['State'],
    //         "name" => $reg_data['inputZip'],
    //         "name" => $reg_data['my_file'],
    //     ];

    //     $query = $db->table('tenant_reg');
    //     $res = $query->insert($my_demo_data);
    //     return "comming from model new house data";
    // }
    public function validate_ownerlogin_model($validate_owner)
    {
        $db = \Config\Database::connect();

        $query = $db->table('owner_reg');
        $query->select('*');
        $query->where('email', $validate_owner['owner_mail']);
        $query->where('password', $validate_owner['owner_pasword']);
        $res = $query->get()->getResultArray();

        if (count($res) == 1) {
            $this->session->set('u_id', $res[0]['u_id']);
            return "success";
        } else {
            return "fail";
        }
    }
    public function validate_tenantlogin_model($validate_tenant)
    {
        $db = \Config\Database::connect();

        $query = $db->table('tenant_reg');
        $query->select('*');
        $query->where('email', $validate_tenant['tenant_mail']);
        $query->where('password', $validate_tenant['tenant_password']);
        $res = $query->get()->getResultArray();

        if (count($res) == 1) {
            return "success";
        } else {
            return "fail";
        }
    }


    // new_house_data_model- add new house

    public function get_unique_id()
    {
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->select('*');
        $res = $query->get()->getResultArray();

        if (count($res) > 0) {
            $intern_id = 1001 + count($res);
        } else {
            $intern_id = 1001;
        }

        return $intern_id;
    }


    public function new_house_data_model($tmp)
    {
        $db = \Config\Database::connect();
        $new_house_data = [
            "u_id" =>  $tmp['u_id'],
            "house_no" => $tmp['house_no'],
            "address" => $tmp['inputAddress'],
            "about" => $tmp['inputAddress2'],
            "description" => $tmp['Description'],
            "members" => $tmp['Members_allowed'],
            "rent" => $tmp['Rent_amount'],
            "city" => $tmp['inputCity'],
            "state" => $tmp['inputstate'],
            "zipcode" => $tmp['inputZip'],
            "BHK" => $tmp['bhk'],
            "image" => $tmp['my_file_name'],

        ];

        $query = $db->table('new_house');
        $res = $query->insert($new_house_data);
        if ($res == true) {
            return true;
        } else {
            return false;
        }
    }
}
