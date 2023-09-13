<?php
class Login_model extends CI_Model
{
    public function login($email, $password)
    {
        $data = $this->db->where('email', $email)
            ->where('password', $password)
            ->get('users');
        return $data->row();
    }
}
