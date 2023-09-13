<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// ------dashboard----

	// public function dash()
	// {
	// 	$user = $this->session->userdata('userID');
	// 	if (isset($user)) {
	// 		$this->load->view('admin/dashboard');
	// 	} else {
	// 		redirect(base_url());
	// 	}
	// }


	// team start

	// team end


	// public function service()
	// {
	// 	// $data=$this->input->post();
	// 	// $this->Newbiz_model->saveService($data);
	// 	// $this->load->view('admin/service');

	// }


	// ------Newbiz----
	public function index()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {

			$data['service'] = $this->Newbiz_model->add_service();
			$data['team'] = $this->Newbiz_model->add_team();
			$data['whyus'] = $this->Newbiz_model->add_whyus();

			$this->load->view('newbiz/index', $data);
			// $this->load->view('newbiz/header');
			// $this->load->view('newbiz/hero');
			// $this->load->view('newbiz/about');
			// $this->load->view('newbiz/service', $data);
			// $this->load->view('newbiz/whyus');
			// $this->load->view('newbiz/portfolio');
			// $this->load->view('newbiz/testimonial');
			// $this->load->view('newbiz/team', $data);
			// $this->load->view('newbiz/client');

			// $this->load->view('newbiz/contact', $data);
			// $this->load->view('newbiz/footer');
		} else {
			redirect(base_url('admin/index'));
		}
	}

	public function contact()
	{
		$name = $this->input->post('name');
		$mail = $this->input->post('email');
		$sub = $this->input->post('subject');
		$msg = $this->input->post('message');

		$this->Newbiz_model->savecontact($name, $mail, $sub, $msg);
		// $this->load->view('newbiz/contact');
		redirect(base_url('contact-list'), 'refresh');
	}
}
