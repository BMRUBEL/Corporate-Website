<?php
class Admin extends CI_Controller
{
	public function  index()
	{
		$this->load->view('admin/index');
	}


	public function dashboard()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {
			$this->load->view('admin/dashboard');
		} else {
			redirect(base_url());
		}
	}



	// team start

	public function team_insert()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {

			$this->load->view('admin/team_add');
		} else {
			redirect(base_url());
		}
	}

	public function team_save()
	{
		$data = array();
		$error = "";
		$data['photo'] = $this->input->post('photo', true);
		$data['title'] = $this->input->post('title', true);
		$data['deg'] = $this->input->post('deg', true);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('photo')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error); // Display the upload form with errors
		} else {
			$data = $this->input->post();
			$info = $this->upload->data();
			$data['photo'] = $info['file_name'];


			// Save the team data in the model
			$this->Admin_model->save_team($data);
			redirect(base_url('team-list'), 'refresh');

			if (!$this->upload->do_upload('photo')) {
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
			} else {
				$info = $this->upload->data();
				// echo "<pre>";
				$data['photo'] = $info['file_name'];
			}
		}
	}



	public function team_list()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {
			$data['list'] = $this->Admin_model->getteamlist();
			$this->load->view('admin/team_list', $data);
		} else {
			redirect(base_url());
		}
	}
	public function team_edit($id)
	{
		$data['teamedit'] = $this->Admin_model->getteamedit($id);
		$this->load->view('admin/team_edit', $data);
	}

	public function team_update($id)
	{
		$data = array();
		$error = "";

		// Get form input values
		$data['photo'] = $this->input->post('photo', true);
		$data['title'] = $this->input->post('title', true);
		$data['deg'] = $this->input->post('deg', true);

		// Configure file upload
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('photo')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error); // Display the upload form with errors
		} else {
			// File uploaded successfully, get file information

			$info = $this->upload->data();
			$data['photo'] = $info['file_name'];

			// Save the team data in the model
			$this->Admin_model->update_team($id, $data['photo'], $data['title'], $data['deg']);
			redirect(base_url('team-list'), 'refresh');
		}
	}


	// public function team_update($id)
	// {
	// 	$data = array();
	// 	$error = "";

	// 	// Get form input values
	// 	$data['title'] = $this->input->post('title', true);
	// 	$data['deg'] = $this->input->post('deg', true);

	// 	// Check if title and deg fields are empty
	// 	if (empty($data['title']) || empty($data['deg'])) {
	// 		$error = "Title and Degree fields are required.";
	// 		$this->load->view('upload_form', array('error' => $error));
	// 		return;
	// 	}

	// 	// Configure file upload
	// 	$config['upload_path'] = './uploads/';
	// 	$config['allowed_types'] = 'gif|jpg|png|pdf';

	// 	$this->load->library('upload', $config);
	// 	$this->upload->initialize($config);

	// 	if (!$this->upload->do_upload('photo')) {
	// 		$error = array('error' => $this->upload->display_errors());
	// 		$this->load->view('upload_form', $error); // Display the upload form with errors
	// 	} else {
	// 		// File uploaded successfully, get file information
	// 		$info = $this->upload->data();
	// 		$data['photo'] = $info['file_name'];

	// 		// Save the team data in the model
	// 		$this->Admin_model->update_team($id, $data['photo'], $data['title'], $data['deg']);
	// 		redirect(base_url('team-list'), 'refresh');
	// 	}
	// }



	public function team_delete($id)
	{
		$this->Admin_model->delete_team($id);
		redirect(base_url('team-list'), 'refresh');
	}


	// team end




	// service start

	public function service_insert()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {
			$this->load->view('admin/service_insert');
		} else {
			redirect(base_url());
		}
	}

	public function service_save()
	{
		$icon = $this->input->post('icon');
		$name = $this->input->post('name');
		$brif = $this->input->post('brif');
		$this->load->model('Admin_model');
		$this->Admin_model->saveSer($icon, $name, $brif);
		redirect(base_url('service-list'), 'refresh');
	}


	public function servi()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {
			$data['list'] = $this->Admin_model->getserviceslist();
			$this->load->view('admin/service_list', $data);
		} else {
			redirect(base_url());
		}
	}

	public function service_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['servedit'] = $this->Admin_model->getservicesedit($id);
		$this->load->view('admin/service_edit', $data);
	}


	public function service_update($id)
	{
		$icon = $this->input->post('icon');
		$name = $this->input->post('name');
		$brif = $this->input->post('brif');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_service($id, $icon, $name, $brif);
		redirect(base_url('service-list'), 'refresh');
	}


	public function service_delete($id)
	{
		$this->Admin_model->delete_service($id);
		redirect(base_url('service-list'), 'refresh');
	}


	// service end


	// whyus start

	public function whyus_insert()
	{
		$user = $this->session->userdata('userID');
		if (isset($user)) {
			$this->load->view('admin/whyus_insert');
		} else {
			redirect(base_url());
		}
	}

	public function whyus_save()
	{
		$icon = $this->input->post('icon');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$this->load->model('Admin_model');
		$this->Admin_model->savewhy($icon, $title, $description);
		redirect(base_url('whyus-list'), 'refresh');
	}

	public function whyus_edit($id)
	{
		// $this->load->model('Admin_model');
		$data['whyedit'] = $this->Admin_model->getwhyusedit($id);
		$this->load->view('admin/whyus_edit', $data);
	}


	public function whyus_update($id)
	{
		$icon = $this->input->post('icon');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		// $this->load->model('Admin_model');
		$this->Admin_model->update_whyus($id, $icon, $title, $description);
		redirect(base_url('whyus-list'), 'refresh');
	}


	public function whyus_list()
	{
		$data['list'] = $this->Admin_model->getwhyuslist();
		$this->load->view('admin/whyus_list', $data);
	}

	public function whyus_delete($id)
	{
		$this->Admin_model->delete_whyus($id);
		redirect(base_url('whyus-list'), 'refresh');
	}

	// whyus end


	// contact start

	public function contact_list()
	{
		$data['list'] = $this->Admin_model->getcontactlist();
		$this->load->view('admin/contact_list', $data);
	}


	// contact end
}
