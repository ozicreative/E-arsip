<?php

namespace App\Models;

use CodeIgniter\Model;

class Mauth extends Model
{
    public function login($email, $password)
    {
        return $this->db->table('user')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
