<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class Intern_Model extends Model{
    public function reg_user_data_model($reg_data){
        $db = \Config\Database::connect();

        $my_demo_data = [
            "db_name" => $reg_data['intern_id'],
            
        ];

        $query = $db->table('tablename');
        $res = $query->insert($my_demo_data);
        return $res;
    }
}

?>