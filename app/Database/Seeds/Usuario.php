<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $password = password_hash("1234",PASSWORD_DEFAULT);
        $usuario = "8320";
        $type = "admin";
        $data = [
            'usuario' => $usuario,
            'password'    => $password,
            'type'    => $type
        ];

        $this->db->table('t_usuarios')->insert($data);
    }
}
