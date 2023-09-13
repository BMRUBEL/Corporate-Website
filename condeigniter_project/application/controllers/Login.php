<?php
class Login extends CI_Controller
{
    public function signin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Login_model');
        $data = $this->Login_model->login($email, $password);
        if ($data != null) {
            $this->session->set_userdata(['userID' => $data->id, 'name' => $data->name]);
            // $this->load->view('admin/dashboard');
        } else {
            echo "error";
        }
        redirect(base_url('dashboard'));
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('adminpanel'));
    }
}
