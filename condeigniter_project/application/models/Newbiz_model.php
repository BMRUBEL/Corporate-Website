<?php
class  Newbiz_model extends CI_Model
{
    public function add_service()
    {
        $data = $this->db->get('service');
        return $data->result();
    }
    // public function saveService($data)
    // {
    //     $this->db->insert('service',$data);
    // }



    public function add_team()
    {
        $data = $this->db->get('team');
        return $data->result();
    }

    public function add_whyus()
    {
        $data = $this->db->get('whyus');
        return $data->result();
    }



    public function savecontact($name, $mail, $sub, $msg)
    {
        $this->db->insert('contact', ['name' => $name, 'email' => $mail, 'subject' => $sub, 'message' => $msg]);
    }
}
