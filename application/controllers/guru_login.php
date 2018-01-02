<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_login extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login_guru');
	}

	public function login_guru()
	{

		$this->load->view('login_guru');
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('NIK', 'NIK', 'trim|required');
			$this->form_validation->set_rules('NM_GURU', 'NM_GURU', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->Admin_m->login_guru() == TRUE) {
					redirect('guru/dashboard');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('login_guru', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_guru', $data);
			}
		} 
	}
	public function logout()
	{
		$data = array(
				'NIK'	=> '',
				'logged_in' => FALSE
			);

		$this->session->sess_destroy();
		redirect('guru_login');
	}
}

/* End of file guru.php */
/* Location: ./application/controllers/guru/guru.php */