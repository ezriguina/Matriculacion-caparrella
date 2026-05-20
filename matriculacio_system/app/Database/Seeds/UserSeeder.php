<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [ 
            'name'  =>'Bachir Zriguinat',
            'email'  =>'ezriguina@inscaparrella.cat',
            'password'=>'112233',
            'role' => 'admin' ,
            'active'=> 1
        ];



                $this->db->table('usuarios')->insertBatch($data);

    }
}
