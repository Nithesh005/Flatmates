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
        ];

        $query = $db->table('tenant_reg');
        $res = $query->insert($my_demo_data);
        return $res;
    }
    public function new_house_reg_data_model($reg_data)
    {
        // $db = \Config\Database::connect();

        // $my_demo_data = [
        //     "name" => $reg_data['sname'],
        // ];

        // $query = $db->table('tenant_reg');
        // $res = $query->insert($my_demo_data);
        return "comming from model new house data";
    }
}
