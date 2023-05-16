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
    public function reg_user_data_model($tmp)
    {
        $db = \Config\Database::connect();

        $my_demo_data = [
            "u_id" => $tmp['u_id'],
            "name" => $tmp['sname'],
            "email" => $tmp['email_id'],
            "phone_no" => $tmp['mobile'],
            "password" => $tmp['password_id'],
            "occupation" => $tmp['occupation_id'],
            "address" => $tmp['address_id'],
            "city" => $tmp['city_id'],
            "state" => $tmp['state_id'],
            "photo_img" => $tmp['profile_image_name'],
            "smartcard_doc" => $tmp['smart_card_name'],
            "aadhar_doc" => $tmp['aadhar_card_name'],
            "aadhar_no" => $tmp['aadhar_id'],
            "status" => $tmp['family_type'],
        ];

        $query = $db->table('tenant_reg');
        $res = $query->insert($my_demo_data);
        if ($res == true) {
            return true;
        } else {
            return false;
        }
    }
    public function reg_user_data_owner_model($tmp)
    {
        $db = \Config\Database::connect();

        $my_demo_data_owner = [
            "u_id" => $tmp['u_id'],
            "name" => $tmp['sname'],
            "email" => $tmp['email_id'],
            "phone_no" => $tmp['mobile'],
            "password" => $tmp['password_id'],
            "occupation" => $tmp['occupation_id'],
            "address" => $tmp['address_id'],
            "city" => $tmp['city_id'],
            "state" => $tmp['state_id'],
            "photo_img" => $tmp['profile_image_name'],
            "house_doc" => $tmp['smart_card_name'],
            "aadhar_doc" => $tmp['aadhar_card_name'],
            "aadhar_no" => $tmp['aadhar_id'],
            // "status" => $tmp['family_type'],
        ];

        $query = $db->table('ownerreg');
        $res = $query->insert($my_demo_data_owner);
        // $res = true;
        return $res;
        // if ($res == true) {
        //     return true;
        // } else {
        //     return false;
        // }
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

        $query = $db->table('ownerreg');
        $query->select('*');
        $query->where('email', $validate_owner['owner_mail']);
        $query->where('password', $validate_owner['owner_pasword']);
        $res = $query->get()->getResultArray();

        if (count($res) ==1) {
            $this->session->set('u_id', $res[0]['u_id']);
            $this->session->set('email', $res[0]['email']);
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
            $this->session->set('u_id', $res[0]['u_id']);
            $this->session->set('email', $res[0]['email']);
            return "success";
        } else {
            return "fail";
        }
    }


    // new_house_data_model- add new house

    public function get_unique_id()
    {
        $db = \Config\Database::connect();
        $query = $db->table('tenant_reg');
        $query->select('*');
        $res = $query->get()->getResultArray();

        if (count($res) > 0) {
            $intern_id = 1001 + count($res);
        } else {
            $intern_id = 1001;
        }

        return $intern_id;
    }
    public function get_unique_id_owner()
    {
        $db = \Config\Database::connect();
        $query = $db->table('ownerreg');
        $query->select('*');
        $res = $query->get()->getResultArray();

        if (count($res) > 0) {
            $intern_id = 1001 + count($res);
        } else {
            $intern_id = 1001;
        }

        return $intern_id;
    }
    public function owner_card_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->select('*');
        $query->where('u_id', "$unique_id");
        $res = $query->get()->getResultArray();
        return $res;
    }

    public function tenant_card_model()
    {
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->select('*');
        $res = $query->get()->getResultArray();
        return $res;
    }
    public function  apply_button_model($house_no)
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();

        $query = $db->table('new_house');
        $data = [
            'requests' => 'Requested',
            'tenent_id' => $unique_id,
        ];
        $query->where('house_no', $house_no);
        $res = $query->update($data);
        if (!empty($res)) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }


    public function tenant_apply_button_model()
    {
        // $unique_id = session('u_id');
        // $db = \Config\Database::connect();

        // $query = $db->table('new_house');
        // $data = [
        //     'requests' => 'Requested',
        //     'tenent_id' => $unique_id,
        // ];
        // $query->where('house_no', $house_no);
        // $res = $query->update($data);
        // if (!empty($res)) {
        //     return true; // Update successful
        // } else {
        //     return false; // Update failed
        // }
        $db = \Config\Database::connect();
        $query = $db->table('tenant_as_owner');
        $query->select('*');
        $res = $query->get()->getResultArray();
        return $res;
    }

    
    public function tenant_delete_button_model($house_no)
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('tenant_as_owner');
        $query->where('u_id', $unique_id);
        $query->where('house_no', $house_no);
        $data = [
            'u_id' => $unique_id,
            'share_status' => 'no',
        ];
        $res = $query->update($data);
    //    return $res;
        if ($res == true) {
            return "Successfully Deleted";
        } else {
            return "Couldn't Delete";
        }
    }

    // accept_status_model
    public function  accept_status_model($house_no)
    {
        $db = \Config\Database::connect();

        $query = $db->table('new_house');
        $res = $query->get()->getResultArray();
        $data = [
            'accept_status' => 'Accepted',
        ];
        $query->where('house_no', $house_no);
        $res = $query->update($data);
        if (!empty($res)) {
            return $res; // Update successful
        } else {
            return false; // Update failed
        }
    }
    // reject_status_model
    public function  reject_status_model($house_no)
    {
        $db = \Config\Database::connect();

        $query = $db->table('new_house');
        $res = $query->get()->getResultArray();
        $data = [
            'accept_status' => 'Rejected',
        ];
        $query->where('house_no', $house_no);
        $res = $query->update($data);
        if (!empty($res)) {
            return $res; // Update successful
        } else {
            return false; // Update failed
        }
    }
    // my_house_model
    public function  my_house_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->select('*');
        // $data = [
        //     'u_id'=>'FMTN_1003',
        //     'accept_status' => 'Accepted',
        // ];
        // $query->where('house_no', $house_no);
        $query->where('tenent_id', $unique_id);
        $query->where('accept_status', "Accepted");
        $res = $query->get()->getResultArray();
        if (!empty($res)) {
            return  $res; // Update successful
        } else {
            return false; // Update failed
        }
    }


// tenant_as_owner_reg_model
    public function tenant_as_owner_reg_model($data)
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $data=[
            'u_id' => $unique_id,
            'house_no' => $data['house_no'],
            'address' => $data['address'],
            'rent' => $data['rent'],
            'about' => $data['about'],
            'city' => $data['city'],
            'image' => $data['image'],
            'share_status'=>"yes",
            // 'occupation' => $data['occupation'],
        ];
        $query = $db->table('tenant_as_owner');
        $query->insert($data);
        $res = $query->get()->getResultArray();
        if ($res == true) {
            return $res;
        } else {
            return "fail";
        }
    }

    // get_tenant_shared_house_card_model
    public function get_tenant_shared_house_card_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('tenant_as_owner');
        $query->select('*');
        $query->where('u_id', "$unique_id");
        $query->where('share_status', "yes");
        $res = $query->get()->getResultArray();
        return $res;
    }
    // tenant_as_owner_cards_model
    public function tenant_as_owner_cards_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('tenant_as_owner');
        $query->select('*');
        // $query->where('u_id', "$unique_id");
        $res = $query->get()->getResultArray();
        return $res;
    }
    public function profile_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('tenant_reg');
        $query->select('*');
        $query->where('u_id', "$unique_id");
        $res = $query->get()->getResultArray();
        return $res;
    }

    public function profile_owner_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('ownerreg');
        $query->select('*');
        $query->where('u_id', "$unique_id");
        $res = $query->get()->getResultArray();
        return $res;
    }
    public function getowner_from_house_no($reciver_house_no){
        $reciver_house_no_sess = session('house_no');
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->select('*');
        $query->where('house_no', $reciver_house_no_sess);
        $res = $query->get()->getRowArray();
        return $res['u_id'];
    }
    // tenant_msg_model
    public function tenant_msg_model($msg_data)
    {
        $reciver_house_no = session('house_no');
        $reciver = $this->getowner_from_house_no($reciver_house_no);
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $message_data = [
            "u_id" => $unique_id,
            "msg" => $msg_data['message'],
            "sender" => $unique_id,
            "reciver"=> $reciver,
        ];
        $query = $db->table('message_table');
        $res = $query->insert($message_data);
        // $res=true;
        if ($res == true) {
            return $msg_data['message'];
        } else {
            return "fail";
        }
    }
    // owner_msg_model
    public function owner_msg_model($msg_data)
    {
        // $reciver_house_no = session('house_no');
        // $reciver = $this->getowner_from_house_no($reciver_house_no);
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $message_data = [
            "u_id" => $unique_id,
            "msg" => $msg_data['message'],
            "sender" => $unique_id,
            "reciver"=> "FMTN_1003",
        ];
        $query = $db->table('message_table');
        $res = $query->insert($message_data);
        $res=true;
        if ($res == true) {
            return $msg_data['message'];
        } else {
            return "fail";
        }
    }

    // get_requests_model
    public function get_requests_model($uid)
    {
        // $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('new_house  as d');
        $query->select('d.*,s.*');
        $query->join('tenant_reg as s','s.u_id=d.tenent_id');
        $query->where('s.u_id', $uid);
        // $array = [
        //     'u_id' => $unique_id, 
        //     'requests' => "Requested"
        // ];
       // $query->where('d.tenent_id','name');
        $res = $query->get()->getResultArray();
        if (count($res)>0) {
            return $res; // Update successful
        } else {
            return "false"; // Update failed
        }


    // return $uid;
    }
    // owner_msg_retrive_model
    public function owner_msg_retrive_model()
    {
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('message_table');
        $query->select('msg');
        // $query->where('u_id', "$unique_id");
        $array = [
            'u_id' => $unique_id, 
            // 'requests' => "Requested"
        ];
        $query->where($array);
        $query->orWhere('reciver', $unique_id);
        $res = $query->get()->getResultArray();
        if (!empty($res)) {
            return $res; // Update successful
        } else {
            return false; // Update failed
        }
    }
    // tenant_msg_retrive_model
    public function tenant_msg_retrive_model()
    {
        // $reciver_house_no = session('house_no');
        // $reciver = $this->getowner_from_house_no($reciver_house_no);
        $unique_id = session('u_id');
        $db = \Config\Database::connect();
        $query = $db->table('message_table');
        $query->select('msg');
        // $query->where('u_id', "$unique_id");
        $array = [
            'sender' => $unique_id, 
            // 'requests' => "Requested"
        ];
        $query->where($array);
        $query->orWhere('reciver', $unique_id);
        $res = $query->get()->getResultArray();
        if (!empty($res)) {
            return $res; // Update successful
        } else {
            return false; // Update failed
        }
    }





    public function new_house_data_model($tmp)
    {
        $db = \Config\Database::connect();
        $new_house_data = [
            "u_id" => session('u_id'),
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

    // delete_owner_card_model
    public function delete_owner_card_model($house_no)
    {
        $db = \Config\Database::connect();
        $query = $db->table('new_house');
        $query->where('house_no', $house_no);
        $res = $query->delete();
        // $query->delete(['u_id' => '1001']);
        // $res = $query->get()->getResultArray();
        // return "from model";
        if ($res) {
            // Deletion was successful
            return "Successfully Deleted";
        } else {
            // Deletion failed
            return "Couldn't Delete";
        }
    }
}
