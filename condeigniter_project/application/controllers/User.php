<?php

class User extends CI_Controller
{
    public function user_list()
    {
        $this->load->model('User_model');
        $data['list'] = $this->User_model->getuserlist();
        $this->load->view('admin/user_list', $data);
    }

    public function create()
    {
        $this->load->view('admin/user_add');
    }
    public function save()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('User_model');
        $this->User_model->save_user($name, $email, $password);
        redirect(base_url('user-list'), 'refresh');
    }
    public function edit($id)
    {
        $this->load->model('User_model');
        $data['edit'] = $this->User_model->getuser($id);
        $this->load->view('admin/user_edit', $data);
    }
    public function user_update($id)
    {
        $this->load->model('User_model');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->User_model->update_user($id, $name, $email, $password);
        redirect(base_url('user-list'), 'refresh');
    }


    public function remove_user($id)
    {
        $this->load->model('User_model');
        $this->User_model->delete_user($id);
        redirect(base_url('user-list'), 'refresh');
    }
}
