<?php

class User_model extends CI_Model
{
    public function getuserlist()
    {
        $data = $this->db->get('users');
        return $data->result();
    }

    public function save_user($name, $email, $password)
    {
        $this->db->insert('users', ['name' => $name, 'email' => $email, 'password' => $password]);
    }

    public function getuser($id)
    {
        $data = $this->db->where('id', $id)->get('users');
        return $data->row();
    }

    public function update_user($id, $name, $email, $password)
    {
        $this->db->where('id', $id)->update('users', ['name' => $name, 'email' => $email, 'password' => $password]);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id)->delete('users');
    }
}
