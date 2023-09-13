<?php
class Admin_model extends CI_Model
{
    // --------------------login-------------------------
    public function login($email, $password)
    {
        $data = $this->db->where('email', $email)
            ->where('password', $password)
            ->get('users');
        return $data->row();
    }


    public function saveSer($icon, $name, $brif)
    {
        $this->db->insert('service', ['icon' => $icon, 'name' => $name, 'brif' => $brif]);
    }

    public function getserviceslist()
    {
        $data = $this->db->get('service');
        return $data->result();
    }
    public function getservicesedit($id)
    {
        $data = $this->db->where('id', $id)->get('service');
        return $data->row();
    }

    public function update_service($id, $icon, $name, $brif)
    {
        $this->db->where('id', $id)->update('service', ['icon' => $icon, 'name' => $name, 'brif' => $brif]);
    }

    public function delete_service($id)
    {
        $this->db->where('id', $id)->delete('service');
    }


    // team_dashboared
    public function save_team($data)
    {
        // Insert the team data into the database
        return $this->db->insert('team', $data);
    }

    public function getteamlist()
    {
        $data = $this->db->get('team');
        return $data->result();
    }

    public function getteamedit($id)
    {
        $data = $this->db->where('id', $id)->get('team');
        return $data->row();
    }

    public function update_team($id, $photo, $title, $deg)
    {
        // $this->db->where('id', $id)->update('team', ['photo' => $photo, 'title' => $title, 'deg' => $deg]);
        // $data = array();
        // $data['photo'] = $this->input->post('photo', true);
        // $data['title'] = $this->input->post('title', true);
        // $data['deg'] = $this->input->post('deg', true);
        // $this->db->where('id', $id);
        // $this->db->update('team', $data);


        // Data is valid, proceed with the update.
        $data = array(
            'photo' => $photo,
            'title' => $title,
            'deg' => $deg
        );

        $this->db->where('id', $id);
        $result = $this->db->update('team', $data);

        if ($result) {
            // Update was successful.
            return true;
        } else {
            // Handle update failure (e.g., log the error or return an error message).
            return false;
        }
    }


    public function delete_team($id)
    {
        $this->db->where('id', $id)->delete('team');
    }

    // whyus start

    public function savewhy($icon, $title, $description)
    {
        // Insert the team data into the database
        $this->db->insert('whyus', ['icon' => $icon, 'title' => $title, 'description' => $description]);
    }

    public function getwhyusedit($id)
    {
        $data = $this->db->where('id', $id)->get('whyus');
        return $data->row();
    }

    public function update_whyus($id, $icon, $title, $description)
    {
        $this->db->where('id', $id)->update('whyus', ['icon' => $icon, 'title' => $title, 'description' => $description]);
    }



    public function getwhyuslist()
    {
        $data = $this->db->get('whyus');
        return $data->result();
    }

    public function delete_whyus($id)
    {
        $this->db->where('id', $id)->delete('whyus');
    }

    // whyus end


    // contact start

    public function getcontactlist()
    {
        $data = $this->db->get('contact');
        return $data->result();
    }

    // contact end
}
