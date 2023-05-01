<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class Intern_Model extends Model{
    public function reg_user_data_model($reg_data){
        $db = \Config\Database::connect();

        $my_demo_data = [
            "name" => $reg_data['sname'],
            "email" => $reg_data['email_id'],
            "password" => $reg_data['password_id'],
            "occupation" => $reg_data['occupation_id'],
            "address" => $reg_data['address_id'],
            "city" => $reg_data['city_id'],
            "state" => $reg_data['state_id'],
            "photo_img" => $reg_data['profile_file_txt'],
            "smartcard _doc" => $reg_data['resume_file_txt'],
            "aadhar_doc" => $reg_data['bonafide_file_txt'],
            "aadhar_no" => $reg_data['aadhar_id'],
            "phone_no" => $reg_data['mobile'],
            
        ];

        $query = $db->table('tenant_reg');
        $res = $query->insert($my_demo_data);
        return $res;
    }
}

?>