<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login_view');
	}

	public function dologin()
	{
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('USERNAME', 'USERNAME', 'trim|required');
			$this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->dologin() == TRUE) {
					redirect('kurikulum/dashboard');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_view', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		} 
	}

	


	public function dologin_guru()
	{

		$this->load->view('login_guru');
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			$this->form_validation->set_rules('NM_GURU', 'NM_GURU', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->dologin_guru() == TRUE) {
					redirect('dashboard_guru');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_view', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		} 
	}

	public function logout()
	{
		$data = array(
				'USERNAME'	=> '',
				'logged_in' => FALSE
			);

		$this->session->sess_destroy();
		redirect('Admin');
	}

	
}